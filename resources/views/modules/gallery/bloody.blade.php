@extends('layouts.main')

@section('titulo_pagina', 'Galería Bloody')

@section('contenido')
<div class="container my-5">
    <h2 class="text-center mb-4">Galería de Que Resacón en Bloody</h2>
    <div class="row">
        @foreach($imagenesBloody as $imagen)
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="gallery-item">
                    <a href="{{ url($imagen) }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ url($imagen) }}" alt="Imagen de Bloody" class="img-fluid">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection

@section('footer')
    @include('layouts.footer.footer')
@endsection