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
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
                <input 
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Your name..."
                    class="border p-3 w-full rounded-lg @error('name')  border-red-500 @enderror"
                    value="{{ old('name')}}"
                    >
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        
                    @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input 
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Your username..."
                    class="border p-3 w-full rounded-lg @error('username')  border-red-500 @enderror"
                    value="{{ old('username')}}"
                    >
                    @error('username')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                <input 
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Your email..."
                    class="border p-3 w-full rounded-lg @error('email')  border-red-500 @enderror"
                    value="{{ old('email')}}"
                    >
                    @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                <input 
                    type="password"
                    id="password"
                    name="password"
                    placeholder="password"
                    class="border p-3 w-full rounded-lg @error('name')  border-red-500 @enderror"
                    >
                    @error('password')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Password again...</label>
                <input 
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Your password again..."
                    class="border p-3 w-full rounded-lg @error('name')  border-red-500 @enderror"
                    >
                    @error('password_confirmation')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
            </div>
            <input 
                type="submit"
                value="New account"
                class="bg-sky-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </form>
    </div>



</div>

@endsection