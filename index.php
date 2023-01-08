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

    <form action="login.php" class="form-floating mb-2" method="post" name="login">
        <h1 id="login-title">Login</h1>
        <center><img src="assets/Password_Flatline.svg" alt="" srcset=""></center>
        <input type="text" id="login-input" name="usuario" class="form-control" placeholder="Usuario" autofocus="true"/>
        <input type="password" id="login-input" name="contra" class="form-control" placeholder="Contraseña"/>
        <input type="submit" value="inicio" name="submit" id="login-button" class="btn btn-primary"/>
  </form>

</body>
</html>