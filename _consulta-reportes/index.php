<?php
require('../db.php');
include("../auth_session.php");
include("../navbar-root.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas en existencia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="fw-bold">Consulta cortes</h2>
        <!--a class="btn btn-primary" href="/juegossorteospwa/trabajadores/CRUD/create.php" role="button">Nueva documento</a-->
        <div class="mb-3">
        <img src="../assets/Online_report_Isometric.svg" class="img-fluid" alt="Usuarios">
        </div>

        <form action="index.php" method="post">
            <div class="mb-3">
        <select class="form-select" name="usuario">
        <option value="0">Seleccione:</option>
        <?php
          $query = "SELECT * FROM usuario";
          $res = $con->query($query);
          while ($valores = $res->fetch_assoc()) {
            echo '<option value="'.$valores['id'].'">'.$valores['usuario'].'</option>';
          }
        ?>
      </select>
      </div>
      <div class="d-grid gap-2">
      <input type="submit" value="Buscar" class="btn btn-primary"/>
        </div>
      </form>
        <br>
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numero de corte</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">limpieza</th>
                    <th scope="col">credito</th>
                    <th scope="col">maquina</th>
                    <th scope="col">funcionamiento</th>
                    <th scope="col">cerraduras</th>
                    <th scope="col">idMaquinita</th>
                    <th scope="col">fallo</th>
                    <th scope="col">prueba fallo</th>
                    <th scope="col">comentario fallo</th>
                    <th scope="col">pieza</th>
                    <th scope="col">comentario pieza</th>
                    <th scope="col">gramos totales</th>
                    <th scope="col">gramos clientes</th>
                    <th scope="col">gramos ingreso</th>
                    <th scope="col">pesos totales</th>
                    <th scope="col">pesos cliente</th>
                    <th scope="col">pesos ingreso</th>
                    <th scope="col">kilometraje</th>
                    <th scope="col">vehiculo</th>
                    <th scope="col">idUsuario</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuario = $_POST['usuario'] ?? NULL;

                if (isset($_POST['usuario'])) {
                $sql = "SELECT * FROM checklist where idUsuario = $usuario";
                $result = $con->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connect->error);
                }

                while($row = $result->fetch_assoc()) {
                    //echo "<a href='download.php?nombre_archivo=" . urlencode($nombre_archivo) . "'>Descargar " . $row['documnento'] . "</a>";
                    $id = $row['id'] ?? NULL;
                    $fondo = $row['fondo'] ?? NULL;
                    $limpieza = $row['limpieza'] ?? NULL;
                    $credito = $row['credito'] ?? NULL;
                    $maquina = $row['maquina'] ?? NULL;
                    $funcionamiento = $row['funcionamiento'] ?? NULL;
                    $cerraduras = $row['cerraduras'] ?? NULL;
                    $idMaquinita = $row['idMaquinita'] ?? NULL;
                    $fallo = $row['fallo'] ?? NULL;
                    $prueba_fallo = $row['prueba_fallo'] ?? NULL;
                    $comentario_fallo = $row['comentario_fallo'] ?? NULL;
                    $pieza = $row['pieza'] ?? NULL;
                    $comentario_pieza = $row['comentario_pieza'] ?? NULL;
                    $GramosTotales = $row['GramosTotales'] ?? NULL;
                    $GramosClientes = $row['GramosClientes'] ?? NULL;
                    $GramosIngreso = $row['GramosIngreso'] ?? NULL;
                    $PesosTotales = $row['PesosTotales'] ?? NULL;
                    $PesosCliente = $row['PesosCliente'] ?? NULL;
                    $PesosIngreso = $row['PesosIngreso'] ?? NULL;
                    $kilometraje = $row['kilometraje'] ?? NULL;
                    $vehiculo = $row['vehiculo'] ?? NULL;
                    $idUsuario = $row['idUsuario'] ?? NULL;

                    echo "
                    <tr>
                        <th scope='row'>$id</th>
                        <td>$fondo</td>
                        <td>$limpieza</td>
                        <td>$credito</td>
                        <td>$maquina</td>
                        <td>$funcionamiento</td>
                        <td>$cerraduras</td>
                        <td>$idMaquinita</td>
                        <td>$fallo</td>
                        <td>$prueba_fallo</td>
                        <td>$comentario_fallo</td>
                        <td>$pieza</td>
                        <td>$comentario_pieza</td>
                        <td>$GramosTotales</td>
                        <td>$GramosClientes</td>
                        <td>$GramosIngreso</td>
                        <td>$PesosTotales</td>
                        <td>$PesosCliente</td>
                        <td>$PesosIngreso</td>
                        <td>$kilometraje</td>
                        <td>$vehiculo</td>
                        <td>$idUsuario</td>
                    </tr>
                    ";
                }
                  }

                
                ?>
            </tbody>
        </table>
        </div>
        <div class="d-grid gap-2">
        <a class='btn btn-warning fw-semibold' href='../trabajadores/ComenzarRuta/' role='button'>Nuevo corte</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>