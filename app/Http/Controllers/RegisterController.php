<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request){

        $request->request->add(['username' => Str::of($request->username)->slug('-')]);

        //dd($request);
        //dd($request->all());
        //dd($request->get('email'));
        //dd($request->email);  
        //Validació
        $credentials = $request->validate([
            'name' => 'required | min:3 | max:255',
            'username' => 'required | min:3 | max:255 | unique:users,username',
            'email' => 'required|email|unique:users',
            'password' => 'required | confirmed'
            ]);

        User::create([
            'name' => $request->name,
            //'username' => Str::lower($request->username),
            //'username' => Str::slug($request->username),
            //'username' => Str::of($request->username)->slug('-'),
            'username' => $request->username,
            'email'=> $request->email,
            //'password' => $request->password
            'password' => Hash::make($request->password)
        ]);


        Auth::attempt($request->only('email', 'password'));



        return redirect()->route('posts.index',
            ['user' => Auth::user()]
    );
    }



}
