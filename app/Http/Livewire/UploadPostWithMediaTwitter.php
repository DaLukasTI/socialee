<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPostWithMediaTwitter extends Component
{
    use WithFileUploads;
    public string $name ='';
    public string $email='';
    public  $file;



    public function render()
    {
        return view('livewire.upload-post-with-media-twitter');
    }
}
