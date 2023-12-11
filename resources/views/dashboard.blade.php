@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')


    <div class="flex justify-center">

    <div class="flex w-11/12 sm:w-9/12 md:w-8/12 lg:w-7/12 xl:w-6/12 justify-between bg-purple-500">
        
        <div class="w-5/12 px-5 h-36 bg-red-800">
            Hello
            {{-- <img class="w-5/12" src="{{ asset('img/profile.png') }}" alt=""> --}}
        </div>
        
        <div class="w-5/12 px-5 h-36 bg-green-700">
            <p class="text-3xl">{{ Auth::user()->name }}</p>
        </div>

    </div>


    </div>









@endsection