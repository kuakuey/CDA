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
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn2</x-slot>
            <x-slot name="title">Eventos</x-slot>
            <x-slot name="icon">ion--calendar-sharp</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn3</x-slot>
            <x-slot name="title">Title</x-slot>
            <x-slot name="icon">mdi--user</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn4</x-slot>
            <x-slot name="title">Title</x-slot>
            <x-slot name="icon">mdi--user</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn5</x-slot>
            <x-slot name="title">Title</x-slot>
            <x-slot name="icon">mdi--user</x-slot>
        </x-cardboton>
        <x-cardboton>
            <x-slot name="idbtn">btn6</x-slot>
            <x-slot name="title">Nosotros</x-slot>
            <x-slot name="icon">fluent--people-team-28-filled</x-slot>
        </x-cardboton>

    </div>

    <div class="clickcard" id="card1">
        <div class="cardinterna" id="cardint1">
            <x-cerrarbtn><x-slot name="id">b1</x-slot></x-cerrarbtn>
        </div>
    </div>
    <div class="clickcard" id="card2">
        <div class="cardinterna" id="cardint2">
            <x-cerrarbtn><x-slot name="id">b2</x-slot></x-cerrarbtn>
        </div>
    </div>
    <div class="clickcard" id="card3">
        <div class="cardinterna" id="cardint3">
            <x-cerrarbtn><x-slot name="id">b3</x-slot></x-cerrarbtn>
        </div>
    </div>
    <div class="clickcard" id="card4">
        <div class="cardinterna" id="cardint4">
            <x-cerrarbtn><x-slot name="id">b4</x-slot></x-cerrarbtn>
        </div>
    </div>
    <div class="clickcard" id="card5">
        <div class="cardinterna" id="cardint5">
            <x-cerrarbtn><x-slot name="id">b5</x-slot></x-cerrarbtn>
        </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('js/landing.js')}}"></script>
@endsection