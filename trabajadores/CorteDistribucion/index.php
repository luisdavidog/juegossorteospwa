<?php
//include auth_session.php file on all user panel pages
include("../../auth_session.php");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Corte y Distribucion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div>
<form action="corte.php" method="post" class="container p-5" name="f">
  <h1>Corte y Distribucion</h1>
    <div class="form-group col-md-3 m-5">
      <label for="inputEmail4">Ingrese los gramos totales</label>
      <input type="number" name="gramostotales" value="0" onchange="cal()" onkeyup="cal()" />
    </div> 
  <div class="col-md-3 m-5">
    <label for="validationCustom05">Gramos correspondientes a clientes</label>
    <input type="number" name="gramosclientes" value="0" readonly="readonly" />
  </div>
  <div class="col-md-3 m-5">
    <label for="validationCustom05">Gramos de ingreso</label>
    <input type="number" name="gramosingreso" value="0" readonly="readonly" />
  </div>
  <div class="col-md-3 m-5">
    <label for="validationCustom05">Pesos totales</label><br>
    <input type="number" name="pesostotales" value="0" readonly="readonly" />
    </div>
  <div class="col-md-3 m-5">
    <label for="validationCustom05">Total de pesos para clientes</label>
    <input type="number" name="pesosclientes" value="0" readonly="readonly" />
    </div>

  <div class="col-md-3 m-5">
    <label for="validationCustom05">Total de ingreso de pesos</label>
    <input type="number" name="ingresopesos" value="0" readonly="readonly" />
    </div>

    <input type="hidden" name="idTienda" value=<?php echo $_SESSION['id']; ?>>


    <div class="col-md-3 input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01">Adjunte foto de kilometraje</label>
      <input name="kilometraje" type="file" class="form-control" id="inputGroupFile01">
    </div>

    <div class="col-md-3 input-group mb-3">
      <label class="input-group-text" for="inputGroupFile02">Adjunte foto del estado del vehículo</label>
      <input name="vehiculo" type="file" class="form-control" id="inputGroupFile02">
    </div>
    
    <div class="col text-center">
      <input name="submit" type="submit" class='btn btn-warning btn-lg m-3' value="Envíar">
    </div>
  </form>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
  </html>
