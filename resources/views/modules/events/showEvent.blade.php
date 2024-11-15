@extends('layouts/main')
@section('titulo_pagina', 'Evento Ciudad')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <div class="event-title d-flex justify-content-center align-items-center"
        style="background-image: url({{ url('images/fiesta2/IMG_1.jpg') }});">
        <h2>EVENTO_NOMBRE</h2>
    </div>
    <div class="p-5 event-details">
        <section>
            <h4 class="mb-3">Descripción</h4>
            <p>evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion evento-descripcion evento-descripcion evento-descripcion evento-descripcion
                evento-descripcion </p>
        </section>

        <section class="py-4">
            <h4 class="mb-3">Detalles</h4>
            <div class="d-flex flex-row justify-content-between w-100">
                <div class="d-flex flex-column">
                    <span class="details-text">FECHA</span>
                    <span>evento_fecha</span>
                </div>
                <div class="d-flex flex-column">
                    <span class="details-text">HORA INICIO</span>
                    <span>evento_hora_inicio</span>
                </div>
                <div class="d-flex flex-column">
                    <span class="details-text">HORA FIN</span>
                    <span>evento_hora_fin</span>
                </div>
                <div class="d-flex flex-column">
                    <span class="details-text">LOCALIDAD</span>
                    <span>evento_hora_localidad</span>
                </div>
            </div>
        </section>

        <section class="py-4">
            <h4 class="mb-3">Compra tu entrada</h4>
            <div class="mb-4">
                <div class="d-flex flex-column">
                    <span class="details-text">Precio</span>
                    <div class="d-flex gap-5 align-items-center">
                        <span class="price-text">15,00€</span>
                        <span>hay existencias</span>
                    </div>
                </div>
            </div>
            <div>
                <a class="d-flex justify-content-between align-items-center gap-3 px-4 py-2 button-purchease" href="">
                    <i class="bi bi-bag"></i>
                    <span>Comprar entrada</span>
                </a>
            </div>
        </section>
    </div>
@endsection
