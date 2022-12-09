<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <style>
        div{
          background: green !important; 
        }
      </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Laravel </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    </head>
    <body class="antialiased" style="background: green;">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_BMtT2p.json"  background="transparent"  speed="1"  style="width: 15%; height: auto;"  loop  autoplay></lottie-player>
    <a href="javascript:history.back()" style="color: white;"> Volver Atrás</a>
    <hr>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ngkuz1ow.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
      <a href="{{url('contactos')}}" class="list-group-item">Consultar Todos los Proveedores</a>
      <a href="{{url('contactos/create')}}" class="list-group-item">Crear Nuevo Proveedor</a>

      @foreach ($contactos as $contacto)
          <table class="table table-striped bg-success" style="">
<thead>
 <th>NOMBRE</th>
 <th>TELÈFONO</th>
 <th>FECHA DE NACIMIENTO</th>
 <th>DIRECCIÒN</th>
  <th>CORREO ELECTRÒNICO</th>
  <th>ACCIONES</th>
</thead>
<tbody>
  <tr>
  <td>
    {{ $contacto->nombre }}
  </td>
  <td>
   {{ $contacto->telefono }}
  </td>
  <td>
    {{ $contacto->fechaNacimiento }}
   </td>
  <td>
    {{ $contacto->direccion}}
   </td>
   <td>
    {{ $contacto->correoElectronico }}
   </td>
   <td>
    <form  action="{{route('contactos.destroy', $contacto->id)}}" method="POST">
   
        @csrf
        @method('DELETE')
      <a href="{{ route('contactos.show', $contacto->id) }}" class="btn btn-info"> Detalles </a>
      <a href="{{ route('contactos.edit', $contacto->id) }}" class="btn btn-warning"> Editar </a>
      <button href="" class="btn btn-danger"> Eliminar </button>
    </form>
  
</td>
</tr>
</tbody>
          </table>
      @endforeach 
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" ></script>
    </body>

