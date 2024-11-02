@extends('layouts/main')
@section('titulo_pagina', 'Login de usuario')

@section('contenido')
<div class="container bg-light min-vh-100">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-4">
                <div class="card-body p-4 p-sm-5">
                    <form action="{{route('logear')}}" method="post">
                        @csrf
                        @method('post')
                        <h3 class="text-dark text-center fw-bold mb-5">Iniciar sesión</h3>
                        <div class="fw-normal text-center text-muted mb-4">
                            Eres nuevo? <a href="{{ route('registro') }}"
                                class="text-primary fw-bold text-decoration-none">Crea una cuenta</a>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Correo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
