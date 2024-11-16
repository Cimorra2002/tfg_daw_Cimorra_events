@extends('layouts/main')
@section('titulo_pagina', 'Eventos')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section class="pt-5 mt-5 d-flex" style="min-height: 80vh;">
        <div class="container text-center">
            <h2 class="text-center mb-5">Eventos</h2>

            <!-- Contenedor de botones centrados -->
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/events/1') }}" class="btn btn-primary btn-xxl w-100">
                            ZARAGOZA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-primary btn-xxl w-100">
                            TARAZONA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/maintenance') }}" class="btn btn-primary btn-xxl w-100">
                            EJEA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/maintenance') }}" class="btn btn-primary btn-xxl w-100">
                            HUESCA
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/maintenance') }}" class="btn btn-primary btn-xxl w-100">
                            TERUEL
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/maintenance') }}" class="btn btn-primary btn-xxl w-100">
                            GRAÑEN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection