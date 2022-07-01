@extends('layouts.plantillaBase')

@section('contenido')

    <table class="table table-dark table-striped mt-4">
        <tr>
            <td>Id: </td><td>{{$persona->id}}</td>
        </tr>
        <tr>
            <td>Nombre: </td><td>{{$persona->nombre}}</td>
        </tr>
        <tr>
            <td>Apellido: </td><td>{{$persona->apellido}}</td>
        </tr>
        <tr>
            <td>Dni: </td><td>{{$persona->dni}}</td>
        </tr>
        <tr>
            <td>Dirección: </td><td>{{$persona->direccion}}</td>
        </tr>
        <tr>
            <td colspan="2">Telefonos: </td>
        </tr>
        @foreach($telefonos as $unTelefono)
        <tr>
            <td></td> <td>{{$unTelefono->numero}} <a href="/telefonos/{{$unTelefono->id}}/edit" class="btn btn-info ml-2">Editar teléfono</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/personas" class="btn btn-primary">Volver</a>

    <a href="{{route('creartelefono', $persona->id)}}" class="btn btn-primary">Agregar Teléfono</a>
@endsection