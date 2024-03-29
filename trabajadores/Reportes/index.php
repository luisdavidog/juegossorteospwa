<?php
//include auth_session.php file on all user panel pages
include("../../auth_session.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
  <form action="reporte.php" method="post" container p-5">
    <h1>Generar reporte</h1>
    <input type="hidden" name="id" value=<?php echo $_SESSION['id']; ?>>
  <div class="col-md-3 input-group mb-3">
    <label class="input-group-text" for="inputGroupFile01">Adjuntar imagen</label>
    <input name="file" type="file" class="form-control" id="inputGroupFile01">
  </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Nota:</label>
      <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> 
  <div class="col text-center">
    <input name="submit" type="submit" class="btn btn-warning btn-lg m-3" href="../Principal" role="button">Continuar</a>
  </div>
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.6.1.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    </html>