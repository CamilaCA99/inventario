@extends('layouts.app')
@section('title')
    Categorias
@endsection
@section('content')
<header class="p-5 flex gap-2 justify-between">
    <h1 class="text-2xl w-full">Categorias</h1>
    <div class="bg-white rounded-xl p-2 drop-shadow-lg flex flex-col">
        <div class="border-b-2 flex justify-center"><h1 class="text-base">Crea una nueva categoria.</h1></div>
        <form action="">
            <div class="mt-1 flex flex-col">
                <label class="text-sm" for="name">Nombre</label>
                <input class="rounded-lg h-6" placeholder="Ej: Limpieza" type="text" name="name" id="name">
            </div>
            <button class="bg-orange-500 rounded-xl text-white mt-2 p-1 w-full">Crear</button>
        </form>

    
</header>
<main class="p-5">
    <div class="bg-white drop-shadow-lg rounded-lg p-2 w-[15%] flex flex-col items-center">
        <div class="rounded-full border-solid border-2 border-gray-500 p-2">
            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
            </svg>
        </div>
        <h1 class="text-base">Nombre Apellido</h1>
        <strong class="text-sm">correodetrabajador@gmail.com</strong>
        <button class="bg-orange-500 rounded-xl text-white hover:bg-orange-600 w-full">Ver</button>
    </div>
</main>
@endsection