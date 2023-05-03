<?php
require('../../db.php');
if (isset($_POST['submit'])) {
  $gramosTotales = $_POST['gramostotales'] ?? null;
  $gramosClientes = $_POST['gramosclientes'] ?? null;
  $gramosIngreso = $_POST['gramosingreso'] ?? null;
  $pesosTotales = $_POST['pesostotales'] ?? null;;
  $pesosClientes = $_POST['pesosclientes'] ?? null;;
  $ingresoPesos = $_POST['ingresopesos'] ?? null;
  $tienda = $_POST['idTienda'] ?? null;
  $vehiculo = $_POST['vehiculo'] ?? null;
  $kilometraje = $_POST['kilometraje'] ?? null;

  mysqli_query($con, "INSERT INTO corte(GramosTotales, GramosCliente, GramosIngreso, PesosTotales, PesosCliente, PesosIngreso, idTienda, kilometraje, vehiculo) 
            VALUES ('$gramosTotales', '$gramosClientes', '$gramosIngreso', '$pesosTotales', '$pesosClientes', '$ingresoPesos', '$tienda', '$kilometraje', '$vehiculo')")
    or die("No se pudo registrar" . mysqli_error($conexion));
  mysqli_close($con);
  header("refresh:3; url=../../trabajadores/CRUD");
}