@extends('layout')

@section('title')
    Inicio | Productos
@stop

@section('contenedor')
    @section('h1')
        Inicio Bodega
    @stop
    <a href="{{ route('productos.create')}}" class="btn btn-primary">Insertar</a>
@stop
