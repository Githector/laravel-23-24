@extends('layouts.app')

@section('title', 'New User')



@section('content')

<div class="flex w-11/12 lg:w-10/12 mx-auto justify-center lg:justify-between">
    
    <div class="hidden lg:flex lg:w-5/12 justify-center ">
        <img src="{{ asset('img/signup.png') }}" alt="" class="w-full">
    </div>
    
    <div class="w-11/12 lg:w-5/12 bg-white p-6 rounded-xl shadow-xl">
        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">Post Title</label>
                <input 
                    type="text"
                    id="title"
                    name="title"
                    placeholder="Your post title"
                    class="border p-3 w-full rounded-lg @error('title')  border-red-500 @enderror"
                    value="{{ old('title')}}"
                    >
                    @error('title')

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
                    class="border p-3 w-full rounded-lg @error('post')  border-red-500 @enderror"
                    >{{ old('post')}}</textarea>
                    
                   
                    @error('post')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="img" class="mb-2 block uppercase text-gray-500 font-bold">Post Image</label>

                <input class="block w-full border border-gray-200 p-3 rounded-lg bg-gray-100" 
                id="img" 
                type="file"
                name="img">

                    @error('img')
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