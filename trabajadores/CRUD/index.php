<?php                
require('../../db.php');
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
        <h2>Tiendas</h2>
        <a class="btn btn-primary" href="/juegossorteospwa/trabajadores/CRUD/create.php" role="button">Nueva tienda</a>
        <form action="index.php" method="post">
        <select name="municipio">
        <option value="0">Seleccione:</option>
        <?php
          $query = "SELECT * FROM municipio";
          $res = $con->query($query);
          while ($valores = $res->fetch_assoc()) {
            echo '<option value="'.$valores['idMunicipio'].'">'.$valores['Municipio'].'</option>';
          }
        ?>
      </select>
      <input type="submit" value="Buscar" class="btn btn-primary"/>
      </form>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>idTienda</th>
                    <th>Tienda</th>
                    <th>idMunicipio</th>
                    <th>idMaquinita</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                global $municipio;
                $municipio = $_POST['municipio'];

                if (isset($_POST['municipio'])) {
                echo 'prueba:'.$municipio;
                $sql = "SELECT * FROM tienda where idTienda = $municipio";
                $result = $con->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connect->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[idTienda]</td>
                        <td>$row[Tienda]</td>
                        <td>$row[idMunicipio]</td>
                        <td>$row[idMaquinita]</td>
                        <td>$row[Nombre]</td>
                        <td>$row[Direccion]</td>
                        <td>$row[Telefono]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='../CRUD/edit.php?idTienda=$row[idTienda]'>Editar</a>
                            <a class='btn btn-primary btn-sm' href='../CRUD/delete.php?idTienda=$row[idTienda]'>Eliminar</a>
                            <a class='btn btn-warning btn-sm' href='../CorteDistribucion/index.html'>Corte</a>
                            </td>
                    </tr>
                    ";
                }
                  }

                
                ?>
            </tbody>
        </table>
        <a class='btn btn-warning btn-lg m-3' href='../CorteDistribucion/index.html' role='button'>Realizar corte y distrubucion</a>
    </div>
</body>
</html>