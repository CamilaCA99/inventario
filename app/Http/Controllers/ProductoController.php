<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('registrar_producto');
    }
    public function store(Request $request){

        $request->validate([
            'id' => 'required|unique:products|min:11|', //code product
            'name' => 'required|min:3',
            'price' => 'required',
            'brand' => 'required|min:3',
            'stock' => 'required',
            'image' => 'nullable',
        ]);

        return redirect()->route('home');
    }
}
