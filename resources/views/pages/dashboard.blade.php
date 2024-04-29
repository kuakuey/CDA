@extends('layouts/workspace')

@section('title','Casa de Avivamiento')

@section('style')
    
@endsection

@section('content')
    <x-navegador></x-navegador>
    <div id="cont-principal">
        <div class="cabecera">
            <h1>Bienvenido</h1>
        </div>

        <div class="contenido">
            <x-cardref>
                <x-slot name="url">eventos</x-slot>
                <x-slot name="title">Eventos</x-slot>
                <x-slot name="icono">material-symbols--home-outline</x-slot>
            </x-cardref>

            <x-cardref>
                <x-slot name="url">escuelas</x-slot>
                <x-slot name="title">Academia Ministerial</x-slot>
                <x-slot name="icono">ic--outline-school</x-slot>
            </x-cardref>

            <x-cardref>
                <x-slot name="url">ministerios</x-slot>
                <x-slot name="title">Servicios en Ministerios</x-slot>
                <x-slot name="icono">file-icons--service-fabric</x-slot>
            </x-cardref>

            <x-cardref>
                <x-slot name="url">bautizos</x-slot>
                <x-slot name="title">Bautizos</x-slot>
                <x-slot name="icono">ion--water-sharp</x-slot>
            </x-cardref>

            <x-cardref>
                <x-slot name="url">discipulado</x-slot>
                <x-slot name="title">Discipulados</x-slot>
                <x-slot name="icono">fa-solid--user-friends</x-slot>
            </x-cardref>



            <x-cardref>
                <x-slot name="url">admin</x-slot>
                <x-slot name="title">Administacion</x-slot>
                <x-slot name="icono">eos-icons--admin-outlined</x-slot>
            </x-cardref>
        </div>
    </div>

    @if (session('success'))
                <script>
                    Swal.fire({
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                    });
                </script>
    @endif  
@endsection

@section('script')
    <script src="{{asset('js/dashboard.js')}}"></script>
@endsection