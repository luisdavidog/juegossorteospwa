<?php
require 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Municipio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center mt-5">
        <p class="display-3">
            Registrar Municipio
        </p>
    </div>
    <div class="container">
    <form action="RegistrarMunicipio.php" method="post">
        <div class="mb-3">
          <label for="text" class="form-label">Municipio</label>
          <input type="text" class="form-control" id="Municipio" placeholder="Escriba el municipio" name="Municipio">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php
            $conexion=mysqli_connect("localhost","root","","juegossorteos2") or die("No se encontro la conexion");
            mysqli_query($conexion,"INSERT INTO municipio(Municipio) 
            VALUES ('$_REQUEST[Municipio]')")
            or die ("No se pudo registrar" . mysqli_error($conexion));
            mysqli_close($conexion);

            echo "Municipio registrado con exito";
 ?>  
  </body>
</html>