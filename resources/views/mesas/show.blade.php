<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTAR CONTACTO </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <div class="list-group">
            <br>
            <br>
            <a href="{{url('mesas')}}" class="list-group-item">Todos los registros</a>
  <a href="{{url('mesas/create')}}" class="list-group-item">Crear registro</a>
</div>
        </div>
        <div class="col-md-9">
<h2> VER DETALLES DE </h2>
<table class="table table-striped">
    <tr>
        <td>NÙMERO DE MESA</td>
        <td>{{$mesa->numeroMesa}}</td>
    </tr>
    <tr>
        <td>TIEMPO DE MESA</td>
        <td>{{$mesa->tiempoMesa}}</td>
    </tr>
   
    <tr>
        <td>FECHA DE CREACIÒN</td>
        <td>{{$mesa->created_at}}</td>
    </tr>
    <tr>
        <td>FECHA DE ACTUALIZACIÒN</td>
        <td>{{$mesa->updated_at}}</td>
    </tr>
</table>
<a href="{{route('mesas.index')}}" class="btn btn-primary">VOLVER ATRÀS</a>

        </div>
    </div>
</div>
