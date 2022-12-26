<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "juegossorteos2";

$connection = new mysqli($servername, $username, $password, $database);

$Tienda = "";
$idMunicipio = "";
$idMaquinita = "";
$Nombre = "";
$Direccion = "";
$Telefono = "";

$errorMessage = "";
$SuccessMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $Tienda = $_POST["Tienda"];
    $idMunicipio = $_POST["idMunicipio"];
    $idMaquinita = $_POST["idMaquinita"];
    $Nombre = $_POST["Nombre"];
    $Direccion = $_POST["Direccion"];
    $Telefono = $_POST["Telefono"];

    do {
        if ( empty($Tienda) || empty($idMunicipio) || empty($idMaquinita) || empty($Nombre) || empty($Direccion) || empty($Telefono)) {
            $errorMessage = "Todos los campos son requeridos";
            break;
        }

        $sql = "INSERT INTO tienda (Tienda, idMunicipio, idMaquinita, Nombre, Direccion, Telefono) " . "VALUES ('$Tienda', '$idMunicipio', '$idMaquinita', '$Nombre', '$Direccion', '$Telefono')";
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Query invalido" . $connection->error;
            break;
        }

        $Tienda = "";
        $idMunicipio = "";
        $idMaquinita = "";
        $Nombre = "";
        $Direccion = "";
        $Telefono = "";

        $SuccessMessage = "Tienda agregada correctamente";

        header("location: index.php");
        exit;
    } while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tienda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Nueva tienda</h2>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tienda</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Tienda" value="<?php echo $Tienda; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">idMunicipio</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="idMunicipio" value="<?php echo $idMunicipio; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">idMaquinita</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="idMaquinita" value="<?php echo $idMunicipio; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nombre de persona</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Nombre" value="<?php echo $idMunicipio; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Direccion</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Direccion" value="<?php echo $idMunicipio; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Telefono</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Telefono" value="<?php echo $idMunicipio; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="juegossorteospwa/trabajadores/CRUD/index.php" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>