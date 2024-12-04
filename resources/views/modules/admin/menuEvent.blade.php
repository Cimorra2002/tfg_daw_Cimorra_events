@extends('layouts/main')
@section('titulo_pagina', 'Home')

@section('navbar')
    @include('layouts.nav.navbar')
@endsection

@section('contenido')
    <section class="pt-5 mt-5">
        <div class="container section-title">
            <h2 class="mb-5">Opciones de eventos de admin</h2>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-bordered table-striped table-hover table-rounded">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Ciudad</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)
                    <tr>
                        <td>{{ $evento->evento_nombre }}</td>
                        <td>{{ $evento->localizacion->localiz_nombre }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('editEvent', ['id' => $evento->evento_id]) }}">Editar</a>
                            <form action="{{ route('deleteEvent', ['id' => $evento->evento_id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este evento?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-success" href="/events">Volver a los eventos</a>
        </div>
    </section>
@endsection