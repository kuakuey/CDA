@extends('layouts/workspace')

@section('title','Casa de Avivamiento - Eventos')

@section('title-page', 'Eventos')

@section('style')
<link rel="stylesheet" href="{{ asset('css/eventos.css')}}">
    
@endsection

@section('content')
    <div id="contenido">
        <div id="cont-table">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Ingresado</th>
                        <th>Editado</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre1</td>
                        <td>Fecha1</td>
                        <td>Hora1</td>
                        <td>Ingresado1</td>
                        <td>Editado1</td>
                        <td>Estado1</td>
                    </tr>
                    <!-- Puedes agregar más filas según sea necesario -->
                </tbody>
            </table>
        </div>
        <div>
            <form class="form" action="" method="post">
                <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" viewBox="0 0 24 24"><path fill="white" d="M21 17V8H7v9zm0-14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1V1h2v2h8V1h2v2zm-3.47 8.06l-4.44 4.44l-2.68-2.68l1.06-1.06l1.62 1.62L16.47 10zM3 21h14v2H3a2 2 0 0 1-2-2V9h2z"/></svg>
                <input type="text" class="input" placeholder="Nombre de Evento">
                <input type="date" class="input">
                <input type="text" class="input" placeholder="Hora">
                <button class="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection