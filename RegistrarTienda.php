<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Municipio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center m-5">
        <p class="display-3">
            Registrar Nueva Tienda
        </p>
    </div>
    <div class="container">
    <form action="RegistrarTienda.php" method="post">
        <div class="mb-3">
          <label for="text" class="form-label">Tienda</label>
          <input type="text" class="form-control" id="Tienda1" placeholder="Ingrese el nombre de la tienda" name="tienda">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">idMunicipio</label>
          <input type="text" class="form-control" id="municipio1" placeholder="Ingrese el id del municipio" name="idMunicipio">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php
            $conexion=mysqli_connect("localhost","root","","juegossorteos") or die("No se encontro la conexion");
            mysqli_query($conexion,"INSERT INTO tienda(Nombre), tienda(idMunicipio) 
            VALUES ('$_REQUEST[Nombre]', '$_REQUEST[idMunicipio]')")
            or die ("No se pudo registrar" . mysqli_error($conexion));
            mysqli_close($conexion);

            echo "Tienda registrada con exito";
 ?>  
  </body>
</html>