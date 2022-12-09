<x-app-layout>
   

    <!DOCTYPE html>
<html lang="es">
<head>
  <style>
    a{
        text-decoration: none !important;
    }
    div{
      background-image: linear-gradient(green,rgb(74, 207, 74)) !important ;
    }
    
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROL DE BILLARES </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <h1 style="text-align: center !important ;">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_BMtT2p.json"  background="transparent"  speed="1"  style="width: 15%; height: auto;"  loop  autoplay></lottie-player>
    </h1>   
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <br>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('mesas') }}">REGISTRO DE MESAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('contactos') }}">CONTACTOS</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-4">
<img src="b1.jpg" alt="" srcset="" class="img-fluid">
    </div>
    <div class="col-md-4">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_dXZtM8.json"  background="transparent"  speed="1"  style="width: 100%; height: auto;"  loop  autoplay></lottie-player>
    </div>
    <div class="col-md-4">
      <img src="b2.jpg" alt="" srcset="" class="img-fluid">
    </div>
  </div>
</div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
</x-app-layout>
