@extends('layouts/main')
@section('titulo_pagina', 'Contactanos')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section id="contact" class="contact section pt-5 mt-5">
        <div class="container section-title">
            <h2 class="text-center">Contactanos</h2>
            <p class="text-center mb-5 mt-3">Si tienes alguna duda sobre la página web o alguna recomendación para mejorar la
                página contactanos.</p>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Dirección</h3>
                                <p>Via Hispanidad</p>
                                <p>Zaragoza, 50012</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-telephone"></i>
                                <h3>Llamanos</h3>
                                <p>616 49 14 98</p>
                                <p>976 22 33 23</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-envelope"></i>
                                <h3>Correos</h3>
                                <p>info@cimorraevents.com</p>
                                <p>info@queresacon.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-clock"></i>
                                <h3>Horario de atención</h3>
                                <p>Lunes - Viernes</p>
                                <p>9:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('contactUs.store') }}" method="POST" class="php-email-form">
                        @csrf
                        @method('POST')
                        <div class="row gy-4">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <input type="text" name="contact_nombre" class="form-control" placeholder="Tu nombre">
                                @error('contact_nombre')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="contact_apellido" placeholder="Apellido">
                                @error('contact_apellido')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="contact_correo" placeholder="Tu Email">
                                @error('contact_correo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="contact_mensaje" rows="6" placeholder="Mensaje"></textarea>
                                @error('contact_mensaje')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <div class="col-12 text-center">
                                <button type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.footer.footer')
@endsection
