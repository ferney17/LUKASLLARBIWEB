<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
div{
    background: green !important ; 
}

        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body style="background: green ;" >
<a href="javascript:history.back()" style="text-align: center; color: white !important ;"> Volver Atrás</a>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ngkuz1ow.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <div class="list-group">
            <br>
            <br>
            <a href="{{url('contactos')}}" class="list-group-item">Consultar Todos los Proveedores</a>
  <a href="{{url('contactos/create')}}" class="list-group-item">Registrar Nuevo proveedor</a>
</div>
        </div>
        <div class="col-md-9">
<div class="panel panel-primary">
    <div class="panel-body">
        <form action="{{ route('contactos.store') }}" method="POST">
@csrf
        <div class="form-group">
            <label for=""> Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required />
            <label for=""> Telefono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" required />
            <label for=""> Fecha de Registro</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required />
            <label for=""> Direcciòn</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required />
            <label for=""> Correo Electrònico</label>
            <input type="email" name="correoElectronico" id="correoElectronico" class="form-control" required />
        </div>
        <button class="btn btn-success pull-right">Registrar nuevo Proveedor</button>
        </form>
    </div>
</div>
        </div>
    </div>
</div>
