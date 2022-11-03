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
          <input type="text" class="form-control" id="UsuarioNombre" placeholder="Ingrese el nombre del usuario" name="UsuarioNombre">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control" id="App" placeholder="Ingrese apellido paterno" name="App">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Apellido Materno</label>
          <input type="text" class="form-control" id="Apm" placeholder="Ingrese apellido materno" name="Apm">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Numero de telefono</label>
          <input type="text" class="form-control" id="Telefono" placeholder="Ingrese su telefono" name="Telefono">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Tipo de usuario</label>
          <input type="text" class="form-control" id="TipoUsuarioID" placeholder="Tipo de usuario" name="TipoUsuarioID">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Municipio</label>
          <input type="text" class="form-control" id="MunicipioID" placeholder="Ingrese el id de municipio" name="MunicipioID">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" id="usuario" placeholder="Ingrese un nuevo nombre de usuario" name="usuario">
        </div>
        <div class="mb-3">
          <label for="text" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="contra" placeholder="Ingrese una nueva contraseña" name="contra">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php
            $conexion=mysqli_connect("localhost","root","","juegossorteos2") or die("No se encontro la conexion");
            mysqli_query($conexion,"INSERT INTO usuario(Nombre, App, Apm, Telefono, idTipoUsuario, idMunicipio, usuario, contra) 
            VALUES ('$_REQUEST[UsuarioNombre]', '$_REQUEST[App]', '$_REQUEST[Apm]', '$_REQUEST[Telefono]', '$_REQUEST[TipoUsuarioID]', '$_REQUEST[MunicipioID]', '$_REQUEST[usuario]', '$_REQUEST[contra]')")
            or die ("No se pudo registrar" . mysqli_error($conexion));
            mysqli_close($conexion);

            echo "Usuario registrado con exito";
 ?>  
  </body>
</html>