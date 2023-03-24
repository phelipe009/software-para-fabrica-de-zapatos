

<?php
include_once 'recursos/conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM zapateria";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
    include("conexion.php");
    $conexion=conectar();?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title > Fabrica de Zapatos</title>
    <link rel="icon" href="recursos/logo.ico">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css">
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  </head>
  <body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom container">
      <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="recursos/logo.svg" width="40" class="justify-content-center">
        <span class="fs-4">Fabrica de Zapatos</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="home.php" class="nav-link">Consulta</a></li>
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" id="regmodal">Registro</a></li>
       
      </ul>
    </header>
    <script src="js/bootstrap.bundle.min.js"></script>


<main class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="recursos/logo.svg" alt="" width="72" height="57">
      <h2>Inscribir Nuevos Registros</h2>
      <p class="lead">Por favor para registrar llenar todos los campos del siguiente formulario</p>
    </div>
<form action="agregar.php" method="POST">
      
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">ID</span>
      <input type="number" class="form-control" id="id" required="" placeholder="ID" aria-label="id" aria-describedby="basic-addon1" name="id">
     </div>
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <input type="text" class="form-control" id="nombre" required="" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+" placeholder="Nombre" aria-label="nombre" aria-describedby="basic-addon1" name="nombre">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Numero de documento </span>
      <input type="number" class="form-control" id="documento" required="" pattern="[0-9]+" placeholder="Numero de documento" aria-label="documento" aria-describedby="basic-addon1" name="documento">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Telefono</span>
      <input type="number" class="form-control" required="" id="telefono" pattern="[0-9]+" placeholder="Telefono" aria-label="telefono" aria-describedby="basic-addon1" name="telefono">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Valor Cancelado</span>
      <input type="text" class="form-control" id="valor" pattern="[0-9a-zA-ZÁÉÍÓÚáéíóúñ., ]+" required="" placeholder=" Valor Cancelado" aria-label="valor" aria-describedby="basic-addon1" name="valor">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Valor Total</span>
      <input type="number" class="form-control" required="" id="total" placeholder="Valor Total" aria-label="total" aria-describedby="basic-addon1" name="total">
     </div>

     <div class="input-group">
      <span class="input-group-text">Detalles</span>
     <input class="form-control" required="" id="detalle" pattern="[0-9a-zA-ZÁÉÍÓÚáéíóúñ., ]+"  aria-label="Descripcion corta del producto" name="detalle"></input>
    </div>
    <br>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Fecha</span>
      <input type="date" class="form-control" required="" id="fecha" placeholder="YYYY-MM-DD" aria-label="fecha" aria-describedby="basic-addon1" name="fecha">
     </div>
     
    <hr class="my-4">
    <button class="w-100 btn btn-primary btn-lg" type="submit">Subir registro</button>
    <hr class="my-4">
</form>

    </form>
      </div>
    </div>
  </main>

  </div>
   <br>
   

  <footer class="container">
    <?php 
       include_once('footer.php')
     ?>
  </footer>
</main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/scriptdt.js"></script>
    </script>
  </body>
</html>


