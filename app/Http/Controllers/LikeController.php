<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function switchLike(Request $req, Post $post)
    {

        if ($post->checkLike(Auth::user())) {
            //return redirect()->route('posts.likes.destroy', ["post" => $post])->setRequest('delete');
            $post->likes()->where('post_id',$post->id)->delete();

        } else {
            //return redirect()->action('post')->route('posts.likes.store', ["post" => $post]);
            $post->likes()->create([
                'user_id' => Auth::user()->id
            ]);
        }

        return back();
    }

    public function store(Post $post)
    {
        $post->likes()->create([
            'user_id' => Auth::user()->id
        ]);
    }

    public function destroy(Post $post)
    {
        $post->likes()->where('post_id',$post->id)->delete();
    }


    /*            $post->likes()->create([
            'user_id' => Auth::user()->id
        ]);*/

}
