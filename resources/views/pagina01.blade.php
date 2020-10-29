<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')
    @parent

    <p>Esta parte se añade a la barra lateral original (no la sobreescribe).</p>
@endsection

@section('contenido')
    <p>Este es el body de esta página.</p>
    <a href="{{ url('pregunta', ['Historia', Crypt::encrypt(0)]) }}" class="btn btn-xs btn-info pull-right">Historia</a>
    <a href="{{ url('pregunta', ['Economia', Crypt::encrypt(0)]) }}" class="btn btn-xs btn-info pull-right">Economia</a>
    <a href="{{ url('pregunta', ['Ingles', Crypt::encrypt(0)]) }}" class="btn btn-xs btn-info pull-right">Ingles</a>
@endsection 
