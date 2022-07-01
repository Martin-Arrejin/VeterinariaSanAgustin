@extends('layouts.plantillaBase')

@section('contenido')
    <h2>Editar telefono</h2>

    <form action="/telefonos/{{$telefono->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Numero</label>
            <input id="numero" name="numero" type="number" class="form-control" tabindex="1" value="{{$telefono->numero}}">
        </div>
        
        <button type="submit" class="btn btn-primary" tabindex="2">Guardar</button>
    </form>
@endsection