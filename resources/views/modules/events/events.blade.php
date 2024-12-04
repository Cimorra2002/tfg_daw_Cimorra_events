@extends('layouts/main')
@section('titulo_pagina', 'Eventos')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section class="pt-5 mt-5 d-flex" style="min-height: 80vh;">
        <div class="container text-center">
            @if (Auth::user()->role === 'admin')
                <div class="d-flex m-4 gap-4 admin-buttons">
                    <a class="btn btn-success" href="{{ url('/createEvent') }}">Crear evento</a>
                    <a class="btn btn-warning" href="{{ url('/menuEvent') }}">Editar evento</a>
                    <a class="btn btn-danger" href="{{ url('/menuEvent') }}">Eliminar evento</a>
                </div>
            @endif
            <h2 class="text-center mb-5">Eventos</h2>

            <!-- Contenedor de botones centrados -->
             <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="row justify-content-center mb-4">
                    @foreach($localizacionesConEventos as $localizacion)
                        <div class="col-md-4 mb-3">
                            @if ($localizacion->has_events)
                                <!-- Si hay eventos, muestra un enlace a los eventos de la ciudad -->
                                <a href="{{ url('/events/' . $localizacion->localiz_id) }}" class="btn btn-primary btn-xxl w-100">
                                    {{ $localizacion->localiz_nombre }}
                                </a>
                            @else
                                <!-- Si no hay eventos, muestra un enlace a la vista de mantenimiento -->
                                <a href="{{ url('/maintenance') }}" class="btn btn-secondary btn-xxl w-100">
                                    {{ $localizacion->localiz_nombre }}
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.footer.footer')
@endsection