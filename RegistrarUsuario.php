<?php
    require('db.php');
    global $nombre;
    global $app;
    global $apm;
    global $telefono;
    global $tusuario;
    global $municipio;
    global $username;
    global $password;
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['usuario'])) {
      
        // removes backslashes
        $nombre = stripslashes($_REQUEST['nombre']);
        //escapes special characters in a string
        $nombre = mysqli_real_escape_string($con, $username);
        $app = stripslashes($_REQUEST['App']);
        $app = mysqli_real_escape_string($con, $app);
        $apm = stripslashes($_REQUEST['Apm']);
        $apm = mysqli_real_escape_string($con, $apm);
        $telefono = stripslashes($_REQUEST['Telefono']);
        $telefono = mysqli_real_escape_string($con, $telefono);
        $tusuario = stripslashes($_REQUEST['TipoUsuarioID']);
        $tusuario = mysqli_real_escape_string($con, $tusuario);
        $municipio = stripslashes($_REQUEST['MunicipioID']);
        $municipio = mysqli_real_escape_string($con, $municipio);
        $username = stripslashes($_REQUEST['usuario']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['contra']);
        $password = mysqli_real_escape_string($con, $password);
        //$create_datetime = date("Y-m-d H:i:s");
        try {
        $query    = "INSERT INTO usuario(nombre, App, Apm, Telefono, idTipoUsuario, idMunicipio, usuario, contra)
                     VALUES ('$_REQUEST[nombre]', '$_REQUEST[App]', '$_REQUEST[Apm]', '$_REQUEST[Telefono]', '$_REQUEST[TipoUsuarioID]', '$_REQUEST[MunicipioID]', '$_REQUEST[usuario]', md5('$_REQUEST[contra]'))";
        $result   = mysqli_query($con, $query);
      } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        echo '<script type ="text/JavaScript">';  
          echo 'alert("Error registro")';  
          echo '</script>';
          echo '<div class="fs-1">Reedirigiendo a registro...</div>'; 
          header("refresh:3;url=_regi5tr0");
    }
        if ($result) {
          echo '<script type ="text/JavaScript">';  
          echo 'alert("Registro Exitoso")';  
          echo '</script>';
          echo '<div class="fs-1">Reedirigiendo a inicio...</div>'; 
          header("refresh:3;url=index.php");

        } else {
            echo "<div class='form'>
                  <h3>Erro Registro</h3><br/>
                  <p class='link'><a href='_regi5tr0'>Registro</a></p>
                  </div>";
        } 
    } else {
      header("refresh:3;url=_regi5tr0");
    }
