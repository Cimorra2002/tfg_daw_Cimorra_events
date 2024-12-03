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

        <!-- Nuevo div centrado con imagen -->
        <div class="d-flex justify-content-center align-items-center py-5">
            <div class="text-center">
                <img src="{{ asset('images/fiesta2/IMG_22.jpg') }}" alt="Descripción de la imagen" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@endsection