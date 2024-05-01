@extends('layouts.landing')

@section('title', "Eventos")

@section('style')

@endsection

@section('content')
<h1>Hola</h1>
    @foreach ($eventos as $item)
    <h1>{{$item->nombreevento}}</h1>
    <img src="img/eventos/{{$item->imagen}}" alt="">
    <h2>{{$item->horaevento}}</h2>
    @endforeach
    
@endsection

@section('script')
    
@endsection