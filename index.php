<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    $username = stripslashes($_REQUEST['usuario']);    // removes backslashes
    $username = mysqli_real_escape_string($con, $username);
    $password = md5($_REQUEST['contra']);
    $password = mysqli_real_escape_string($con, $password);

    if (isset($_POST['usuario'])) {
        // Check user is exist in the database
        $query    = "SELECT * FROM `usuario` WHERE usuario='$username'
                     AND contra='$password'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
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
    } else {
?>
    <form class="form-floating mb-2" method="post" name="login">
        <h1 id="login-title">Login</h1>
        <center><img src="assets/Password_Flatline.svg" alt="" srcset=""></center>
        <input type="text" id="login-input" name="usuario" class="form-control" placeholder="Usuario" autofocus="true"/>
        <input type="password" id="login-input" name="contra" class="form-control" placeholder="Contraseña"/>
        <input type="submit" value="inicio" name="submit" id="login-button" class="btn btn-primary"/>
  </form>
<?php
    }
?>
</body>
</html>