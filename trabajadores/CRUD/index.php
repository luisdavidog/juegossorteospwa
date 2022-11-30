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
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "juegossorteos2";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM tienda";
                $result = $connection->query($sql);

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
                            <a class='btn btn-primary btn-sm' href='/juegossorteospwa/trabajadores/CRUD/edit.php?idTienda=$row[idTienda]'>Editar</a>
                            <a class='btn btn-primary btn-sm' href='/juegossorteospwa/trabajadores/CRUD/delete.php?idTienda=$row[idTienda]'>Eliminar</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
        <a class='btn btn-warning btn-lg m-3' href='../CorteDistribucion/index.html' role='button'>Realizar corte y distrubucion</a>
    </div>
</body>
</html>