<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')
    @parent

    <p>Esta parte se añade a la barra lateral original (no la sobreescribe).</p>
@endsection

@section('contenido')
    <p>Este es el body de esta página.</p>
    <a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-right">Historia</a>
    <a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-right">Economia</a>
    <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-right">Ingles</a>
    <a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-right">Historia pero un json solo</a>
@endsection 
