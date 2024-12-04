@extends('layouts/main')
@section('titulo_pagina', 'Evento Ciudad')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section class="d-flex" style="min-height: 80vh;">
        <div class="container text-center">
            <h2 class="text-center mb-5 mt-5">Eventos en {{ $localizacion->localiz_nombre }}</h2>

            <div class="container mb-5 w-100 gap-3">
                <div class="d-block d-md-flex flex-row justify-content-between w-100">
                    <div class="d-flex flex-row justify-content-around w-100">
                        <!-- Filtro A-Z -->
                        <a href="{{ url('/events/' . $localizacion->localiz_id . '?order=asc') }}" class="filter-container px-5 py-1 d-flex align-items-center">
                            A-Z
                        </a>

                        <!-- Filtro Z-A -->
                        <a href="{{ url('/events/' . $localizacion->localiz_id . '?order=desc') }}" class="filter-container px-5 py-1 d-flex align-items-center">
                            Z-A
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event List -->
            <div class="container-fluid text-center">
                <div class="results w-100 mb-5"><span>{{ $eventos->count() }} Resultados</span></div>
                <div class="row display-flex justify-content-around">
                    <!-- Card -->
                    @foreach($eventos as $evento)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                            <a href="{{ url('/events/' . $localizacion->localiz_id . '/' . $evento->evento_id) }}">
                                <div class="w-100 event-image"
                                    style="background-image: url({{ url('storage/' . $evento->evento_imagen) }});"></div>
                                <div class="event-info p-3">
                                    <h4 class="mb-1">{{ $evento->evento_nombre }}</h4>
                                    <span class="text-decoration-none">{{ $evento->descripcion }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection