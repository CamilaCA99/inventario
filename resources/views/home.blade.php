@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
<nav class="bg-orange-500 md:flex md:items-center md:flex-row md:justify-between lg:flex lg:items-center lg:flex-row lg:justify-between xl:flex xl:items-center xl:flex-row xl:justify-between p-2">
    <div class="flex justify-between p-5">
        <div>
            <strong>Logo</strong>
        </div>
        <div onclick="openMenu()" class="xl:hidden lg:hidden md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
            </svg>  
        </div>
    </div>
    <div class="flex flex-col xl:flex-row lg:flex-row md:flex-row gap-3 hidden lg:inline-flex xl:inline-flex md:inline-flex" id="menu">
        <a class="flex justify-end p-2 hover:bg-orange-600" href="#">Inicio</a>
        <a class="flex justify-end p-2 hover:bg-orange-600"" href="#">Texto</a>
        <a class="flex justify-end p-2 hover:bg-orange-600"" href="#">Texto</a>
        <a class="flex justify-end p-2 hover:bg-orange-600"" href="#">Texto</a>
        <a class="flex justify-end p-2 hover:bg-orange-600"" href="#">Texto</a>
    </div>

</nav>

<script>
    const openMenu = () => {
            const menu = document.getElementById('menu');
            if(menu.classList.contains('hidden')){
                menu.classList.remove('hidden');
            }else{
                menu.classList.add('hidden');
            }
        }
</script>
    
@endsection