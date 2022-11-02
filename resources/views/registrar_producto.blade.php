@extends('layouts.app')
@section('title')
    Producto
@endsection
@section('content')
<header class=" p-5 flex justify-center bg-sky-500">
    <h1>Producto</h1>
</header>
<main class="bg-red-500 grid justify-center grid-cols-2">
    <h1>Imagen</h1>
    <div class="bg-white rounded-lg p-2">
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
            <div>
                <div>
                    <label for="brand">Marca</label>
                    @error('brand')
                    <span class="text-red-600"><small>*{{$message}}</small></span>
                    @enderror
                </div>
                <input class="p-2 border-4 border-l-orange-500 @error('brand') border-l-red-700 @enderror" type="text" name="brand" id="brand" placeholder="Marca del producto" value="{{old('brand')}}">
            </div>
            <div>
                <label for="stock">stock</label>
            </div>
            <div>
                <label for="code">Codigo</label>
            </div>
        </form>
        
    </div>
</main>
    
@endsection