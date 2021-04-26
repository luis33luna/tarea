@extends('adminlte::page')

@section('title', 'CRUD de Empleados')

@section('content_header')
    <h1>Lista de Emplead@s</h1>
@stop

@section('content')
    
<a href="empleados/create" class="btn btn-primary mb-3" >CREAR</a>

<table id="empleados" class="table table-dark table-bordered shadow-lg mt-6" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">ApellidoPaterno</th>
            <th scope="col">ApellidoMaterno</th>
            <th scope="col">Genero</th>
            <th scope="col">Celular</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)

        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Nombres}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Genero}}</td>
            <td>{{$empleado->Celular}}</td>
            <td>{{$empleado->Direccion}}</td>
            <td>
                <form action= "{{route ('empleados.destroy',$empleado->id)}}" method="POST">
                <a href="/empleados/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Borrar</button>
                </form>
            </td>

        </tr>

        @endforeach
    </tbody>

</table>
{{ $empleados->links() }}
<div> El total de registros: {{$empleados->total()}}</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')

<script src= "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src= "https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src= "https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#empleados').DataTable({
        "lengthMenu":[[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
} );

</script>

    
@stop