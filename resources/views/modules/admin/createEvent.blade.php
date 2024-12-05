@extends('layouts/main')
@section('titulo_pagina', 'Home')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')

    <section class="pt-5 mt-5">
        <div class="container section-title">
            <h2 class="mb-5">Crear evento</h2>
            <form class="row g-3" action="{{ route('createEvent.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-md-6">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="evento_nombre" required>
                </div>
                <div class="col-6">
                    <label for="inputLocalizacion" class="form-label">Localización</label>
                    <select id="inputLocalizacion" class="form-select" name="localiz_id" required>
                        <option selected disabled>Elige...</option>
                        @foreach ($localizaciones as $localizacion)
                            <option value="{{ $localizacion->localiz_id }}">{{ $localizacion->localiz_nombre }}</option>
                        @endforeach
                    </select>
                    @error('localiz_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-3">
                    <label for="inputFecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputFecha" name="evento_fecha" required>
                </div>
                <div class="col-3">
                    <label for="inputHoraInicio" class="form-label">Hora inicio</label>
                    <input type="time" class="form-control" id="inputHoraInicio" name="evento_hora_inicio" required>
                </div>
                <div class="col-3">
                    <label for="inputHoraFin" class="form-label">Hora fin</label>
                    <input type="time" class="form-control" id="inputHoraFin" name="evento_hora_fin" required>
                </div>
                <div class="col-3">
                    <label for="inputPrecio" class="form-label">Precio</label>
                    <div class="input-group">
                        <div class="input-group-text">€</div>
                        <input type="number" step="0.01" class="form-control" id="inputPrecio" name="evento_precio"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecciona una imagen</label>
                    <input class="form-control" type="file" id="formFile" name="evento_imagen" required>
                </div>
                <div class="col-12">
                    <label for="floatingDescripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="floatingDescripcion" name="evento_descripcion" style="height: 100px" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Crear evento</button>
                    <a class="btn btn-success" href="/events">Volver a los eventos</a>
                </div>
            </form>
        </div>
    </section>
@endsection
