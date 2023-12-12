@extends('layouts.app')

@section('title', 'LogIn')



@section('content')

<div class="flex w-11/12 lg:w-10/12 mx-auto justify-center lg:justify-between">
    
    <div class="hidden lg:flex lg:w-5/12 justify-center ">
        <img src="{{ asset('img/signin.png') }}" alt="" class="w-full">
    </div>
    
    <div class="w-11/12 lg:w-5/12 bg-white p-6 rounded-xl shadow-xl">
        <form action="{{ route('login')}}" method="POST">
            @csrf

            @if ($errors->has('cred'))
            <div class="bg-red-500 text-white p-3 rounded-lg text-center mb-5">
                {{ $errors->first('cred')}}
            </div>
             @endif
        

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

            <input 
                type="submit"
                value="LogIn"
                class="bg-sky-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                
                <div class="my-2">
                <label for="idremember">Keep session open</label>
                <input type="checkbox" name="remember" id="idremember"><label for="idremember" class="my-2">
            </div>

        <p class="mt-3 text-center">Don't you have an account?? <a class="text-blue-700 underline" href="{{ route('register') }}">SignUp!</a></p>

        </form>
    </div>



</div>

@endsection