@extends('layouts/main')
@section('titulo_pagina', 'Editar Evento')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <section class="pt-5 mt-5">
        <div class="container section-title">
            <h2 class="mb-5">Editar evento</h2>
            <form class="row g-3" action="{{ route('updateEvent', $evento->evento_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="evento_nombre" value="{{ $evento->evento_nombre }}" required>
                </div>
                <div class="col-6">
                    <label for="inputLocalizacion" class="form-label">Localización</label>
                    <select id="inputLocalizacion" class="form-select" name="localiz_id" required>
                        <option selected disabled>Elige...</option>
                        @foreach($localizaciones as $localizacion)
                            <option value="{{ $localizacion->localiz_id }}"
                                    {{ $localizacion->localiz_id == $evento->localiz_id ? 'selected' : '' }}>
                                {{ $localizacion->localiz_nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="inputFecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="inputFecha" name="evento_fecha" value="{{ $evento->evento_fecha }}" required>
                </div>
                <div class="col-3">
                    <label for="inputHoraInicio" class="form-label">Hora inicio</label>
                    <input type="time" class="form-control" name="evento_hora_inicio" value="{{ old('evento_hora_inicio', $evento->evento_hora_inicio) }}" />
                </div>
                <div class="col-3">
                    <label for="inputHoraFin" class="form-label">Hora fin</label>
                    <input type="time" class="form-control" name="evento_hora_fin" value="{{ old('evento_hora_fin', $evento->evento_hora_fin) }}" />
                </div>
                <div class="col-3">
                    <label for="inputPrecio" class="form-label">Precio</label>
                    <div class="input-group">
                        <div class="input-group-text">€</div>
                        <input type="number" step="0.01" class="form-control" id="inputPrecio" name="evento_precio" value="{{ $evento->evento_precio }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecciona una imagen</label>
                    <input class="form-control" type="file" id="formFile" name="evento_imagen">
                    @if($evento->evento_imagen)
                        <img src="{{ asset('storage/' . $evento->evento_imagen) }}" alt="Imagen actual" style="width: 150px; margin-top: 10px;">
                    @endif
                </div>
                <div class="col-12">
                    <label for="floatingDescripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="floatingDescripcion" name="evento_descripcion" style="height: 100px">{{ $evento->evento_descripcion }}</textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Actualizar evento</button>
                    <a class="btn btn-success" href="/events">Volver a los eventos</a>
                </div>
            </form>
        </div>
    </section>
@endsection