@extends('layouts/workspace')

@section('title','Casa de Avivamiento - Eventos')

@section('title-page', 'Eventos')

@section('style')
<link rel="stylesheet" href="{{ asset('css/eventos.css')}}">
    
@endsection

@section('content')
    <div id="contenido">
        <div id="cont-table">
            <table id="tablaevento">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Imagen</th>
                        <th>Editado</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $evento)
                    <tr class="tbRow">
                        <td class="">{{$evento->nombreevento}}</td>
                        <td class="">{{$evento->dateevento}}</td>
                        <td class="">{{$evento->horaevento}}</td>
                        <td class="rowimg"><img src="img/eventos/{{$evento->imagen}}" alt="" class="imagen-evento"></td>
                        <td class="">{{$evento->updated_at}}</td>

                        @if ($evento->estado == 0)
                        <td class="action"><a href="{{route('activeevent',$evento->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 32 32"><path fill="black" d="M16 2C8.268 2 2 8.268 2 16s6.268 14 14 14s14-6.268 14-14S23.732 2 16 2m0 26C9.373 28 4 22.627 4 16S9.373 4 16 4s12 5.373 12 12s-5.373 12-12 12"/></svg>                        </a>
                        <a href="{{route('eliminarev',$evento->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 32 32"><path fill="#ff0000" d="M12 12h2v12h-2zm6 0h2v12h-2z"/><path fill="#ff0000" d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20zm4-26h8v2h-8z"/></svg>
                        </a>
                        </td>
                        @else
                        <td class="action"><a href="{{route('desevent',$evento->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 32 32"><path fill="#31E963" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-2 19.59l-5-5L10.59 15L14 18.41L21.41 11l1.596 1.586Z"/><path fill="none" d="m14 21.591l-5-5L10.591 15L14 18.409L21.41 11l1.595 1.585z"/></svg>                        
                        </a></td>
                        @endif
                    </tr>
                    @endforeach


                    <!-- Puedes agregar más filas según sea necesario -->
                </tbody>
            </table>
        </div>
        <div>
            <form class="form" action="{{route("storeevento")}}" method="post" enctype="multipart/form-data">
                @csrf 
                <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" viewBox="0 0 24 24"><path fill="white" d="M21 17V8H7v9zm0-14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1V1h2v2h8V1h2v2zm-3.47 8.06l-4.44 4.44l-2.68-2.68l1.06-1.06l1.62 1.62L16.47 10zM3 21h14v2H3a2 2 0 0 1-2-2V9h2z"/></svg>
                <input type="text" class="input" name="nombre" placeholder="Nombre de Evento" required>
                <input type="date" class="input" name="date" required>
                <input type="text" class="input" name="hora" placeholder="Hora" required>
                <input type="file" class="input" name="imagen" accept="image/*" required>
                <p>Iamgen debe de ser Cuadrada</p>
                <button class="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection