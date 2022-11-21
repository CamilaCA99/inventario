<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $products = Product::where('user_id', auth()->user()->id)->get();
        return view('home', compact('products'));
    }
        
}
