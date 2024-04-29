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


                var imagen2024 = "url('https://z-p3-scontent.fgye10-1.fna.fbcdn.net/v/t39.30808-6/418446866_18415795609026810_8092801617556738655_n.jpg?stp=dst-jpg_s640x640&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFo-myfoqMOuNWWgqlWJGEZLsI9KMHC2B4uwj0owcLYHspJRCwscFQ8hB--8CTW0LWdiY5iV0aOZm8ibDV0SoBm&_nc_ohc=SMn1rnAdVj8Ab5xEPg6&_nc_zt=23&_nc_ht=z-p3-scontent.fgye10-1.fna&oh=00_AfC73WqiVy6XR8SnyItbBW5bzcDeQj9mIlPgvAEtr9tGnQ&oe=6630D3D3')";
                var imagen2023 = "url('https://z-p3-scontent.fgye10-2.fna.fbcdn.net/v/t39.30808-6/324241952_719686173010606_6631713776955464919_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFLo_SBMlKoNvxXHZ2vIkgcUdFKm3LYNOZR0Uqbctg05lrP1SxGOk3JgobXfZQm65rBeaLLdutoy368XZl6lIs1&_nc_ohc=7PM7KmjHAswAb42GOPn&_nc_zt=23&_nc_ht=z-p3-scontent.fgye10-2.fna&oh=00_AfDCq9CUMIvAq_FVbgC6ARiT-wI10hn7wSVnqSzVHIMjqw&oe=6630B173')";
                var imagen2022 = "url('https://z-p3-scontent.fgye10-2.fna.fbcdn.net/v/t39.30808-6/269745697_458791255813447_8703155979249959968_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHGRy9XCVJyoMJY_qG73ilUzaMfYpAtL8PNox9ikC0vw33GPGwr8RIiE1Msnf1zaSzeNYaeEpidXjwL7UHOYoPB&_nc_ohc=3NXFsXkYzfwQ7kNvgG7UJLH&_nc_zt=23&_nc_ht=z-p3-scontent.fgye10-2.fna&oh=00_AfBtm6ZxN1RwSj_k7hfjQXwrLU4ZGkBhtkE1AiUR1rBj5Q&oe=6630CBD1')";
                var imagen2021 = "url('https://z-p3-scontent.fgye10-2.fna.fbcdn.net/v/t1.6435-9/136321088_227104325648809_6048337222927771702_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE3qQkoCggtj6SphDpGTQJkqP_zWehiVeWo__NZ6GJV5e9UIpvJG8W3yVxB-dM73AGYVc9YBdMks851TMrSLWvK&_nc_ohc=zWze2LKOMucQ7kNvgHomO4O&_nc_ht=z-p3-scontent.fgye10-2.fna&oh=00_AfDXl8AIyjJdkcdvbHrQOZooRSa_G8fpwSsnvExcWn5TJQ&oe=66525AC4')";
                var imagen2020 = "url('')";
                var imagen2019 = "url('https://z-p3-scontent.fgye10-2.fna.fbcdn.net/v/t1.6435-9/49388124_1067125133449227_2378763741354262528_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGxgAtNEmKj-b_QQ-1XgsSkihEvKgyDpQqKES8qDIOlCoMswmrNs0Bm752u2UHaKRnI1a82tQmIhkPOzkVTFu3k&_nc_ohc=4wuv9sNFHzAAb6hd7pH&_nc_ht=z-p3-scontent.fgye10-2.fna&oh=00_AfAogN6ZGwgkC4gmqHqXTU5O8LwpLDpnzl7rDg0IIOI-6Q&oe=665276DA')";
                var imagen2018 = "url('')";

                document.getElementById('fuegovision').style.display = 'none';

                switch (id) {
                    case "1":
                    miElemento.style.background = imagen2024;
                    global = "Celestial";
                    break;
                    case "2":
                    miElemento.style.background = imagen2023;
                    global = "VEN";
                    break;
                    case "3":
                    miElemento.style.background = imagen2022;
                    global = "Despierta y Expande";
                    break;
                    case "4":
                    miElemento.style.background = imagen2021;
                    global = "Creatividad y Destino";
                    break;
                    case "5":
                    miElemento.style.background = imagen2020;
                    global = "";
                    break;
                    case "6":
                    miElemento.style.background = imagen2019;
                    global = "Fructiferos e Influyentes";
                    break;
                }


        }

        document.getElementById("titulo-card").addEventListener("mouseover", function() {
            // Obtener el div hijo
            var hijo = document.getElementById("img-vision1");
            hijo.style.filter = "blur(10px)"; // Puedes ajustar el valor de blur según lo que desees

            var tituloElemento = document.getElementById("titulo-card");
            tituloElemento.textContent = global;
        });
        document.getElementById("titulo-card").addEventListener("mouseout", function() {
            // Obtener el div hijo
            var hijo = document.getElementById("img-vision1");
            hijo.style.filter = "blur(0px)"; // Puedes ajustar el valor de blur según lo que desees
            var tituloElemento = document.getElementById("titulo-card");
            tituloElemento.textContent = "";
        });

    </script>
@endsection