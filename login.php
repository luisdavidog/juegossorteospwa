<?php
  require('db.php');
  // When form submitted, check and create user session.
  $username = $_POST['usuario'];    // removes backslashes
  $password = md5($_POST['contra']);
  
      $query    = "SELECT * FROM `usuario` WHERE usuario='$username'
                   AND contra='$password'";
      $queryNombre    = "SELECT nombre FROM `usuario` WHERE usuario='$username'
                   AND contra='$password'";
      $queryTu    = "SELECT idTipoUsuario FROM `usuario` WHERE usuario='$username'
      AND contra='$password'";
      $result = mysqli_query($con, $query);
      $resultNombre = mysqli_query($con, $queryNombre);
      $resultTu = mysqli_query($con, $queryNombre);
      $rows = mysqli_num_rows($result);
      $string  = '';
      $tipousuario = '';
      while ($row = $result->fetch_assoc()) {
        $string .= $row['nombre'];
        $id = $row['id'];
      }    
      if ($rows == 1) {
        session_start();
          $_SESSION['usuario'] = $username;
          $_SESSION['nombre'] = $string;
          $_SESSION['idTipoUsuario'] = $resultTu;
          $_SESSION['id'] = $id;
        echo '<!doctype html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
          </head>
          <body>
          <di class="container-fluid">
        <div class="d-flex align-items-center p-5">
          <strong>Cargando...</strong>
          <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>
        </div>
          </body>
        </html>';
          // Redirect to user dashboard page
          header("refresh:2;url=trabajadores/Principal");
      } else {
          echo "<div class='form'>
                <h3>Incorrect Username/password.</h3><br/>
                <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                </div>";
      }
?>