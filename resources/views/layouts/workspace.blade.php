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
    <x-navegador></x-navegador>
    <div id="cont-principal">
        <div class="cabecera">
            <h1>@yield('title-page')</h1>
        </div>

        @yield('content')
    </div>

    <script>
        document.getElementById("cerrar").addEventListener("click",
            function() {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Cerrar Sesion"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.cookie = "sesion=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        // Redireccionar a la página de inicio de sesión u otra página
                        window.location.href = "{{ route('login') }}";
                    }
                });
        })
    </script>
    @yield('script')
         
    
</body>
</html>