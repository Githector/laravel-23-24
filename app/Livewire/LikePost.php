<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LikePost extends Component
{

    public $post;
    public $isLiked;
    public $numLikes;

    public function mount(){
        $this->isLiked = $this->post->checkLike(Auth::user());
        $this->numLikes = $this->post->numLikes();
    }

    public function like(){

        if ($this->post->checkLike(Auth::user())) {
            $this->post->likes()->where('post_id',$this->post->id)->delete();
            $this->isLiked=false;
            $this->numLikes--;

        } else {
            
            //return redirect()->action('post')->route('posts.likes.store', ["post" => $post]);
            $this->post->likes()->create([
                'user_id' => Auth::user()->id

            ]);
            $this->isLiked=true;
            $this->numLikes++;
           

        }
        
    }

    public function render()
    {
     
        return view('livewire.like-post');
    }
}
