@extends('layouts/main')
@section('titulo_pagina', 'Eventos')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')

    <section class="pt-5 mt-5 d-flex">
        <div class="container text-center">
            <h2 class="text-center mb-3">Pronto llegaremos a esta zona.</h2>
            <h3 class="mb-5">Disfruta de nuestras fiestas exclusivas en otros pueblos o ciudades.</h3>
            <div class="maintenance-container">
                <div>
                    <img src="{{ url('gifs/dance.gif') }}" class="img-fluid custom-gif" alt="Mantenimiento en progreso">
                </div>
            </div>
            <a href="{{ url('/events') }}" class="btn btn-home mt-3">Volver a eventos</a>
        </div>
    </section>

@endsection

@section('footer')
    @include('layouts.footer.footer')
@endsection
