<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TrabajadorController extends Controller
{
    public function index(){
        return view('trabajadores');
    }
    public function show(){
        return view('registrar_trabajador');
    }
    public function create(Request $request){
        //get user id
        $company_id = auth()->user()->id;
        //validate data
        $request->validate([
            'id' => 'required|min:8|max:9|unique:users',
            'name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|unique:users|min:6',
            'password_confirmation' => 'required',
        ]);
        //create instance
        $user = new User();
        $worker = new Worker();
        //asigned data
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $worker->id = $request->id;
        $worker->last_name = $request->last_name;
        $worker->company_id = $company_id;
        $worker->save();
        dd('registrado');
    }
}
