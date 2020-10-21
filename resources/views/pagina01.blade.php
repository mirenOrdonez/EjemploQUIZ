<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')
    @parent

    <p>Esta parte se añade a la barra lateral original (no la sobreescribe).</p>
@endsection

@section('contenido')
    <p>Este es el body de esta página.</p>
    <a href="{{ url('pagina02/Historia') }}" class="btn btn-xs btn-info pull-right">Historia</a>
    <a href="{{ url('pagina02/Economia') }}" class="btn btn-xs btn-info pull-right">Economía</a>
    <a href="{{ url('pagina02/Ingles') }}" class="btn btn-xs btn-info pull-right">Inglés</a>
@endsection 
