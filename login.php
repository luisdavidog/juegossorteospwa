<?php
  require('db.php');
  session_start();
   
  if (isset($_POST['usuario'])) {
    $username = stripslashes($_REQUEST['usuario']);    // removes backslashes
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['contra']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `usuario` WHERE usuario='$username'
                 AND contra='" . md5($password) . "'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
   
  // Verificando si el usuario existe en la base de datos.
  if($rows == 1){
    // Guardo en la sesión el email del usuario.
    $_SESSION['usuario'] = $username;
     
    // Redirecciono al usuario a la página principal del sitio.
    echo '<script type ="text/JavaScript">';  
          echo 'alert("Login Exitoso")';  
          echo '</script>';
          echo '<div class="fs-1">Reedirigiendo...</div>';
    header("refresh:3;url=trabajadores/Principal");
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
}
?>