@extends('layouts.app')
@section('title')
    Crea tu cuenta!
@endsection
@section('content')
<div class="w-screen h-screen flex items-center justify-center p-2" style='background-color: #eee;'>
    <div class="bg-white p-10 rounded-3xl shadow-xl lg:grid lg:grid-cols-2 lg:gap-5">
        <header class="mb-5">
            <h4 class="text-xl font-bold">Bienvenido rellena este formulario para crear una cuenta!</h4>
        </header>
        <form action="{{route('register.create')}}" method="POST">

            @csrf

            <main class="grid gap-3" >
                <div class="flex flex-col">
                    <label class="font-bold" for="rut">Rut</label>
                    <input class="p-2 border-4 border-l-orange-500" type="text" name="rut" id="rut" placeholder="Ingresa el rut">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold" for="rut">Nombre</label>
                    <input class="p-2 border-4 border-l-orange-500" type="text" name="name" id="name" placeholder="De la empresa si!">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold" for="email">Correo electronico</label>
                    <input class="p-2 border-4 border-l-orange-500" type="email" name="email" id="email" placeholder="ejemplo@empresa.com">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold" for="password">Password</label>
                    <input class="p-2 border-4 border-l-orange-500" type="password" name="password" id="password">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold" for="password">Re-password</label>
                    <input class="p-2 border-4 border-l-orange-500" type="password" name="password_confirmation" id="password_confirmation">
                </div>
                <div class="flex item-center justify-center">
                    <button class="bg-orange-500 w-full rounded-xl hover:bg-orange-600 p-2 text-white" type='submit'>Registrar</button>
                </div>
            
            </main>
        </form>
        <footer class="flex flex-col justify-center items-center mt-5">
            <p>si ya estas registrado</p>
            <p><a href="{{ route('login') }}" class="hover:pointer hover:text-blue-600 hover:underline">pincha aqui para iniciar sesion!</a></p>
        </footer>
    </div>
</div>
@endsection