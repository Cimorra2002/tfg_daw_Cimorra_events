@extends('layouts/main')
@section('titulo_pagina', 'Eventos')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section id="contact" class="contact section pt-5 mt-5 d-flex" style="min-height: 80vh;">
        <div class="container text-center">
            <h2 class="text-center mb-5">Eventos</h2>

            <!-- Contenedor de botones centrados -->
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            ZARAGOZA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            TARAZONA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            EJEA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            Huesca
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            Teruel
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            Grañen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!--

<div class="col-lg-6 col-md-6">
                <div class="evento text-start">
                    <h2 class="titulo">Que resacon</h2>
                    <div class="products-content">
                        <h4 class="fecha">14/12/2024</h4>
                        <h4 class="horas">23:00 - 05:30</h4>
                        <h4 class="ubicacion">Tarazona</h4>
                        <h4 class="precio">14 €</h4>
                        <h4 class="descripcion">esta fiesta trata.....</h4>
                    </div>
                </div>
            </div>-->
