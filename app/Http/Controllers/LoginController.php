<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(){
        $credentials = request()->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
            return 'No te has logeado';
    }
}
