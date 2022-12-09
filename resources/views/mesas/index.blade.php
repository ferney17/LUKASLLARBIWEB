<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Mesas Registro </title>
        <style>
         div{
          background:  green !important;
        }
        
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    </head>
    <body class="antialiased" style="background: green !important ;">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_BMtT2p.json"  background="transparent"  speed="1"  style="width: 10%; height: auto;"  loop  autoplay></lottie-player>
  
<a href="javascript:history.back()" style="color: white !important ;"> Volver Atrás</a>
      @foreach ($mesas as $mesa)
          <table class="table table-striped bg-success" >
<thead style="background: green;">
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
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ngkuz1ow.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
      
<div class="row">
 <div class="col-md-6">
 <a href="{{url('mesas')}}" class="list-group-item">Consultar Todas las Mesas</a>
 </div>
 <hr>
 <div class="col-md-6">
 <a href="{{url('mesas/create')}}" class="list-group-item">Crear Nueva Mesa</a>
  </div>
</div>
     
    
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" ></script>
    </body>

