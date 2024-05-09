@extends('layouts.landing')

@section('title', "Quienes Somos")

@section('style')
    <link rel="stylesheet" href="{{ asset('css/quien.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive-quien.css')}}">

@endsection

@section('content')
        <div class="cont-info" id="continfo1">
            <div class="cont-img"></div>
            <div class="info">
                <div>
                    <h3>Apostol</h3>
                    <h1>Oscar Poveda</h1>
                </div>
                <div id="history">
                    <p>En un pequeño pueblo rodeado de colinas verdes y campos dorados, vivía un pastor llamado Miguel. Desde temprana edad, Miguel había sentido una profunda conexión con la naturaleza y con el rebaño de ovejas que cuidaba con amor y dedicación. Cada día, al salir el sol, lo encontraba recorriendo los prados, con su bastón en mano y una sonrisa serena en el rostro.</p>
                    {{-- <p>Sin embargo, una tragedia sacudió la vida apacible de Miguel. Una feroz tormenta azotó la región, provocando una inundación que arrasó con gran parte de su rebaño y destruyó su modesta cabaña. Desolado y sin nada más que escombros a su alrededor, Miguel enfrentó la adversidad con valentía y determinación. Con la ayuda de vecinos y amigos, reconstruyó su hogar y, con el tiempo, volvió a cuidar de su rebaño con renovado fervor, convirtiéndose en un símbolo de resiliencia y esperanza para su comunidad.</p> --}}
                </div>
            </div>
        </div>

        <div class="cont-info" id="continfo2">
            <img src="{{ asset('img/ap.jpg') }}" alt="">
            <div id="encabezado">
                <h1>Un lugar ideal para ti y tu familia!</h1>
            </div>
        </div>

        <div class="cont-info" id="contvision">
            <div id="titlevision"><h1>VISION</h1></div>
            <div id="presentacion-vision">

                <div class="pvision" id="presentacion-img">
                    <div id="titulo-card"></div>
                    <div class="img-vision" id="img-vision1">
                        <span class="el--fire" id="fuegovision"></span>
                    </div>
                </div>
                <div class="pvision" id="anio">
                    <button class="botonimg" onclick="mostrarImagen('1')">2024</button>
                    <button class="botonimg" onclick="mostrarImagen('2')">2023</button>
                    <button class="botonimg" onclick="mostrarImagen('3')">2022</button>
                    <button class="botonimg" onclick="mostrarImagen('4')">2021</button>
                    <button class="botonimg" onclick="mostrarImagen('5')">2020</button>
                    <button class="botonimg" onclick="mostrarImagen('6')">2019</button>
                </div>
            </div>
        </div>



@endsection

@section('script')
    <script>
        var global = "";

        function mostrarImagen(id) {
                var miElemento = document.getElementById("img-vision1");


                var imagen2024 = "url('img/vision/1.png')";
                var imagen2023 = "url('img/vision/2.png')";
                var imagen2022 = "url('img/vision/3.png')";
                var imagen2021 = "url('img/vision/4.png')";
                var imagen2020 = "url('img/vision/5.png')";
                var imagen2019 = "url('img/vision/6.png')";

                document.getElementById('fuegovision').style.display = 'none';

                switch (id) {
                    case "1":
                    miElemento.style.background = imagen2024;
                    break;
                    case "2":
                    miElemento.style.background = imagen2023;
                    break;
                    case "3":
                    miElemento.style.background = imagen2022;
                    break;
                    case "4":
                    miElemento.style.background = imagen2021;
                    break;
                    case "5":
                    miElemento.style.background = imagen2020;
                    break;
                    case "6":
                    miElemento.style.background = imagen2019;
                    break;
                }


        }


    </script>
@endsection