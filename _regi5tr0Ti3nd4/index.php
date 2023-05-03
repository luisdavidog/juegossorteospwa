<?php
require('../db.php');
include("../auth_session.php");
include("../navbar-root.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiendas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <div class="container">

    <h2 class="fw-bold mt-5 mb-5">Registro nueva tienda</h2>

    <form action="" method="post">

      <img src="../assets/Closed_Store_Online_Isometric.png" class="img-fluid" alt="...">

      <div class="mb-3">
        <label for="tienda" class="form-label fw-semibold">Tienda</label>
        <input type="text" class="form-control" id="Tienda" placeholder="Escriba el nombre de la tienda" name="Tienda">
      </div>

      <div class="mb-3">

        <select class="form-select" name="MunicipioID">
          <option value="0">Municipio:</option>
          <?php
          $query = "SELECT * FROM municipio";
          $res = $con->query($query);
          while ($valores = $res->fetch_assoc()) {
            echo '<option value="' . $valores['idMunicipio'] . '">' . $valores['Municipio'] . '</option>';
          }
          ?>
        </select>

      </div>

      <div class="d-grid gap-2">
        <button name="submit" type="submit" class="btn btn-primary fw-semibold">Registrar</button>
      </div>

    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <?php
  $tienda = $_POST['Tienda'] ?? NULL;
  $municipio = $_POST['MunicipioID'] ?? NULL;

  if (isset($_POST['submit'])) {
    mysqli_query($con, "INSERT INTO tienda(Tienda, idMunicipio) 
            VALUES ('$tienda', '$municipio')")
      or die("No se pudo registrar" . mysqli_error($conexion));
    mysqli_close($con);
    echo "Tienda registrada con exito";
  }


  ?>
</body>

</html>