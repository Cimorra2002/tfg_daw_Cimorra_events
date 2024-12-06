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
                    <span class="details-text">LOCALIZACIÓN</span>
                    <span>{{ $localizacion->localiz_nombre }}</span>
                </div>

                <div class="d-flex flex-column">
                    <span class="details-text">Precio</span>
                    <div class="d-flex gap-5 align-items-center">
                        <span class="price-text">{{ number_format($evento->evento_precio, 2) }}€</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4">
            <h4 class="mb-3">Compartir</h4>
            <a href="https://wa.me/?text={{ urlencode($evento->evento_nombre . ' - ' . $evento->evento_fecha . ' a las ' . $evento->evento_hora_inicio . '. Más detalles: ' . route('events.shareParty', ['localiz_id' => $localizacion->localiz_id, 'evento_id' => $evento->evento_id]) . ' Localización: ' . $localizacion->localiz_nombre) }}" target="_blank" class="btn btn-success"><i class="bi bi-whatsapp"></i></a>

            <a href="https://twitter.com/intent/tweet?text={{ urlencode($evento->evento_nombre . ' - ' . $evento->evento_fecha . ' a las ' . $evento->evento_hora_inicio . '. Más detalles: ' . route('events.shareParty', ['localiz_id' => $localizacion->localiz_id, 'evento_id' => $evento->evento_id]) . ' Localización: ' . $localizacion->localiz_nombre) }}" target="_blank" class="btn btn-dark"><i class="bi bi-twitter-x"></i></a>

            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('events.shareParty', ['localiz_id' => $localizacion->localiz_id, 'evento_id' => $evento->evento_id])) }}&quote={{ urlencode($evento->evento_nombre . ' - ' . $evento->evento_fecha . ' a las ' . $evento->evento_hora_inicio . '. Localización: ' . $localizacion->localiz_nombre) }}" target="_blank" class="btn btn-primary"><i class="bi bi-facebook"></i></a>

        </section>
    </div>

@endsection

@section('footer')
    @include('layouts.footer.footer')
@endsection