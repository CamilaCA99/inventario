<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title')</title>
</head>
<body style='background-color: #eee;'>

    @auth
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
            <a class="flex justify-end p-2 rounded-xl hover:bg-orange-600" href="#">Inicio</a>
            <a class="flex justify-end p-2 rounded-xl hover:bg-orange-600" href="{{ route('trabajadores') }}">Trabajadores</a>
            <a class="flex justify-end p-2 rounded-xl hover:bg-orange-600" href="#">Proveedores</a>

            <form action="{{route('logout')}}" method="POST">
                @csrf
                <a class="flex justify-end p-2 rounded-xl hover:bg-orange-600" href="#" onclick="this.closest('form').submit()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                    Salir
                </a>
            </form>
            
        </div>
    </nav>
    @endauth

    @yield('content')
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>