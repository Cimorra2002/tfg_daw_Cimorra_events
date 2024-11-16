@extends('layouts/main')
@section('titulo_pagina', 'Home')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section class="pt-5 mt-5">
        <div class="container section-title">
            <h2 class="mb-5">Crear evento</h2>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="col-6">
                    <label for="inputLocalizacion" class="form-label">Localización</label>
                    <select id="inputLocalizacion" class="form-select">
                        <option selected>Elige...</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="inputFecha" class="form-label">Fecha</label>
                    <input type="text" class="form-control" id="inputFecha">
                </div>
                <div class="col-3">
                    <label for="inputHoraInicio" class="form-label">Hora inicio</label>
                    <input type="text" class="form-control" id="inputHoraInicio">
                </div>
                <div class="col-3">
                    <label for="inputHoraFin" class="form-label">Hora fin</label>
                    <input type="text" class="form-control" id="inputHoraFin">
                </div>
                <div class="col-3">
                    <label for="inputPrecio" class="form-label">Precio</label>
                    <div class="input-group">
                        <div class="input-group-text">€</div>
                        <input type="text" class="form-control" id="inputPrecio">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecciona una magen</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                <div class="col-12">
                    <label for="floatingDescripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="floatingDescripcion" style="height: 100px"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Crear evento</button>
                    <a class="btn btn-success" onclick="window.history.back();">Volver a los eventos de (CIUDAD)</a>
                </div>
            </form>
        </div>
    </section>
@endsection
