@extends('layouts/workspace')

@section('title','Casa de Avivamiento - Eventos')

@section('title-page', 'Eventos')

@section('style')
<link rel="stylesheet" href="{{ asset('css/eventos.css')}}">
    
@endsection

@section('content')
    <div id="contenido">
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
        <div>d</div>
    </div>
@endsection