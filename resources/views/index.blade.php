<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LUKAS LLARBI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
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
<section>
<div class="row">
    <div class="col-4"><img src="https://cdn.pixabay.com/photo/2016/01/29/01/04/billiards-1167221_960_720.jpg" alt="" srcset=""></div>
    <div class="col-4"><img src="https://cdn.pixabay.com/photo/2016/01/29/01/04/billiards-1167221_960_720.jpg" alt="" srcset=""></div>
    <div class="col-4"><img src="https://cdn.pixabay.com/photo/2016/01/29/01/04/billiards-1167221_960_720.jpg" alt="" srcset=""></div>
  </div>
</section>
<section>
    <hr>
    <h3 style="color: green; text-align:center;">NUESTRAS REDES SOCIALES</h3>
    <hr>
    <div class="row">
    <div class="col-4"><img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" alt="" width="33%"></div>
<div class="col-4"><img src="https://www.pngplay.com/wp-content/uploads/8/Whatsapp-No-Background.png" alt="" width="33%"></div>
<div class="col-4"><img src="https://www.pngplay.com/wp-content/uploads/8/Whatsapp-No-Background.png" alt="" width="33%"></div>
    </div>

   
</section>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>