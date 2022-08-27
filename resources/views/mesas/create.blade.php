<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR REGISTRO DE MESA </title>
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
            <a href="{{url('mesas')}}" class="list-group-item">Consultar Todos las Mesas</a>
  <a href="{{url('mesas/create')}}" class="list-group-item">Crear Nueva Mesa</a>
</div>
        </div>
        <div class="col-md-9">
<h2> CREAR UN NUEVO REGISTRO DE MESA</h2>
<div class="panel panel-primary">
    <div class="panel-body">
        <form action="{{ route('mesas.store') }}" method="POST">
@csrf
        <div class="form-group">
            <label for="numeroMesa"> Nùmero de Mesa</label>
            <input type="text" name="numeroMesa" id="numeroMesa" class="form-control" required />
            <label for=""> Tiempo de Mesa</label>
            <input type="text" name="tiempoMesa" id="tiempoMesa" class="form-control" required />
            
        </div>
        <button class="btn btn-primary pull-right">CREAR REGISTRO</button>
        </form>
    </div>
</div>
        </div>
    </div>
</div>
