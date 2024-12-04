@extends('layouts/main')
@section('titulo_pagina', 'Home')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section class="pt-5 mt-5">
        <div class="container section-title">
            <h1 class="text-center mb-5">CIMORRA EVENTS</h1>
            <div class="search-bar w-100 mt-5 mb-5 mb-md-0">
                <form action="" method="get" id="searchForm">
                    <input id="searchInput" class="py-2 ps-5" type="text" placeholder="Buscar evento..." name="query"
                        autocomplete="off" oninput="fetchSuggestions()">
                    <a class="search-icon" href=""><i class="bi bi-search"></i></a>
                    <!-- Lista de sugerencias -->
                    <ul id="suggestionsList" class="list-group mt-2"></ul>
                </form>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide my-5 bg-secondary" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center" style="height: 800px;">
                            <img src="{{ asset('images/fiesta2/IMG_12.jpg') }}" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>¿Buscas una fiesta donde pasartelo bien?</h5>
                                <p><span>En Cimorra Events organizamos fiestas que haran que las noches</span><br><span>sean
                                        inolvidables.</span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 800px;">
                            <img src="{{ asset('images/fiesta2/IMG_13.jpg') }}" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>¿Es tu cumpleaños?</h5>
                                <p>Ven a nuestras fiestas y te mejoraremos tu experiencia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 800px;">
                            <img src="{{ asset('images/fiesta2/IMG_10.jpg') }}" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Los mejores servicios</h5>
                                <p>En Cimorra Events nos encargamos de tener los servicios mas exclusivos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 800px;">
                            <img src="{{ asset('images/fiesta2/IMG_14.jpg') }}" class="d-block w-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>¿Tomas una copa?</h5>
                                <p>Tenemos las mejores promociones en nuestras fiestas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection