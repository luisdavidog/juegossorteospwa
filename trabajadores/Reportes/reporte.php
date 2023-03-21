<?php
  require('../../db.php');

  $documento = $_POST['file'];
  $comentario = $_POST['comentario'];
  $id = $_POST['id'];

  if (isset($_POST['submit'])) {
    $sql = "INSERT INTO reportes (documento, comentario, idUsuario) VALUES ('$documento', '$comentario', '$id')";

    if (mysqli_query($con, $sql)) {
      echo "El comentario fue guardado exitosamente.";
      echo '<script type ="text/JavaScript">';  
        echo 'alert("Login Exitoso")';  
        echo '</script>';
        echo '<div class="fs-1">Reedirigiendo...</div>';
          // Redirect to user dashboard page
          header("refresh:2;url=index.php");
    } else {
      echo "Hubo un error al guardar el comentario: ";
      echo '<script type ="text/JavaScript">';  
        echo 'alert("Error, ingresa información de nuevo...")';  
        echo '</script>';
        echo '<div class="fs-1">Reedirigiendo...</div>';
          // Redirect to user dashboard page
          header("refresh:2;url=index.php");
    }
  }