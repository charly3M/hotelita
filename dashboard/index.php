<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Document</title>
</head>
<body>
    
<?php require_once "vistas/parte_superior.php"?>

 <div class="container">
    <h1>Habitaciones</h1>
 </div>
 <br>

    
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="imagenes/img1.jpg" class="d-block rounded mx-auto" alt="...">
      
    </div>
    <div class="carousel-item " data-bs-interval="3000">
      <img src="imagenes/img2.jpg" class="d-block rounded mx-auto " alt="...">
    
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="imagenes/img3.jpg" class="d-block rounded mx-auto" alt="...">
      
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="imagenes/img4.jpg" class="d-block rounded mx-auto" alt="...">
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php require_once "vistas/parte_inferior.php"?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</body>
</html>