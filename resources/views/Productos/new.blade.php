@extends('layout')

@section('title')
    Insertar | Productos
@stop

@section('contenedor')
    @section('h1')
        Ingresar datos
    @stop
    <form action="{{url('productos')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"> <br>
                <input type="text" name='nombre' placeholder="Ingrese nombre producto" class="form-control"></input>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"> <br>
                <input type="text" name='descripcion' placeholder="Ingrese descripcion" class="form-control"></input>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"> <br>
                <input type="number" name='precio' placeholder="Ingrese nombre precio" class="form-control"></input>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-success ">Enviar</button>
                <a href="{{ url('productos') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
@stop
