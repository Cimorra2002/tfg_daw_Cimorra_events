@extends('layouts/main')
@section('titulo_pagina', 'Evento Ciudad')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section id="contact" class="contact section pt-5 mt-5 d-flex" style="min-height: 80vh;">
        <div class="container text-center">
            <h2 class="text-center mb-5">Eventos (CIUDAD)</h2>

            <div class="container mb-5 w-100 gap-3">
                <div class="d-block d-md-flex flex-row justify-content-between w-100">
                    <div class="search-bar w-100 mb-3 mb-md-0">
                        <form action="">
                            <input class="py-2 ps-5" type="text" placeholder="Busqueda...">
                            <a class="search-icon" href=""><i class="bi bi-search"></i></a>
                        </form>
                    </div>



                    <div class="d-flex flex-row justify-content-around w-100">
                        <div class="filter-container px-5 py-1 d-flex align-items-center">filtro</div>
                        <div class="filter-container px-5 py-1 d-flex align-items-center active">filtro</div>
                        <div class="filter-container px-5 py-1 d-flex align-items-center">filtro</div>
                    </div>
                </div>
            </div>

            <!-- Event List -->
            <div class="container-fluid text-center">
                <div class="results w-100 mb-3"><span>33 Resultados</span></div>
                <div class="row display-flex justify-content-around">

                    <!-- Cards -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                        <a href="{{ url('/events/2/1') }}">
                            <div class="w-100 event-image"
                                style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                            <div class="event-info p-3">
                                <h4 class="mb-1">evento_nombre</h4>
                                <span class="text-decoration-none"> Hola</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                        <a href="{{ url('/events/2/1') }}">
                            <div class="w-100 event-image"
                                style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                            <div class="event-info p-3">
                                <h4 class="mb-1">evento_nombre</h4>
                                <span class="text-decoration-none"> Hola</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                        <a href="{{ url('/events/2/1') }}">
                            <div class="w-100 event-image"
                                style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                            <div class="event-info p-3">
                                <h4 class="mb-1">evento_nombre</h4>
                                <span class="text-decoration-none"> Hola</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                        <a href="{{ url('/events/2/1') }}">
                            <div class="w-100 event-image"
                                style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                            <div class="event-info p-3">
                                <h4 class="mb-1">evento_nombre</h4>
                                <span class="text-decoration-none"> Hola</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                        <a href="{{ url('/events/2/1') }}">
                            <div class="w-100 event-image"
                                style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                            <div class="event-info p-3">
                                <h4 class="mb-1">evento_nombre</h4>
                                <span class="text-decoration-none"> Hola</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5 event-card">
                        <a href="{{ url('/events/2/1') }}">
                            <div class="w-100 event-image"
                                style="background-image: url({{ url('images/fiesta2/IMG_13.jpg') }});"></div>
                            <div class="event-info p-3">
                                <h4 class="mb-1">evento_nombre</h4>
                                <span class="text-decoration-none"> Hola</span>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
    </section>
@endsection
