<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriaController extends Controller
{
    public function index(){
        return view('categorias');
    }

    public function store(Request $request){
        $request->validate([
            
        ]);
    }
}
