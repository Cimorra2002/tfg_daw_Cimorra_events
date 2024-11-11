@extends('layouts/main')
@section('titulo_pagina', 'Sobre nosotros')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section id="about" class="about section light-background pt-5 mt-5 pb-5">
        <div class="container">
            <div class="row align-items-xl-center gy-5 px-5">
                <h2 class="text-center">Sobre nosotros</h2>
                <div class="col-xl-5 content">
                    <h4 class="pb-2">En Cimorra Events:</h4>
                    <p class="text-justify-custom">Nos apasiona crear experiencias únicas que marcan la diferencia para
                        aquellos jóvenes que buscan disfrutar de momentos irrepetibles. Sabemos que las noches se viven de
                        manera
                        intensa y, por eso, nos especializamos en diseñar eventos exclusivos para personas de entre 18 y 30
                        años,
                        que quieren más que una simple fiesta: buscan vivir una experiencia completa llena de emoción,
                        música
                        vibrante y sorpresas que nunca olvidarán.
                        Nuestro enfoque es mucho más que solo organizar una fiesta; trabajamos cada detalle con dedicación
                        para que cada evento sea una inmersión total en el entretenimiento y la diversión. Desde la
                        atmósfera que
                        envolvemos en cada lugar, hasta la selección musical que hará que no puedas dejar de moverte, todo
                        está pensado para ofrecerte una sensación de adrenalina constante. Cada fiesta es diseñada para
                        hacerte
                        sentir que formas parte de algo especial, un ambiente donde la energía y el buen rollo se contagian,
                        y las conexiones se crean de forma natural.
                        Te prometemos una noche llena de emociones intensas, donde la música, el ritmo y las sorpresas van
                        más allá de lo que imaginas. Cada evento es una invitación a dejarse llevar por la magia de la noche
                        y,
                        al mismo tiempo, ser parte de un momento único que se vive en el presente, porque sabemos que cada
                        instante cuenta cuando se trata de crear recuerdos.</p>
                    <h4 class="pb-2">Siguenos en instagram:</h4>
                    <div>
                        <a class="icon-instagram" href="https://www.instagram.com/queresacon/"><i class="bi bi-instagram icon-instagram text-danger"> @queresacon</i></a>
                    </div>
                    <br><br><a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">
                        <div class="col-md-6">
                            <div class="icon-box">
                                <i class="bi bi-headphones"></i>
                                <h3>DJ's de renombre</h3>
                                <p class="text-justify-custom">Cuyas mezclas y selecciones musicales te llevarán a la pista
                                    de
                                    baile desde el primer segundo. Nuestros eventos no son solo para bailar, también para
                                    disfrutar del ambiente, la compañía y la energía de los asistentes.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <i class="bi bi-gift"></i>
                                <h3>Sorteos en directo</h3>
                                <p class="text-justify-custom">Lo que nos diferencia son nuestros sorteos en directo, en los
                                    que
                                    podrás ganar increíbles premios durante la fiesta, aumentando la emoción y la
                                    participación
                                    del público.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <i class="bi bi-rocket-takeoff"></i>
                                <h3>Fiestas tematizadas</h3>
                                <p class="text-justify-custom">Donde podrás sumergirte en mundos y ambientes sorprendentes
                                    que
                                    transforman cada evento en algo completamente diferente y especial.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <i class="bi bi-patch-question"></i>
                                <h3>Sorpresas inesperadas</h3>
                                <p class="text-justify-custom">Te mantendrán a tope en cada momento. No sabes qué esperar,
                                    pero
                                    lo que sí sabemos es que cada evento será un verdadero espectáculo para todos los
                                    sentidos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="collaborators" class="collaborators section pt-5">
        <div class="container">
            <div class="row gy-4">
                <h2 class="text-center">Principales colaboradores</h2>
                <div class="col-xl-2 col-md-3 col-6 collaborators-logo">
                    <img src="{{ url('/images/zaraphone.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 collaborators-logo">
                    <img src="{{ url('/images/peluqueria_omar.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 collaborators-logo">
                    <img src="{{ url('/images/Captura.JPG') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 collaborators-logo">
                    <img src="{{ url('/images/thumbnail_logo_color_g.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 collaborators-logo">
                    <img src="{{ url('/images/reichel_pinck.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 collaborators-logo">
                    <img src="{{ url('/images/Foto perfil.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
