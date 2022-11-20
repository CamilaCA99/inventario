<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductoController extends Controller
{
    public function index(){
        $categories = Category::where('user_id', auth()->user()->id)->get();
        return view('registrar_producto', compact('categories'));
    }
    public function store(Request $request){

        $request->validate([
            'id' => 'required|unique:products|min:11|', //code product
            'name' => 'required|min:3',
            'price' => 'required',
            'brand' => 'required|min:3',
            'stock' => 'required',
            'image' => 'nullable',
            'category' => 'required'
        ]);
        //create instance
        $product = new Product();
        //asigned data
        $product->id = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->stock = $request->stock;
        // $product->image = $request->image;
        $product->user_id = auth()->user()->id;
        $product->category_id = $request->category;
        $product->save();

        return redirect()->route('home');
    }
}
