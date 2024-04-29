<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/icono.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navegador.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="img/icomoon-free--fire.png" type="image/png">



    @yield('style')


</head>
<body>
    @yield('content')
    @yield('script')     
    
</body>
</html>