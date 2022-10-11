<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function create(Request $request){
        $user = new User();

        $user->id =$request->rut;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return redirect()->route('login');
    }
}
