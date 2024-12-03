@extends('layouts/main')
@section('titulo_pagina', 'Evento Ciudad')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <div class="event-title d-flex justify-content-center align-items-center"
        style="background-image: url({{ url('storage/' . $evento->evento_imagen) }});">
        <h2>{{ $evento->evento_nombre }}</h2>
    </div>

    <div class="p-5 event-details">
        <section>
            <h4 class="mb-3">Descripción</h4>
            <p>{{ $evento->evento_descripcion }}</p>
        </section>

        <section class="py-4">
            <h4 class="mb-3">Detalles</h4>
            <div class="d-flex flex-row justify-content-between w-100">
                <div class="d-flex flex-column">
                    <span class="details-text">FECHA</span>
                    <span>
                        @if ($evento->evento_fecha)
                            {{ \Carbon\Carbon::parse($evento->evento_fecha)->format('d/m/Y') }}
                        @else
                            No disponible
                        @endif
                    </span>
                </div>

                <div class="d-flex flex-column">
                    <span class="details-text">HORA INICIO</span>
                    <span>
                        @if ($evento->evento_hora_inicio)
                            {{ \Carbon\Carbon::parse($evento->evento_hora_inicio)->format('H:i') }}
                        @else
                            No disponible
                        @endif
                    </span>
                </div>

                <div class="d-flex flex-column">
                    <span class="details-text">HORA FIN</span>
                    <span>
                        @if ($evento->evento_hora_fin)
                            {{ \Carbon\Carbon::parse($evento->evento_hora_fin)->format('H:i') }}
                        @else
                            No disponible
                        @endif
                    </span>
                </div>

                <div class="d-flex flex-column">
                    <span class="details-text">LOCALIDAD</span>
                    <span>{{ $localizacion->localiz_nombre }}</span>
                </div>
            </div>
        </section>

        <section class="py-4">
            <h4 class="mb-3">Compra tu entrada</h4>
            <div class="mb-4">
                <div class="d-flex flex-column">
                    <span class="details-text">Precio</span>
                    <div class="d-flex gap-5 align-items-center">
                        <span class="price-text">{{ number_format($evento->evento_precio, 2) }}€</span>
                        <span>hay existencias</span>
                    </div>
                </div>
            </div>
            <div>
                <a class="d-flex justify-content-between align-items-center gap-3 px-4 py-2 button-purchease"
                    href="https://open.nyxell.com/city/fiestas-en-tarazona/site/que-resacon-polideportivo-municipal-tarazona/event/18900-queresacon--recinto-ferial-tarazona--sabado-14--diciembre">
                    <i class="bi bi-bag"></i>
                    <span>Comprar entrada</span>
                </a>
            </div>
        </section>
    </div>

@endsection
