<?php

namespace App\Http\Livewire;

use App\Models\TwitterPost;
use App\Services\TwitterService;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadMediaTwitter extends Component
{
    use WithFileUploads;

    public string $tweetBody = '';
    public $tweetMedia;

    protected $rules = [
        'tweetBody' => 'required|string|min:10',
    ];

    public function render()
    {
        return view('livewire.upload-media-twitter');
    }

    public function postTweet()
    {
        $this->validate();

        if($this->tweetMedia != null) {
          $post =  TwitterPost::Create(
                [
                    'post_body' => $this->tweetBody,
                ]
            )->addMedia($this->tweetMedia->path())->usingFileName(
                $this->tweetMedia->getClientOriginalName()
            )->toMediaCollection();
            TwitterService::createTwitterPostWithMedia($post,$this->tweetBody);
        }else{
            $post = TwitterPost::Create(
                [
                    'post_body' => $this->tweetBody,
                ]
            );
            TwitterService::createTwitterPost($post);
        }
ray($post);


        $this->redirect('/post');
    }

}
