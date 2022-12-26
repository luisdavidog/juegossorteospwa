<?php
require('../db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>

    <div class="container  mt-5 mb-5">
        <div id="titulo" class="text-center mt-3 mb-3">Registro</div>
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
        <div class="mb-3 form-floating">
        <select class="form-select" name="TipoUsuarioID" style="width: 100%;">
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
        <div class="mb-3 form-floating">
        <select class="form-select" name="MunicipioID" style="width: 100%;">
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
        <button type="submit" class="btn btn-primary" style="width: 100%;">Registrar</button>
      </form>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>