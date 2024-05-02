@extends('layouts.landing')

@section('title', "Eventos")

@section('style')
    <link rel="stylesheet" href="{{ asset('css/cartaeventos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive-eventos.css')}}">
@endsection

@section('content')
    @foreach ($eventos as $item)
    <x-cartaeventos titulo="{{$item->nombreevento}}" fecha="{{$item->dateevento}}" imagen="eventos/{{$item->imagen}}"></x-cartaeventos>
    @endforeach

    
@endsection

@section('script')
    
@endsection