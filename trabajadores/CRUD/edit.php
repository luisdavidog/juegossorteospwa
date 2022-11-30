<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "juegossorteos2";

$connection = new mysqli($servername, $username, $password, $database);

$idTienda = "";
$Tienda = "";
$idMunicipio = "";

$errorMessage = "";
$SuccessMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET["idTienda"])){
        header("location: /juegossorteospwa/trabajadores/CRUD/index.php");
        exit;
    }

    $idTienda = $_GET["idTienda"];

    $sql = "SELECT * FROM tienda WHERE idTienda=$idTienda";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: /juegossorteospwa/trabajadores/CRUD/index.php");
        exit;
    }

    $Tienda = $row["Tienda"];
    $idMunicipio = $row["idMunicipio"];
}
else{

    $Tienda = $_POST["Tienda"];
    $idMunicipio = $_POST["idMunicipio"];

    do{
        if(empty($idTienda) || empty($Tienda) || empty($idMunicipio)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE tienda " .
        "SET Tienda = '$Tienda', idMunicipio = '$idMunicipio' " .
        "WHERE idTienda = $idTienda";

        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $SuccessMessage = "Tienda agregada correctamente";

        header("location: /juegossorteospwa/trabajadores/CRUD/index.php");
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
        <h2>Modificar tienda</h2>
        
        <form method="post">
            <input type="hidden" value="<?php echo $idTienda; ?>">
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
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/juegossorteospwa/trabajadores/CRUD/index.php" role="button">Cancelar</a>
        </form>
    </div>
</body>
</html>