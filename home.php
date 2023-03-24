<?php

include_once 'recursos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM zapateria";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fabrica de Zapatos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css">
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  </head>
  <body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom co container">
      <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="recursos/logo.svg" width="40" class="justify-content-center">
        <span class="fs-4">Fabrica de Zapatos</span>
        
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#consultafiltro" class="nav-link active" aria-current="page">Consulta</a></li>
        <li class="nav-item"><a href="registro.php" class="nav-link" id="regmodal">Registro</a></li>
        <li class="nav-item"><a href="cerrar.php" class="nav-link" id="regmodal">Cerrar Seccion</a></li>
      </ul>
      
      
    </header>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    function confirmar(){
      var respuesta = confirm('¿ Seguro que Deseas ELIMINAR este Registro?');
      if (respuesta==true) {
               return true;
      }else{
               return false;
      }
    }
    </script>
    <script type="text/javascript">
    function confirmar1(){
      var respuesta = confirm('¿ Seguro que Deseas ACTUALIZAR este Registro?');
      if (respuesta==true) {
               return true;
      }else{
               return false;
      }
    }
    </script>

  <div class="container marketing">
    <br>
    <div class="row">
      <div class="col-lg-4">
          <img src="recursos/img/bien.svg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <br>
        <h2 class="fw-normal">Consultas</h2>
        <p>En esta Área Se Presentaran los registros más recientes y se pueden hacer búsquedas especificas   </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="recursos/img/buscar.svg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <br>
        <h2 class="fw-normal">Consultas Avanzadas </h2>
        <p>Se puede Filtrar y auto seleccionar los registro, siendo buscados por numero de documento del cliente </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="recursos/img/registrar.svg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <br>
        <h2 class="fw-normal">Agregar Registros</h2>
        <p>Inscribir nuevos registros </p>
        <p><a class="btn btn-secondary" href="registro.php">Registra aqui &raquo;</a></p>
      </div>
    </div>


    <hr id="consultafiltro" class="featurette-divider">

    <table id="eps" class="table table-striped" style="width:100%">
      <thead class="text-center">
        <th>Id</th>
        <th>Nombre</th>
        <th>Documento</th>
        <th>Telefono</th>
        <th>Valor Cancelado</th>
        <th>Valor Total</th>
        <th>Detalle</th>
        <th>Fecha</th>
        <th>Acciones</th><br><br><br>


        
      </thead>
      <tbody>
        <?php
            foreach($usuarios as $usuario){
        ?>
        <tr>
            <td><?php echo $usuario['id']?></td>
            <td><?php echo $usuario['nombre']?></td>
            <td><?php echo $usuario['documento']?></td>
            <td><?php echo $usuario['telefono']?></td>
            <td><?php echo $usuario['valor']?></td>
            <td><?php echo $usuario['total']?></td>
            <td><?php echo $usuario['detalle']?></td>
            <td><?php echo $usuario['fecha']?></td>
            <td>
              <?php echo "<a class='btn btn-success' onclick='return confirmar1()'' href='editar.php?id=".$usuario['id']."'> actualizar </a>";?>
              
              <?php echo "<a class='btn btn-danger' onclick='return confirmar()' href='eliminar.php?id=".$usuario['id']."'  > eliminar  </a>";?>
            </td>
            


        </tr>
        <?php
           }
        ?>
      </tbody>
    </table>
    <br>
    <br>
    <br>
  </div>



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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script src="https://cdn.datatables.net/searchpanes/1.0.1/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>  
    <script src="js/scriptdt.js"></script>
    </script>


  </body>
</html>


