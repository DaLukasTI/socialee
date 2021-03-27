<?php

namespace App\Services;


use App\Models\TwitterPost;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use phpDocumentor\Reflection\Types\Integer;
use ZipStream\Bigint;

class TwitterGetPostsService
{
    public static function getUserPostsId()
    {
        $stack = TwitterService::setStackValue();

        $client = new Client(
            [
                'base_uri' => 'https://api.twitter.com/2/users/1375603766003654659/',
                'handler' => $stack,
                'auth' => 'oauth'
            ]
        );

        try {
            $response = $client->get('tweets?max_results=25');

            return json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
        }

        return null;
    }

    public static function getUserPostsMetaData(string $id)
    {


        $stack = TwitterService::setStackValue();

        $client = new Client(
            [
                'base_uri' => 'https://api.twitter.com/1.1/statuses/',
                'handler' => $stack,
                'auth' => 'oauth'
            ]
        );

        try {
            $response = $client->get('lookup.json?id='.$id);

           $data = json_decode($response->getBody()->getContents(), true)[0];

           return  TwitterPost::Where('tweet_id','=',$data['id'])->update(['favourites' => $data['favorite_count'],'retweets' =>  $data['retweet_count']]);

        } catch (GuzzleException $e) {
        }

        return null;
    }


}
