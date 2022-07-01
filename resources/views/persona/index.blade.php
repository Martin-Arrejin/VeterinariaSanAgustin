@extends('layouts.plantillaBase')

@section('contenido')
    <h1>Listado de Personas</h1>

    <a href="personas/create" class="btn btn-primary">Crear</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Dni</th>
                <th scope="col">Dirección</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($personas as $unaPersona)
                <tr>
                    <td>{{$unaPersona->id}}</td>
                    <td>{{$unaPersona->nombre}}</td>
                    <td>{{$unaPersona->apellido}}</td>
                    <td>{{$unaPersona->dni}}</td>
                    <td>{{$unaPersona->direccion}}</td>
                    <td>
                        <form action="{{ route('personas.destroy', $unaPersona->id)}}" method="POST">
                        <a href="{{ route('personas.show',$unaPersona->id)}}" class="btn btn-info">Ver</a>
                        <a href="personas/{{$unaPersona->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection