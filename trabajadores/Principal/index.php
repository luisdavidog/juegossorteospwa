<?php
//include auth_session.php file on all user panel pages
include("../../auth_session.php");
?>
<!DOCTYPE html>

<html>
<head>
  <title>Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid text-white">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Bienvenido: <?php echo $_SESSION['nombre']; ?>!</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="../../_regi5tr0/">Registrar nuevo usuario</a>        </li>
        <li class="nav-item">
        <li><a class="nav-link text-white" href="../../_regi5tr0Ti3nd4/">Registra nueva tienda</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <form class="container p-5">
  <div class="col text-center">
  <h1>Inicio de ruta</h1>
  <br>
<h1>Seleccione una de las siguientes opciones</h1>
</div>
<br>
<div class="col text-center">
  <a class="btn btn-primary btn-lg mt-3 mb-3" href="../Reportes/index.html" role="button">Reportes</a>
</div>
<div class="col text-center">
<a href="../ComenzarRuta" type="button" class="btn btn-primary btn-lg mt-3 mb-3">Iniciar Ruta</a>
</div>
  <br>
  <br>
</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
  </html>
