<?php
require('../db.php');
include("../auth_session.php");
include("../navbar-root.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--link rel="stylesheet" href="style.css"-->
</head>
  <body>

    <div class="container">
        <h2 class="mt-3 fw-bold">Registro</h2>

        <div class="mb-5">
        <img src="../assets/User_Avatar_Isometric.svg" class="img-fluid" alt="Usuarios">
        </div>

        <form action="../RegistrarUsuario.php" method="post">

        <div class="mb-3">
          <input type="text" class="form-control" id="UsuarioNombre" placeholder="Ingrese el nombre del usuario" name="nombre" />
        </div>

        <div class="mb-3">
          <input type="text" class="form-control" id="App" placeholder="Ingrese apellido paterno" name="App">
        </div>

        <div class="mb-3">
          <input type="text" class="form-control" id="Apm" placeholder="Ingrese apellido materno" name="Apm">
        </div>

        <div class="mb-3">
          <input type="text" class="form-control" id="Telefono" placeholder="Telefono" name="Telefono">
        </div>

        <div class="mb-3">
        <select class="form-select" name="TipoUsuarioID">
        <option value="0">Seleccione rol de usuario:</option>
        <?php
          $querytu = "SELECT * FROM tipo_usuario";
          $restu = $con->query($querytu);
          while ($valorestu = $restu->fetch_assoc()) {
            echo '<option value="'.$valorestu['idTipoUsuario'].'">'.$valorestu['DescTipo'].'</option>';
          }
        ?>
      </select>
        </div>

        <div class="mb-3">
        <select class="form-select" name="MunicipioID">
        <option value="0">Municipio:</option>
        <?php
          $query = "SELECT * FROM municipio";
          $res = $con->query($query);
          while ($valores = $res->fetch_assoc()) {
            echo '<option value="'.$valores['idMunicipio'].'">'.$valores['Municipio'].'</option>';
          }
        ?>
      </select>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="usuario" placeholder="Correo Electronico" name="usuario">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="contra" placeholder="Contraseña" name="contra">
        </div>
        <button type="submit" class="btn btn-primary fw-semibold" style="width: 100%;">Registrar</button>
      </form>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  </body>
</html>