<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">


    <title>Accueil</title>
</head>
<body>
<h3>Présentation du concept</h3>
    <hr ALIGN="left" style=" width: 40%; ">
<div id="carouselExampleControls" class="carousel slide pt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ban1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ban2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ban3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <h3 class="pt-5">Les actuelles meilleures candidates au concours</h3>
        <hr ALIGN=left style="width:40%;">

    <div class="pt-5">
        <?php include_once('meilleures.php'); ?>
    </div>
    <div class="pt-5 ">
     <p class="text-end">   <a  href="candidates.php">Voir toutes les candidates ></a></p>
    </div>
    <div class="pt-5">
        <?php include_once('rebours.php');?>
    </div>
    <div class="pt-5">
        <?php include_once('partenaires.php');?>
    </div>
    <div class="pt-5">
        <?php include_once('footer.php');?>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>