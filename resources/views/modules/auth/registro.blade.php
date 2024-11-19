@extends('layouts/main')
@section('titulo_pagina', 'Registro de usuario')

@section('contenido')
<div class="container bg-light min-vh-100 d-flex">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6">
            <div class="card border-0 shadow rounded-3 my-4">
                <div class="card-body p-4 p-md-5">
                    <form action="{{ route('registrar') }}" method="post">
                        @csrf
                        @method('POST')
                        <h3 class="text-dark text-center fw-bold mb-4">Crear una cuenta</h3>
                        <div class="text-center text-muted mb-4">
                            ¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary fw-bold text-decoration-none">Inicia sesión aquí</a>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
                            <label for="name">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Correo" required>
                            <label for="email">Correo</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg text-uppercase fw-bold" type="submit">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection