<?php
//include auth_session.php file on all user panel pages
include("../../auth_session.php");
require('../../db.php');
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <form action="carga-corte.php" method="post" class="container p-5">
    <h1>Iniciar Corte</h1>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Numero de Maquinita</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="idMaquinita">
        </div>
      </div>

    <label class="container mt-3 mb-3">Retirar fondo
      <input id="retira-fondo" name="retira-fondo" type="checkbox" value=1>
      <span class="checkmark"></span>
    </label>

    <label class="container mt-3 mb-3">Limpieza
      <input id="limpieza" name="limpieza" type="checkbox" value=1>
      <span class="checkmark"></span>
    </label>

    <label class="container mt-3 mb-3">Dejar credito
      <input id="deja-credito" name="deja-credito" type="checkbox" value=1>
      <span class="checkmark"></span>
    </label>

    <label class="container mt-3 mb-3">Resetear maquina
      <input id="resetea-maquina" name="resetea-maquina" type="checkbox" value=1>
      <span class="checkmark"></span>
    </label>

    <label class="container mt-3 mb-3">Revisar funcionamiento
      <input id="revisa-funcionamiento" name="revisa-funcionamiento" type="checkbox"value=1>
      <span class="checkmark"></span>
    </label>

    <label class="container mt-3 mb-3">Cerraduras
      <input id="cerraduras" name="cerraduras" type="checkbox" value=1>
      <span class="checkmark"></span>
    </label>

    <label class="container mt-3 mb-3" for="check">Hay algun fallo no reportado?
      <input type="checkbox" id="check" onchange="mostrarInput()">
    </label>

    <div id="input-adicional" style="display:none;">

      <select name="fallo" class="form-select form-select mb-3" aria-label=".form-select example">
        <option selected>Seleccione el tipo de error</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="3">4</option>
        <option value="4">Siguientes opciones......</option>
      </select>


      <div class="col-md-3 input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Adjuntar</label>
        <input name="prueba_fallo" type="file" class="form-control" id="inputGroupFile01">
      </div>
      
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nota:</label>
        <textarea name="comentario_fallo" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>

    <label class="container mt-3 mb-3" for="check2">Hay piezas dañadas?
      <input type="checkbox" id="check2" onchange="mostrarInput2()">
    </label>

    <div id="input-adicional2" style="display:none;" class="mb-5">

      <select name="pieza" class="form-select form-select mb-3" aria-label=".form-select example2">
        <option selected>Seleccione la pieza que se encuentra dañada</option>
        <option value="1">Acrílicos</option>
        <option value="2">Botones</option>
        <option value="3">Monedero</option>
        <option value="3">Pantalla</option>
        <option value="4">Siguientes opciones......</option>
      </select>

      <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label">Nota:</label>
        <textarea name="comentario_pieza" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
      </div>

    </div>

    <div class="offset-sm-3 col-sm-3 d-grid">
    <input name="submit" type="submit" value="ENVIAR" class="btn btn-primary mt-3">
    </div>
  </form>
  <script>

    function mostrarInput() {
      var checkbox = document.getElementById("check");
      var inputAdicional = document.getElementById("input-adicional");

      if (checkbox.checked) {
        inputAdicional.style.display = "block";
      } else {
        inputAdicional.style.display = "none";
      }
    }

    function mostrarInput2() {
      var checkbox = document.getElementById("check2");
      var inputAdicional = document.getElementById("input-adicional2");

      if (checkbox.checked) {
        inputAdicional.style.display = "block";
      } else {
        inputAdicional.style.display = "none";
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>

</html>