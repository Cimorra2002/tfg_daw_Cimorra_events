@extends('layouts/main')
@section('titulo_pagina', 'Login de usuario')

@section('contenido')
    <div class="container bg-light min-vh-100 d-flex ">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card border-0 shadow rounded-3 my-4">
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('logear') }}" method="post">
                            @csrf
                            @method('post')
                            <h3 class="text-dark text-center fw-bold mb-4">Iniciar sesión</h3>
                            <div class="text-center text-muted mb-4">
                                ¿Eres nuevo? <a href="{{ route('registro') }}"
                                    class="text-primary fw-bold text-decoration-none">Crea una cuenta</a>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Correo</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg text-uppercase fw-bold" type="submit">Iniciar
                                    sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
