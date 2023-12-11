<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request);
        //dd($request->all());
        //dd($request->get('email'));
        //dd($request->email);
        //Validació
        $request->validate([
            'name' => 'required | min:3 | max:255',
            'username' => 'required | min:3 | max:255 | unique:users,username',
            'email' => 'required|email|unique:users',
            'password' => 'required'
            ]);

        
    }
}
