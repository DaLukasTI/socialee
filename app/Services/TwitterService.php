<?php

namespace App\Services;


use App\Models\TwitterPost;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TwitterService
{
    public static function createTwitterPost(TwitterPost $post)
    {
        $stack = self::setStackValue();

        $client = new Client(
            [
                'base_uri' => 'https://api.twitter.com/1.1/statuses/',
                'handler' => $stack,
                'auth' => 'oauth'
            ]
        );

        try {
            $response = $client->post('update.json?status=' . $post->post_body);
            self::updatePost(json_decode($response->getBody()->getContents(), true), $post);
        } catch (GuzzleException $e) {
        }
    }

    public static function setStackValue()
    {
        $stack = HandlerStack::create();
        $middleware = new Oauth1(
            [
                'consumer_key' => 'zAx8fKz8Is33KqYi6o45FBbiS',
                'consumer_secret' => 'iBjNZIsQD8DsaALyw3LT7eG8y7Z7QaEcbQOQkdNqkeQAYcEN0V',
                'token' => '1375603766003654659-yAdoJrVamCQOTNQjN1RLLCZ126zuI5',
                'token_secret' => '9y42RV3dTYfHztafaHOYhyTIIe5F6SxUoFT0GeTfYwwiw'
            ]
        );
        $stack->push($middleware);

        return $stack;
    }

    public static function updatePost(array $data, TwitterPost|Media $post): Redirector|Application|RedirectResponse
    {
        $dataArray = [
            'tweet_id' => $data['id'],
            'retweets' => $data['retweet_count'],
            'favourites' => $data['favorite_count']
        ];

        try {
            $post->update($dataArray);
        } catch (QueryException $e) {
            TwitterPost::findOrFail($post->model_id)->update($dataArray);
        }

        return redirect('/post');
    }

    public static function createTwitterPostWithMedia(Media $post, string $post_body)
    {
        $media_data = self::prepareDataArray($post, 0, []);
        $stack = self::setStackValue();
        $uploader = new Client(
            [
                "base_uri" => 'https://upload.twitter.com/1.1/media/',
                "handler" => $stack,
                "auth" => 'oauth'
            ]
        );

        try {
            $response = $uploader->post(
                'upload.json',
                [
                    'multipart' => $media_data
                ]
            );
            $media_id = json_decode($response->getBody()->getContents(), true);
            $media_data = self::prepareDataArray($post, 1, $media_id);
        } catch (GuzzleException $e) {
        }

        if ($response->getStatusCode() === 202) {
            try {
                $response = $uploader->post(
                    'upload.json',
                    [
                        'multipart' => $media_data
                    ]
                );
                $jsonData = $response->getBody()->getContents();
            } catch (GuzzleException $e) {
            }

            $media_data = self::prepareDataArray($post, 2, $media_id);
            try {
                $response = $uploader->post(
                    'upload.json',
                    [
                        'multipart' => $media_data
                    ]
                );
                $jsonData = json_decode($response->getBody()->getContents(), true);
            } catch (GuzzleException $e) {
            }
        }

        $client = new Client(
            [
                'base_uri' => 'https://api.twitter.com/1.1/statuses/',
                'handler' => $stack,
                'auth' => 'oauth'
            ]
        );

        try {
            $response = $client->post('update.json?status=' . $post_body . '&media_ids=' . $jsonData['media_id']);
        } catch (GuzzleException $e) {
        }


        self::updatePost(json_decode($response->getBody()->getContents(), true), $post);
    }

    public static function prepareDataArray(Media $post, int $run, array $apiData): array
    {
        $contents_media = Psr7\Utils::tryFopen($post->getPath(), 'r');


        match ($run) {
            0 => $media_data = [
                [
                    'name' => 'media',
                    'contents' => $contents_media,
                ],
                [
                    'name' => 'command',
                    'contents' => 'INIT',
                ],
                [
                    'name' => 'total_bytes',
                    'contents' => $post->size,
                ],
                [
                    'name' => 'media_type',
                    'contents' => $post->mime_type,
                ],
            ],

            1 => $media_data = [
                [
                    'name' => 'media',
                    'contents' => $contents_media,
                ],
                [
                    'name' => 'command',
                    'contents' => 'APPEND',
                ],
                [
                    'name' => 'total_bytes',
                    'contents' => $post->size,
                ],
                [
                    'name' => 'media_type',
                    'contents' => $post->mime_type,
                ],
                [
                    'name' => 'segment_index',
                    'contents' => 0,
                ],
                [
                    'name' => 'media_id',
                    'contents' => $apiData['media_id'],
                ]
            ],
            2 => $media_data = [
                [
                    'name' => 'media',
                    'contents' => $contents_media,
                ],
                [
                    'name' => 'command',
                    'contents' => 'FINALIZE',
                ],
                [
                    'name' => 'total_bytes',
                    'contents' => $post->size,
                ],
                [
                    'name' => 'media_type',
                    'contents' => $post->mime_type,
                ],
                [
                    'name' => 'segment_index',
                    'contents' => 0,
                ],
                [
                    'name' => 'media_id',
                    'contents' => $apiData['media_id'],
                ]
            ],
        };

        return $media_data;
    }

}
