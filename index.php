<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="login.php" class="form-floating mb-2" method="post" name="login">
        <img src="assets/Slotmachine_Isometric.png" alt="" srcset="" class="rounded mx-auto d-block img-fluid">

        <div class="mb-3">
        <label for="floatingInput">Correo electrónico</label>
        <input name="usuario" type="email" class="form-control" id="floatingInput">
        </div>

        <div class="mb-3">
        <label for="floatingPassword">Contraseña</label>
        <input name="contra" type="password" class="form-control" id="floatingPassword">
        </div>

        <div class="offset-sm-3 col-sm-3 d-grid">
        <input type="submit" value="Inicio" name="submit" class="btn btn-primary"/>
        </div>
  </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>