<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{


    public function __construct()
    {
        //$this->middleware(['auth']);
    }

    public function index(User $user)
    {
        //dd(Auth::user()); //verifica si està autentificat.
    
        return view('dashboard',[
            'user' => $user
        ]
    );
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'title' => 'required|max:100',
            'post' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);



        Post::create([
            'title' => $request->title,
            'post' => $request->post,
            'user_id' => $request->user()->id
        ])     
            ->addMediaFromRequest('img')
            //->usingName('name_example')
            //->usingFileName('file_name_example')
            // ->withCustomProperties([
            //     'mime-type' => $request->img->getMimeType(),
            //     'location' => 'Barcelona',
            //     'country' => 'Spain'
                
            //     ])
            ->toMediaCollection('images', 'media2');

        return redirect()->route('posts.index',Auth::user());
    }

    public function destroy($id)
    {
        $id=23;
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index',Auth::user());
    }

    // public function getMedia()
    // {   
    //     dd("media");
    //     $id = 26;
    //     $post = Post::find($id);
    //     dd($post);
    //     $media = $post->getMedia('images');
    //     return $media;
    // }
}
