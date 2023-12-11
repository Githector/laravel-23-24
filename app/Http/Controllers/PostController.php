<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        //dd(Auth::user()); //verifica si està autentificat.
        
        return view('dashboard');
    }
}
