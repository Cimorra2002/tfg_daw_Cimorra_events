@extends('layouts/main')
@section('titulo_pagina', 'Galeria')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
<section class="gallery section light-background pt-5 mt-5 pb-5">
    <div class="container">
        <div class="row align-items-xl-center gy-5 px-5">
            <h2 class="text-center">Galeria</h2>
        </div>
        <div class="container d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="party row g-0 mt-5">
                <h3>Que Resacón en Moogli - 1 de Marzo de 2024</h3>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('images/fiesta2/IMG_11.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ url('images/fiesta2/IMG_11.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('images/fiesta2/IMG_4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ url('images/fiesta2/IMG_4.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/fiesta2/IMG_7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('images/fiesta2/IMG_7.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="mt-3 mb-3">
                    <a href="{{ route('gallery.moogli') }}" class="btn btn-primary col-lg-2 col-md-3 btn-lg">
                        Ver más
                    </a>
                </div>
            </div>
        </div>
        <div class="container d-flex flex-column align-items-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="party row g-0 mt-5">
                <h3>Que Resacón en Bloody - 21 de Diciembre de 2023</h3>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('images/fiesta1/IMG_16.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ url('images/fiesta1/IMG_16.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('images/fiesta1/IMG_14.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ url('images/fiesta1/IMG_14.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/fiesta1/IMG_17.jpg') }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('images/fiesta1/IMG_17.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="mt-3 mb-3">
                    <a href="{{ route('gallery.bloody') }}" class="btn btn-primary col-lg-2 col-md-3 btn-lg">
                        Ver más
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
