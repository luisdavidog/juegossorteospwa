<?php                
require('../../db.php');
include("../../auth_session.php");
include("../../navbar.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Comenzar Ruta</title>
</head>
<body>
<!-- Formulario 1 -->
<div class="container text-center">
  <div id="form1" class="p-3">
<form method="post" action="index.php">
        <h2 class="fw-bold">Municipio</h2>
        <div class="mb-2">
        <label for="municipio" class="form-label fw-semibold">Selecciona un municipio:</label>
        <select name="municipio" id="municipio" class="form-select" >
        <option value="0">Selecciona:</option>
            <?php
            // Obtener los municipios de la tabla "municipio"
            $query = "SELECT * FROM municipio";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['idMunicipio'] . "'>" . $row['Municipio'] . "</option>";
            }
            ?>
        </select>
        </div>
        <input type="submit" value="Seleccionar" class="btn btn-primary mt-2 mb-2 fw-semibold">
    </form>
    </div>
    <!-- Formulario 2 -->
    <div id="form2" class="p-3">
    <form method="post" action="index.php">
        <h2 class="fw-bold">Tienda</h2>
        <label for="tienda" class="form-label fw-semibold">Selecciona una tienda:</label>
        <select name="tienda" id="tienda" class="form-select" >
        <option value="0">Seleccione:</option>
            <?php
            // Obtener las tiendas que coinciden con el municipio seleccionado en el formulario 1
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['municipio'])) {
                $id_municipio = $_POST['municipio'];
                // Obtener las tiendas que coinciden con el municipio seleccionado
                $query = "SELECT idTienda, Tienda FROM tienda WHERE idMunicipio = $id_municipio";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['idTienda'] . "'>" . $row['Tienda'] . "</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="Seleccionar" class="btn btn-primary mt-2 mb-2 fw-semibold">
    </form>
    </div>
    <!-- Formulario 3 -->
    <div id="form3" class="p-3">
    <form method="post" action="../corte/index.php">
        <h2 class="fw-bold">Maquinita</h2>
        <div class="mb-2">
        <label for="maquinita" class="form-label fw-semibold">Selecciona una maquinita:</label>
        <select name="maquinita" id="maquinita" class="form-select">
        <option value="0">Seleccione:</option>
            <?php
            // Obtener las maquinitas que coinciden con la tienda seleccionada en el formulario 2
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tienda'])) {
              $id_tienda = $_POST['tienda'];
              $query = "SELECT idMaquinita, maquinita FROM maquinita WHERE idTienda = $id_tienda";
              $result = mysqli_query($con, $query);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['idMaquinita'] . "'>" . $row['maquinita'] . "</option>";
            }
}

echo "</select>
    </div>
    <input value='Iniciar corte' type='submit' class='btn btn-warning fw-semibold'/>
    </form>";
?>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>