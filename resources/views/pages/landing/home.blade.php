@extends('layouts.landing')

@section('title', "Casa de Avivamiento")
    
@section('style')
    <link rel="stylesheet" href="{{ asset('css/landing.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive-landing.css')}}">

@endsection

@section('content')
    <div class="cont" id="cont1">
        <div id="contint1">
            {{-- <span class="el--fire" id="fuego"></span> --}}
            <div id="contint2">
                <h1>Bienvenido a</h1>
                <h1>Casa de Avivamiento</h1>
                <h3>Un lugar ideal para ti</h3>
                <x-redessociales></x-redessociales>                                    
            </div>
        </div>
    </div>

    <div class="cont" id="cont2">
        <x-cardboton>
            <x-slot name="idbtn">btn1</x-slot>
            <x-slot name="title">Horarios</x-slot>
            <x-slot name="icon">bi--clock-fill</x-slot>
            <x-slot name="mostrarBoton">si</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn2</x-slot>
            <x-slot name="title">Eventos</x-slot>
            <x-slot name="icon">ion--calendar-sharp</x-slot>
            <x-slot name="mostrarBoton">si</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn3</x-slot>
            <x-slot name="title">Title</x-slot>
            <x-slot name="icon">mdi--user</x-slot>
            <x-slot name="mostrarBoton">si</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn4</x-slot>
            <x-slot name="title">Title</x-slot>
            <x-slot name="icon">mdi--user</x-slot>
            <x-slot name="mostrarBoton">si</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn5</x-slot>
            <x-slot name="title">Title</x-slot>
            <x-slot name="icon">mdi--user</x-slot>
            <x-slot name="mostrarBoton">si</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn6</x-slot>
            <x-slot name="title">Nosotros</x-slot>
            <x-slot name="icon">fluent--people-team-28-filled</x-slot>
            <x-slot name="mostrarBoton">si</x-slot>
        </x-cardboton>

    </div>

    <x-pop-up id="1" imagen="fvd_0.png" url=""></x-pop-up>
    <x-pop-up id="2" imagen="eventos/{{$eventocercano->imagen}}" url="eventos"></x-pop-up>

    <x-pop-up id="3" imagen="" url=""></x-pop-up>        

    <x-pop-up id="4" imagen="" url=""></x-pop-up>
    <x-pop-up id="5" imagen="" url=""></x-pop-up>
 
@endsection

@section('script')
<script src="{{ asset('js/landing.js')}}"></script>
@endsection