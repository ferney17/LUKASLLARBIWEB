<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Laravel </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    </head>
    <body class="antialiased">
      <header>
        PRUEBA PARA BRM 
        AUTOR: WILLIAM ANDRES RÀTIVA BAQUERO
        CC 1233895437
      </header>
      <a href="{{url('contactos')}}" class="list-group-item">Consultar Todos los Usuarios</a>
      <a href="{{url('contactos/create')}}" class="list-group-item">Crear Nuevo Usuario</a>

      @foreach ($contactos as $contacto)
          <table class="table table-striped">
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

