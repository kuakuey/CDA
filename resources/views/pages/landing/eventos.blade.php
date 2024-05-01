@extends('layouts.landing')

@section('title', "Eventos")

@section('style')
    <link rel="stylesheet" href="{{ asset('css/cartaeventos.css')}}">
@endsection

@section('content')
    @foreach ($eventos as $item)
    {{-- <h1>{{$item->nombreevento}}</h1>
    <img src="img/eventos/{{$item->imagen}}" alt="">
    <h2>{{$item->horaevento}}</h2>
     --}}

    <x-cartaeventos titulo="{{$item->nombreevento}}" fecha="{{$item->dateevento}}" imagen="eventos/{{$item->imagen}}"></x-cartaeventos>
    @endforeach

    
@endsection

@section('script')
    
@endsection