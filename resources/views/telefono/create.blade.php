@extends('layouts.plantillaBase')

@section('contenido')
    <h2>Agregar Teléfono</h2>

    <form action="/telefonos" method="POST">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Teléfono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input id="id" name="id" type="hidden" class="form-control" tabindex="2" value="{{$persona_id}}">
        </div>

        <a href="/personas" class="btn btn-secondary" tabindex="3">Cancelar</a>
        
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection