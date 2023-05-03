<?php
//include auth_session.php file on all user panel pages
include("../../auth_session.php");
require('../../db.php');


if (isset($_POST['submit'])) {
  $retirarFondo = $_POST['retira-fondo'] ?? null;
  $limpieza = $_POST['limpieza'] ?? null;
  $dejarCredito = $_POST['deja-credito'] ?? null;
  $resetearMaquina = $_POST['resetea-maquina'] ?? null;;
  $revisarFuncionamiento = $_POST['revisa-funcionamiento'] ?? null;;
  $cerraduras = $_POST['cerraduras'] ?? null;
  $maquinitas = $_POST['idMaquinita'] ?? null;
  $fallo = $_POST['fallo'] ?? null;
  $prueba = $_POST['prueba_fallo'] ?? null;
  $comentario_fallo = $_POST['comentario_fallo'] ?? null;
  $pieza = $_POST['pieza'] ?? null;
  $comentario_pieza = $_POST['comentario_pieza'] ?? null;
  $gramosTotales = $_POST['gramostotales'] ?? null;
  $gramosClientes = $_POST['gramosclientes'] ?? null;
  $gramosIngreso = $_POST['gramosingreso'] ?? null;
  $pesosTotales = $_POST['pesostotales'] ?? null;;
  $pesosClientes = $_POST['pesosclientes'] ?? null;;
  $ingresoPesos = $_POST['ingresopesos'] ?? null;
  $vehiculo = $_POST['vehiculo'] ?? null;
  $kilometraje = $_POST['kilometraje'] ?? null;
  $idUsuario = $_SESSION['id'] ?? null;

  mysqli_query($con, "INSERT INTO checklist(fondo, limpieza, credito, maquina, funcionamiento, cerraduras, idMaquinita, fallo, prueba_fallo, comentario_fallo, pieza, comentario_pieza, GramosTotales, GramosCliente, GramosIngreso, PesosTotales, PesosCliente, PesosIngreso, kilometraje, vehiculo, idUsuario) 
            VALUES ('$retirarFondo', '$limpieza', '$dejarCredito', '$resetearMaquina', '$revisarFuncionamiento', '$cerraduras', '$maquinitas', '$fallo', '$prueba', '$comentario_fallo', '$pieza', '$comentario_pieza', '$gramosTotales', '$gramosClientes', '$gramosIngreso', '$pesosTotales', '$pesosClientes', '$ingresoPesos', '$kilometraje', '$vehiculo', '$idUsuario')")
    or die("No se pudo registrar" . mysqli_error($conexion));
  mysqli_close($con);
  header("refresh:3; url=../../trabajadores/ComenzarRuta");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargando</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <di class="container-fluid">
    <div class="d-flex align-items-center p-5">
      <strong>Cargando...</strong>
      <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>