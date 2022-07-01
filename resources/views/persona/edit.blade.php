@extends('layouts.plantillaBase')

@section('contenido')
    <h2>Editar persona</h2>

    <form action="/personas/{{$persona->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$persona->nombre}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2" value="{{$persona->apellido}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Dni</label>
            <input id="dni" name="dni" type="text" class="form-control" tabindex="3" value="{{$persona->dni}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Dirección</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4" value="{{$persona->direccion}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Teléfono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" tabindex="5" value="{{$persona->telefonos()->numero}}">
        </div>

        <a href="/personas/{{ $persona->id }}/edit" class="btn btn-secondary" tabindex="6">Cancelar</a>
        
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection