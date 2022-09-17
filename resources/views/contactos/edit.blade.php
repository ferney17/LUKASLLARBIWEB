<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CONTACTO</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
<a href="javascript:history.back()"> Volver Atrás</a>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <div class="list-group">
            <br>
            <br>
            <a href="{{url('contactos')}}" class="list-group-item">Consultar Todos los Contactos</a>
  <a href="{{url('contactos/create')}}" class="list-group-item">Crear Nuevo Contacto </a>
</div>
        </div>
        <div class="col-md-9">
<h2>Actualizar perfil de {{ $contacto->nombre}}</h2>
<div class="panel-body">
    <form action="{{ route('contactos.update', $contacto->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
        <label for=""> Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $contacto->nombre }}" class="form-control" required />
        <label for="">Telèfono </label>
        <input type="text" name="telefono" id="telefono" value="{{ $contacto->telefono }}"  class="form-control" required />
        <label for=""> Fecha de Nacimiento</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="{{ $contacto->fechaNacimiento }}" class="form-control" required />
        <label for=""> Direcciòn</label>
        <input type="text" name="direccion" id="direccion" value="{{ $contacto->direccion }}"  class="form-control" required />
        <label for=""> Correo Electrònico</label>
        <input type="email" name="correoElectronico" id="correoElectronico" value="{{ $contacto->correoElectronico }}"  class="form-control" required />
    </div>
    <button type="submit" class="btn btn-primary pull-right">ACTUALIZAR CONTACTO</button>
    </form>
</div>
        </div>
    </div>
</div>
