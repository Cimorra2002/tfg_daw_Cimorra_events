@extends('layouts/main')
@section('titulo_pagina', 'Contactanos')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section id="contact" class="contact section pt-5 mt-5" >
        <div class="container section-title" data-aos="fade-up">
            <h2 class="text-center">Contactanos</h2>
            <p class="text-center mb-5 mt-3">Si tienes alguna duda sobre la página web o alguna recomendación para mejorar la página contactanos.</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Dirección</h3>
                                <p>Via Hispanidad</p>
                                <p>Zaragoza, 50012</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Llamanos</h3>
                                <p>616 49 14 98</p>
                                <p>976 22 33 23</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Correos</h3>
                                <p>info@cimorraevents.com</p>
                                <p>info@queresacon.com</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Horario de atención</h3>
                                <p>Lunes - Viernes</p>
                                <p>9:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Tu nombre"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Tu Email"
                                    required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Apellido"
                                    required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required=""></textarea>
                            </div>

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