<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductoController extends Controller
{
    public function index(){
        return view('registrar_producto');
    }
    public function store(Request $request){

        // dd($request);
        $request->validate([
            'id' => 'required|unique:products|min:11|', //code product
            'name' => 'required|min:3',
            'price' => 'required',
            'brand' => 'required|min:3',
            'stock' => 'required',
            'image' => 'nullable',
        ]);
        dd($request);
        
        // //create instance
        // $product = new Product();
        // //asigned data
        // $product->id = $request->id;
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->brand = $request->brand;
        // $product->stock = $request->stock;
        // $product->image = $request->image;

        // //deberia pedir aqui el id de categoria, trabajador y usuario(?
        // $product->user_id = auth()->user()->id;
        // $product->category_id = 1;

        // //create user
        // $product->save();

        return redirect()->route('home');
    }
}
