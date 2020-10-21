<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')
    @parent

    <p>Aquí podría no poner nada si no quisiera.</p>
@endsection

@section('contenido')
    <p>Este es el body de la página 02.</p>
    <h1> {{ $tema }}</h1>
    <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">página 01</a>
@endsection 
