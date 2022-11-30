<?php
if(isset($_GET["idTienda"])){
    $idTienda = $_GET["idTienda"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "juegossorteos2";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM tienda WHERE idTienda=$idTienda";
    $connection->query($sql);
}

header("location: /juegossorteospwa/trabajadores/CRUD/index.php");
exit;
?>