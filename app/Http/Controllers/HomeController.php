<?php

namespace App\Http\Controllers;

use App\Models\TwitterPost;
use App\Services\TwitterGetPostsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $posts = TwitterPost::with('media')->get();
        return view('home',compact('posts'));
    }

    public function updatePost(){

        $data= TwitterGetPostsService::getUserPostsId();

        foreach ($data['data'] as $postData){
            TwitterGetPostsService::getUserPostsMetaData($postData['id']);
        }
        $posts = TwitterPost::all();
        return view('home',compact('posts'));

    }

}
