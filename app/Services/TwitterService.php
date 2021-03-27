<?php

namespace App\Services;


use App\Models\TwitterPost;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TwitterService
{
    public static function createTwitterPost(TwitterPost $post)
    {
        ray($post, $post->post_body);
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

        $client = new Client(
            [
                'base_uri' => 'https://api.twitter.com/1.1/statuses/',
                'handler' => $stack,
                'auth' => 'oauth'
            ]
        );

        try {
            $response = $client->post('update.json?status=' . $post->post_body);
            $jsonResponse = $response->getReasonPhrase();
            $jsonStatusCode = $response->getStatusCode();
            $jsonData = $response->getBody()->getContents();
            ray($response);
        } catch (GuzzleException $e) {
        }
    }

    public static function createTwitterPostWithMedia(Media $post, string $post_body)
    {
        $media_data = [
            "media" => $post->getPath(),
            "command" => 'INIT',
            "total_bytes" => $post->size,
            "media_type" => $post->mime_type,
        ];


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

        $uploader = new Client(
            [
                "base_uri" => 'https://upload.twitter.com/1.1/media/',
                "handler" => $stack,
                "auth" => 'oauth'
            ]
        );
        ray(['multipart' => $media_data]);


        try {
            $response = $uploader->post(
                'upload.json',
                [
                    'multipart' => [
                        [
                            'name' => 'media',
                            'contents' => Psr7\Utils::tryFopen($post->getPath(), 'r'),
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


                    ]
                ]
            );
            $media_id = json_decode($response->getBody()->getContents(), true);
            ray($media_id['media_id']);
            $jsonData = json_decode($response->getBody()->getContents(), true);
            ray($jsonData);
        } catch (GuzzleException $e) {
        }

        if ($response->getStatusCode() === 202) {
            try {
                $response = $uploader->post(
                    'upload.json',
                    [
                        'multipart' => [
                            [
                                'name' => 'media',
                                'contents' => Psr7\Utils::tryFopen($post->getPath(), 'r'),
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
                                'contents' => $media_id['media_id'],
                            ],


                        ]
                    ]
                );
                $jsonData = $response->getBody()->getContents();
                ray($response)->purple();
            } catch (GuzzleException $e) {
            }

            try {
                $response = $uploader->post(
                    'upload.json',
                    [
                        'multipart' => [
                            [
                                'name' => 'media',
                                'contents' => Psr7\Utils::tryFopen($post->getPath(), 'r'),
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
                                'contents' => $media_id['media_id'],
                            ],


                        ]
                    ]
                );
                $jsonData = json_decode( $response->getBody()->getContents(),true);
                ray($response)->orange();
                ray($jsonData)->red();
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
            $response = $client->post('update.json?status=' . $post_body .'&media_ids='.$jsonData['media_id']);
            $jsonData = $response->getBody()->getContents();
            ray($response);
        } catch (GuzzleException $e) {
        }





    }
    /*public static function prepareMiddleware(){


    return
    }*/


}
