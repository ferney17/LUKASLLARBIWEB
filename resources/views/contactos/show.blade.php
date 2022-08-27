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
<a href="javascript:history.back()"> Volver Atrás</a>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <div class="list-group">
            <br>
            <br>
            <a href="{{url('contactos')}}" class="list-group-item">Consultar Todos los Contactos</a>
  <a href="{{url('contactos/create')}}" class="list-group-item">Crear Nuevo Contacto</a>
</div>
        </div>
        <div class="col-md-9">
<h2> VER DETALLES DE </h2>
<table class="table table-striped">
    <tr>
        <td>NOMBRE</td>
        <td>{{$contacto->nombre}}</td>
    </tr>
    <tr>
        <td>TELÈFONO</td>
        <td>{{$contacto->telefono}}</td>
    </tr>
    <tr>
        <td>FECHA DE NACIMIENTO</td>
        <td>{{$contacto->fechaNacimiento}}</td>
    </tr>
    <tr>
        <td>DIRECCIÒN</td>
        <td>{{$contacto->direccion}}</td>
    </tr>
    <tr>
        <td>CORREO ELECTRÒNICO</td>
        <td>{{$contacto->correoElectronico}}</td>
    </tr>
    <tr>
        <td>FECHA DE CREACIÒN</td>
        <td>{{$contacto->created_at}}</td>
    </tr>
    <tr>
        <td>FECHA DE ACTUALIZACIÒN</td>
        <td>{{$contacto->updated_at}}</td>
    </tr>
</table>
<a href="{{route('contactos.index')}}" class="btn btn-primary">VOLVER ATRÀS</a>

        </div>
    </div>
</div>
