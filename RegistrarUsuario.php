<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Municipio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center m-5">
        <p class="display-3">
            Registrar Nuevo Usuario
        </p>
    </div>
    <div class="container">
    <form action="RegistrarUsuario.php" method="post">
        <div class="mb-3">
          <label for="text" class="form-label">UsuarioNombre</label>
          <input type="text" class="form-control" id="Usuario1" placeholder="Ingrese el nombre del usuario" name="Nombre">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control" id="App1" placeholder="Ingrese apellido paterno" name="App">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Apellido Materno</label>
          <input type="text" class="form-control" id="Apm1" placeholder="Ingrese apellido materno" name="Apm">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Numero de telefono</label>
          <input type="text" class="form-control" id="tel1" placeholder="Ingrese su telefono" name="Tel">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Tipo de usuario</label>
          <input type="text" class="form-control" id="TipoUser1" placeholder="Tipo de usuario" name="TipoUser">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Municipio</label>
          <input type="text" class="form-control" id="municipio1" placeholder="Ingrese el id de municipio" name="Municipio">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" id="nomUsuario1" placeholder="Ingrese un nuevo nombre de usuario" name="nomUsuario">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="contra1" placeholder="Ingrese una nueva contraseña" name="contra">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php
            $conexion=mysqli_connect("localhost","root","","juegossorteos") or die("No se encontro la conexion");
            mysqli_query($conexion,"INSERT INTO usuario(Nombre), usuario(App), usuario(Apm), usuario(Telefono), usuario(idTipoUsuario), usuario(idMunicipio), usuario(usuario), usuario(contra) 
            VALUES ('$_REQUEST[Nombre]', '$_REQUEST[App]', '$_REQUEST[Apm]', '$_REQUEST[Tel]', '$_REQUEST[TipoUser]', '$_REQUEST[Municipio]', '$_REQUEST[nomUsuario]', '$_REQUEST[contra]')")
            or die ("No se pudo registrar" . mysqli_error($conexion));
            mysqli_close($conexion);

            echo "Usuario registrado con exito";
 ?>  
  </body>
</html>