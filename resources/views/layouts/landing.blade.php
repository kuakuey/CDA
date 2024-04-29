{{-- Creacion de plantillas --}}
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="">
    <title>@yield('title')</title>
    <link rel="icon" href="img/icomoon-free--fire.png" type="image/png">

    {{-- favicon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icono.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home-nav.css')}}">


    @yield('style')
</head>

<body id="body">
    <x-navegadorhome></x-navegadorhome>
    {{-- nav --}}
    <div class="body1">
        @yield('content')
    </div>
    {{-- footer --}}
    @yield('script')     
</body>
    
</html>