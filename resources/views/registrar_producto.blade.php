@extends('layouts.app')
@section('title')
    Producto
@endsection
@section('content')
<header class=" p-5 flex justify-center">
    <h1 class="text-2xl">Producto</h1>
</header>
<main class="grid justify-center grid-cols-2 p-5">
    <div class="p-5 flex items-center">
        <form action="/imagen" method="POSt" enctype="multipart/form-data" id="dropzone" class="bg-white drop-shadow-lg dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">

        </form>
    </div>
    <div class="bg-white rounded-lg p-5 drop-shadow-lg">
        <form action="#">
            <div class="flex flex-col">
                <div>
                    <label for="name">Nombre</label>
                    @error('name')
                    <span class="text-red-600"><small>*{{$message}}</small></span>
                    @enderror
                </div>
                <input class="p-2 border-4 border-l-orange-500 @error('name') border-l-red-700 @enderror" type="text" name="name" id="name" placeholder="Ingresa el nombre del producto" value="{{old('name')}}">
            </div>
            <div class="flex flex-col">
                <div>
                    <label for="price">Precio</label>
                    @error('price')
                    <span class="text-red-600"><small>*{{$message}}</small></span>
                    @enderror
                </div>
                <input class="p-2 border-4 border-l-orange-500 @error('price') border-l-red-700 @enderror" type="number" name="price" id="price" placeholder="$1000" value="{{old('price')}}">
            </div>
            <div class="flex flex-col">
                <div>
                    <label for="brand">Marca</label>
                    @error('brand')
                    <span class="text-red-600"><small>*{{$message}}</small></span>
                    @enderror
                </div>
                <input class="p-2 border-4 border-l-orange-500 @error('brand') border-l-red-700 @enderror" type="text" name="brand" id="brand" placeholder="Marca del producto" value="{{old('brand')}}">
            </div>
            <div class="flex flex-col">
                <div>
                    <label for="stock">stock</label>
                    @error('stock')
                    <span class="text-red-600"><small>*{{$message}}</small></span>
                    @enderror
                </div>
                <input class="p-2 border-4 border-l-orange-500 @error('stock') border-l-red-700 @enderror" type="number" name="stock" id="stock" placeholder="999" value="{{old('stock')}}">
            </div>
            <div class="flex flex-col">
                <div>
                    <label for="code">Codigo</label>
                    @error('code')
                    <span class="text-red-600"><small>*{{$message}}</small></span>
                    @enderror
                </div>
                <input class="p-2 border-4 border-l-orange-500 @error('code') border-l-red-700 @enderror" type="number" name="code" id="code" placeholder="4589612354" value="{{old('code')}}">
            </div>
            <div class="pt-5 flex gap-3">
                <button class="bg-orange-500 w-full rounded-xl hover:bg-orange-600 p-2 text-white">Registrar</button>
                <button class="bg-red-500 w-full rounded-xl hover:bg-red-600 p-2 text-white">cancelar</button>
                <button class="bg-green-500 w-full rounded-xl hover:bg-green-600 p-2 text-white">Registrar y siguiente</button>
            </div>
        </form>
        
    </div>
</main>
    
@endsection