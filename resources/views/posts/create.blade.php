@extends('layouts.app')

@section('title', 'New User')



@section('content')

<div class="flex w-11/12 lg:w-10/12 mx-auto justify-center lg:justify-between">
    
    <div class="hidden lg:flex lg:w-5/12 justify-center ">
        <img src="{{ asset('img/signup.png') }}" alt="" class="w-full">
    </div>
    
    <div class="w-11/12 lg:w-5/12 bg-white p-6 rounded-xl shadow-xl">
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="post_title" class="mb-2 block uppercase text-gray-500 font-bold">Post Title</label>
                <input 
                    type="text"
                    id="post_title"
                    name="post_title"
                    placeholder="Your post title"
                    class="border p-3 w-full rounded-lg @error('name')  border-red-500 @enderror"
                    value="{{ old('name')}}"
                    >
                    @error('post_title')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        
                    @enderror
            </div>
            <div class="mb-5">
                <label for="post" class="mb-2 block uppercase text-gray-500 font-bold">Post</label>
                <textarea 
                    type="text"
                    id="post"
                    name="post"
                    placeholder="Your content post..."
                    class="border p-3 w-full rounded-lg @error('username')  border-red-500 @enderror"
                    >
                    {{ old('post')}}
                </textarea>    
                    @error('post')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="post_img" class="mb-2 block uppercase text-gray-500 font-bold">Post Image</label>
                
                <input class="block w-full mb-5 text-sm text-white-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-white-400 focus:outline-none dark:bg-gray-500 dark:border-gray-600 dark:placeholder-gray-400 py-1 @error('email')  border-red-500 @enderror" 
                id="post_img" 
                type="file"
                name="post_img">

                    @error('post_img')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>


            <input 
                type="submit"
                value="Add Post"
                class="bg-sky-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </form>
    </div>



</div>

@endsection