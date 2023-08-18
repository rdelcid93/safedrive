<?php
$page = 'home';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Examen Parcial</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <?php include('includes/_meta.php'); ?>

</head>

<body>

  <?php include('includes/_header.php'); ?>


  <!-- carrusel -->

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active img-fluid" style="max-height:500px;">
        <img src="img/01.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" style="max-height:500px;">
        <img src="img/02.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" style="max-height:500px;">
        <img src="img/03.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid bg-secondary-subtle text-center m-auto py-5">
  <H1> No es solo un viaje. Es un SafeDrive.</H1>
</div>

<!-- tarjetas horizontales-->

<div class="container m-5">

  <div class="card mb-3 border-0" >
    <div class="row g-0">

    <div class="col-md-5 text-center m-auto mb-5">
        <img src="img/isologo.png" style="height: 200px;" class="img-fluid" alt="...">
      </div>
      
      <div class="col-md-7 m-auto text-center">
        <div class="card-body">
          <h2 class="card-title">Bienvenido a SafeDrive:</h2> 
          <h3 class="card-title">Tu Socio en Movimiento Seguro</h3>
          <br>
          <p class="card-text">En SafeDrive, entendemos que cada viaje es más que simplemente llegar a tu destino; es una experiencia que debe ser cómoda, confiable y sobre todo, segura. Somos mucho más que una agencia de alquiler de autos; somos tu socio en movimiento seguro.</p>
          <div> <a href="nosotros.php" class="btn btn-secondary btn-lg m-3">Más Información</a> </div>
        </div>
      </div>



    </div>
  </div>

</div>


  <?php include('includes/_footer.php'); ?>

  <?php include('includes/_scripts.php'); ?>


</body>