@extends('adminlte::page')

@section('title', 'CRUD de Empleados')

@section('content_header')
    <h1>Crear un Nuevo Usuario</h1>
@stop

@section('content')
<form action="/empleados" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombres</label>
    <input id="Nombres" name="Nombres" type="text" class="form-control" tabindex="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">ApellidoPaterno</label>
    <input id="ApellidoPaterno" name="ApellidoPaterno" type="text" class="form-control" tabindex="2">
</div>

<div class="mb-3">
    <label for="" class="form-label">ApellidoMaterno</label>
    <input id="ApellidoMaterno" name="ApellidoMaterno" type="text" class="form-control" tabindex="3">
</div>

<div class="mb-3">
    <label for="" class="form-label">Genero</label>
    <input id="Genero" name="Genero" type="text" class="form-control" tabindex="4">
</div>

<div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="Celular" name="Celular" type="text" class="form-control" tabindex="5">
</div>

<div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="Direccion" name="Direccion" type="text" class="form-control" tabindex="6">
</div>
<a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelado</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop