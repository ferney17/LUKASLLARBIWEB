<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Mesas Registro </title>
        <style>
          a{
            color: white !important;
            background: green !important; 
          }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    </head>
    <body class="antialiased">
    

      @foreach ($mesas as $mesa)
          <table class="table table-striped">
<thead>
 <th>NUMERO DE MESA</th>
 <th>TIEMPO DE MESA</th>
  <th>ACCIONES</th>
</thead>
<tbody>
  <tr>
  <td>
    {{ $mesa->numeroMesa }}
  </td>
  <td>
   {{ $mesa->tiempoMesa}}
  </td>
   <td>
    <form  action="{{route('mesas.destroy', $mesa->id)}}" method="POST">
   
        @csrf
        @method('DELETE')
      <a href="{{ route('mesas.show', $mesa->id) }}" class="btn btn-info" style="background:purple !important;"> Detalles </a>
      <a href="{{ route('mesas.edit', $mesa->id) }}" class="btn btn-warning"> Editar </a>
      <button href="" class="btn btn-danger"> Eliminar </button>
    </form>
  
</td>
</tr>
</tbody>
          </table>
      @endforeach 
<div class="row">
 <div class="col-md-6">
 <a href="{{url('mesas')}}" class="list-group-item">Consultar Todas las Mesas</a>
 </div>
 <div class="col-md-6">
 <a href="{{url('mesas/create')}}" class="list-group-item">Crear Nueva Mesa</a>
  </div>
</div>
     
    
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" ></script>
    </body>

