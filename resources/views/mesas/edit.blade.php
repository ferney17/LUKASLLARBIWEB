<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR REGISTRO MESA</title>
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
            <a href="{{url('mesas')}}" class="list-group-item">Consultar Todos los Registros</a>
  <a href="{{url('mesas/create')}}" class="list-group-item">Crear Nuevo Registro </a>
</div>
        </div>
        <div class="col-md-9">
<h2>Actualizar mesa{{ $mesa->numeroMesa}}</h2>
<div class="panel-body">
    <form action="{{ route('mesas.update', $mesa->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
        <label for="numeroMesa"> Numero de Mesa</label>
        <input type="text" name="numeroMesa" id="numeroMesa" value="{{ $mesa->numeroMesa }}" class="form-control" required />
        <label for="tiempoMesa">Tiempo de la Mesa </label>
        <input type="tiempoMesa" name="tiempoMesa" id="tiempoMesa" value="{{ $mesa->tiempoMesa }}"  class="form-control" required />
     
     
    </div>
    <button type="submit" class="btn btn-primary pull-right">ACTUALIZAR REGISTRO DE MESA</button>
    </form>
</div>
        </div>
    </div>
</div>
