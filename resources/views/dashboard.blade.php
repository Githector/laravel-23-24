@extends('layouts.app')

@section('title')

Dashboard - {{ $user->name }}

@endsection


@section('content')


<div class="py-12 mx-auto sm:w-11/12 md:w-10/12 lg:9/12 xl:w-8/12 2xl:w-7/12 shadow-2xl">
    <div class="row w-full flex flex-col  md:flex-row md:justify-between align-middle  p-7">
        <div class="leftProfile sm:w-3/5 md:w-2/5 flex-column justify-center mx-auto">
            <img src="{{ asset('img/profile.jpg') }}" class="rounded-full" alt="">
        </div>

        <div class="rightProfile sm:w-4/5 md:w-3/5 px-5 mt-5 sm:text-lg md:text:xl lg:text-2xl">
            <div class="user mb-9">
            <span class="fullname text-3xl </span>">{{ $user->name }}
                </span>
            </div>
            <div class="status flex flex-wrap mt-4 w-full rounded-2xl justify-between mb-6">
                <div class="publish w-1/4 min-w-fit bg-amber-100 rounded-xl p-1 m-1 text-center">
                    Posts: {{ 212 }}
                </div>
                <div class="followers w-1/4 min-w-fit bg-amber-100 rounded-xl p-1 m-1 text-center">
                    Followers: {{ 123 }}
                </div>
                <div class="following w-1/4 min-w-fit bg-amber-100 rounded-xl p-1 m-1 text-center">
                    Following: {{ 222 }}
                </div>
            </div>
            <div class="bio mb-6">
                    Bio not specified
            </div>
            <div class="fidelity">
                Fidelity: {{ $user->created_at->format('F-Y') }}
            </div>
            <a href=""
               class="block w-full createPost mt-8 bg-blue-600 rounded-xl text-white text-center">Add Post</a>
        </div>

    </div>
</div>


<div class="flex justify-center lg:justify-between flex-wrap mt-5">
    @foreach ($posts as $post)
        <div class="w-10/12 md:w-8/12 lg:w-5/12 p-3 mb-3 shadow-xl">
            <img class="w-full" src="{{ asset($post->getFirstMedia('images')->getUrl('three')) }}" alt="">
            <h1>ssss</h1>
        </div>
    @endforeach
</div>

@endsection