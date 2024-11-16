@extends('layouts/main')
@section('titulo_pagina', 'Home')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
<section class="pt-5 mt-5">
    <div class="container section-title">
        <h1 class="text-center mb-5">CIMORRA EVENTS</h1>
        <div class="search-bar w-100 mt-5 mb-5 mb-md-0">
            <form action="">
                <input class="py-2 ps-5" type="text" placeholder="Busqueda...">
                <a class="search-icon" href=""><i class="bi bi-search"></i></a>
            </form>
        </div>
        <div class="event-card " style="margin-top: 15%">
            <h4 class="text-center mb-2 mt-2">Nuestro próximo evento</h4>
            <a href="{{ url('/events/2/1') }}">
                <div class="w-100 event-image"
                    style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                <div class="event-info p-3">
                    <h4 class="mb-1">evento_nombre</h4>
                    <span class="text-decoration-none"> Hola</span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
