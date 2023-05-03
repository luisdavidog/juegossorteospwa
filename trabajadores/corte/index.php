<?php
require('../../db.php');
include("../../auth_session.php");
include("../../navbar.php");
$idMaquinita = $_POST['maquinita'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corte</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container p-5">
    <h2 class="fw-bolder text-uppercase mb-3">Corte</h2>

    <hr class="border border-primary border-2 opacity-50">

    <form action="carga-corte.php" method="post" name="f">

      <div class="input-group mb-3">
        <span class="input-group-text fw-semibold" id="basic-addon1">Numero de Maquinita</span>
          <input type="text" class="form-control" name="idMaquinita" value="<?php echo $idMaquinita; ?>" readonly>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="retira-fondo" id="retira-fondo" value="1">
        <label class="form-check-label text-capitalize fw-semibold" for="retira-fondo">
          Retirar fondo
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="limpieza" id="limpieza" value="1">
        <label class="form-check-label text-capitalize fw-semibold" for="limpieza">
          Limpieza
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="deja-credito" id="deja-credito" value="1">
        <label class="form-check-label text-capitalize fw-semibold" for="deja-credito">
          Dejar credito
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="resetea-maquina" id="resetea-maquina" value="1">
        <label class="form-check-label text-capitalize fw-semibold" for="resetea-maquina">
          Resetea maquina
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="revisa-funcionamiento" id="revisa-funcionamiento" value="1">
        <label class="form-check-label text-capitalize fw-semibold" for="revisa-funcionamiento">
          Revisar funcionamiento
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cerraduras" id="cerraduras" value="1">
        <label class="form-check-label text-capitalize fw-semibold" for="cerraduras">
          Cerraduras
        </label>
      </div>

      <hr class="border border-primary border-2 opacity-50">

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="check" onchange="mostrarInput()">
        <label class="form-check-label text-capitalize fw-semibold" for="check">
          ¿Hay algún fallo no reportado?
        </label>
      </div>


      <div id="input-adicional" style="display:none;">

        <select name="fallo" class="form-select form-select mb-3 fw-semibold" aria-label=".form-select example">
          <option selected>Seleccione el tipo de error</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="3">4</option>
          <option value="4">Siguientes opciones......</option>
        </select>


        <div class="col-md-3 input-group mb-3">
          <label class="input-group-text fw-semibold" for="inputGroupFile01">Adjuntar</label>
          <input name="prueba_fallo" type="file" class="form-control fw-semibold" id="inputGroupFile01">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Nota:</label>
          <textarea name="comentario_fallo" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>

      <hr class="border border-primary border-2 opacity-50">

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="check2" onchange="mostrarInput2()">
        <label class="form-check-label text-capitalize fw-semibold" for="check2">
          ¿Hay piezas dañadas?
        </label>
      </div>

      <div id="input-adicional2" style="display:none;" class="mb-5">

        <select name="pieza" class="form-select form-select mb-3" aria-label=".form-select example2">
          <option selected>Seleccione la pieza que se encuentra dañada</option>
          <option value="1">Acrílicos</option>
          <option value="2">Botones</option>
          <option value="3">Monedero</option>
          <option value="3">Pantalla</option>
          <option value="4">Siguientes opciones......</option>
        </select>
      </div>

      <hr class="border border-primary border-2 opacity-50">

      <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label fw-semibold">Reporte:</label>
        <textarea name="comentario_pieza" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
      </div>
      <hr class="border border-primary border-2 opacity-50">

      <div class="fs-6 fw-semibold">Selecciona el formato de repartición:</div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value=".60">
        <label class="form-check-label fw-semibold" for="flexRadioDefault1">
          60-40
        </label>
      </div>
      <div class="form-check mb-4">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value=".50" checked>
        <label class="form-check-label fw-semibold" for="flexRadioDefault2">
          50-50
        </label>
      </div>

      <div class="mb-4">
        <label for="gramostotales" class="form-label fw-semibold">Ingrese los gramos totales</label>
        <input type="number" name="gramostotales" id="gramostotales" value="0"/>
      </div>

      <div class="mb-4">
        <label for="gramosclientes" class="form-label fw-semibold">Gramos correspondientes a clientes</label>
        <input type="number" name="gramosclientes" id="gramosclientes" value="0" readonly="readonly" />
      </div>

      <div class="mb-4">
        <label for="gramosingresos" class="form-label fw-semibold">Gramos de ingreso</label>
        <input type="number" name="gramosingreso" id="gramosingresos" value="0" readonly="readonly" />
      </div>

      <div class="mb-4">
        <label for="pesostotales" class="form-label fw-semibold">Pesos totales</label>
        <input type="number" name="pesostotales" id="pesostotales" value="0" readonly="readonly" />
      </div>

      <div class="mb-4">
        <label for="pesosclientes" class="form-label fw-semibold">Total de pesos para clientes</label>
        <input type="number" name="pesosclientes" id="pesosclientes" value="0" readonly="readonly" />
      </div>

      <div class="mb-4">
        <label for="ingresopesos" class="form-label fw-semibold">Total de ingreso de pesos</label>
        <input type="number" name="ingresopesos" id="ingresopesos" value="0" readonly="readonly" />
      </div>

      <div class="col-md-3 input-group mb-3">
        <label class="input-group-text fw-semibold" for="inputGroupFile01">Adjunte foto de kilometraje</label>
        <input name="kilometraje" type="file" class="form-control" id="inputGroupFile01">
      </div>

      <div class="col-md-3 input-group mb-3">
        <label class="input-group-text fw-semibold" for="inputGroupFile02">Adjunte foto del estado del vehículo</label>
        <input name="vehiculo" type="file" class="form-control" id="inputGroupFile02">
      </div>

      <div class="offset-sm-3 col-sm-3 d-grid">
        <input name="submit" type="submit" value="ENVIAR" class="btn btn-primary mt-3">
      </div>

    </div>
  </form>

  <script>
      const radios = document.getElementsByName("flexRadioDefault");
      const gtotales = document.getElementById("gramostotales");
      const gclientes = document.getElementById("gramosclientes");
      const gingresos = document.getElementById("gramosingresos");
      const ptotales = document.getElementById("pesostotales");
      const pclientes = document.getElementById("pesosclientes");
      const pingresos = document.getElementById("ingresopesos");

      radios.forEach((radio) => {
        radio.addEventListener("change", () => {
          if (radio.checked) {
            const valorSeleccionado = parseInt(radio.value);
            const valorRestante = 1 - valorSeleccionado;
            cal();
          }
        });
      });

    
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

    gtotales.addEventListener('input', () => {
      cal();
    });

    function cal() {
      const valorSeleccionado = parseFloat(document.querySelector('input[name="flexRadioDefault"]:checked').value);
      const valorRestante = 1 - valorSeleccionado;
      const valorgtotales = parseFloat(gtotales.value);

      gclientes.value = valorgtotales * valorRestante;
      gingresos.value = valorgtotales * valorSeleccionado;
      ptotales.value = valorgtotales / 4;
      pclientes.value = (valorgtotales / 4) * valorRestante;
      pingresos.value = (valorgtotales / 4) * valorSeleccionado;



      /*
      try {
        var a = parseInt(document.f.gramostotales.value);
        document.f.gramosclientes.value = a * valorRestante;
      } catch (e) {}

      try {
        var a = parseInt(document.f.gramostotales.value);
        document.f.gramosingreso.value = a * valorSeleccionado;
      } catch (e) {}

      try {
        var a = parseInt(document.f.gramostotales.value);
        document.f.pesostotales.value = a / 4;
      } catch (e) {}

      try {
        var a = parseInt(document.f.gramostotales.value);
        document.f.pesosclientes.value = (a / 4) * valorRestante;
      } catch (e) {}

      try {
        var a = parseInt(document.f.gramostotales.value);
        document.f.ingresopesos.value = (a / 4) * valorSeleccionado;
      } catch (e) {}*/
    }
  </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>