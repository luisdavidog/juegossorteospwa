<?php
  require('db.php');
  // When form submitted, check and create user session.
  $username = $_POST['usuario'];    // removes backslashes
  $password = md5($_POST['contra']);
  echo $usuario;
  echo $contra;
      $query    = "SELECT * FROM `usuario` WHERE usuario='$username'
                   AND contra='$password'";
      $result = mysqli_query($con, $query);
      $rows = mysqli_num_rows($result);
      if ($rows == 1) {
        session_start();
          $_SESSION['usuario'] = $username;
          echo '<script type ="text/JavaScript">';  
        echo 'alert("Login Exitoso")';  
        echo '</script>';
        echo '<div class="fs-1">Reedirigiendo...</div>';
          // Redirect to user dashboard page
          header("refresh:2;url=trabajadores/Principal");
      } else {
          echo "<div class='form'>
                <h3>Incorrect Username/password.</h3><br/>
                <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                </div>";
      }
?>