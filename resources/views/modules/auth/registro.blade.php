@extends('layouts/main')
@section('titulo_pagina', 'Registro de usuario')

@section('contenido')
<div class="container bg-light min-vh-100">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-4">
                    <div class="card-body p-4 p-sm-5">
                        <form action="{{route('registrar')}}" method="post">
                            @csrf
                            @method('POST')
                            <h3 class="text-dark text-center fw-bold mb-5">Crear una cuenta</h3>
                            <div class="fw-normal text-center text-muted mb-4">
                                ¿Ya tienes una cuenta? <a href="{{ route('login') }}"
                                    class="text-primary fw-bold text-decoration-none">Inicia sesión aqui</a>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Nombre">
                                <label for="floatingFirstName">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Correo">
                                <label for="floatingInput">Correo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <br>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Registrate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
