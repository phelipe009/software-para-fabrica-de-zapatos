<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPS Tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css">
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  </head>
  <body>
  <?php 
  include_once('db.php')
  ?>
  <?php 
  if (isset($_POST['enviar'])) {
      $id=$_POST['id'];
      $nombre=$_POST['nombre'];
      $documento=$_POST['documento'];
      $telefono=$_POST['telefono'];
      $valor=$_POST['valor'];
      $total=$_POST['total'];
      $detalle=$_POST['detalle'];
      $fecha=$_POST['fecha'];

      $sql="update zapateria set nombre='".$nombre."', documento='".$documento."', telefono='".$telefono."', valor='".$valor."',total='".$total."',detalle='".$detalle."', fecha='".$fecha."' where id='".$id."'";
      $resultado=mysqli_query($conexion,$sql);

      if ($resultado) { 
       echo "<script language='JavaScript'>
               alert('los datos se actualizaron correctamente');
               location.assign('home.php');
               </script>";
      }
      mysqli_close($conexion);
  }else{
       $id=$_GET['id'];
       $sql="select * from zapateria where id='".$id."'";
       $resultado=mysqli_query($conexion,$sql);

       $fila=mysqli_fetch_assoc($resultado);
       $nombre=$fila['nombre'];
       $documento=$fila['documento'];
       $telefono=$fila['telefono'];
       $valor=$fila['valor'];
       $total=$fila['total'];
       $detalle=$fila['detalle'];
       $fecha=$fila['fecha'];

    mysqli_close($conexion);
   ?>
   
    <script src="js/bootstrap.bundle.min.js"></script>
<main class="container">
    <div class="py-5 text-center">
      <h2> Atualizar Registro </h2>
    </div>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
  <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">ID</span>
      <input type="number" class="form-control" pattern="[0-9]+" id="id" placeholder="ID" aria-label="id" aria-describedby="basic-addon1" required="" name="id" value="<?php echo $id; ?>">
     </div>
      
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <input type="text" class="form-control" id="nombre" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+" required="" name="nombre" value="<?php echo $nombre; ?>">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Numero de documento </span>
      <input type="number" class="form-control" required="" id="documento" pattern="[0-9]+"  name="documento" value="<?php echo $documento; ?>">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Telefono</span>
      <input type="number" class="form-control" required="" id="telefono" pattern="[0-9]+" name="telefono" value="<?php echo $telefono; ?>">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Valor Cancelado</span>
      <input type="text" class="form-control" required="" id="valor" pattern="[0-9a-zA-ZÁÉÍÓÚáéíóúñ., ]+" name="valor" value="<?php echo $valor; ?>">
     </div>

     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Valor Total</span>
      <input type="number" class="form-control" required="" id="total" name="total" pattern="[0-9., ]+" value="<?php echo $total; ?>">
     </div>

     <div class="input-group">
      <span class="input-group-text">Detalles</span>
     <input class="form-control" required=""  id="detalle" type="text"  pattern="[a-zA-ZÁÉÍÓÚáéíóúñ.,0-9 ]+" name="detalle" value="<?php echo $detalle; ?>"></input>
    </div>
    <br>
    <div class="input-group mb-3">
      <span class="input-group-text" required="" id="basic-addon1">Fecha</span>
      <input type="date" class="form-control" id="fecha"  name="fecha" value="<?php echo $fecha; ?>">
     </div>
     
    <hr class="my-4">
    <button class="w-100 btn btn-primary btn-lg" name="enviar" type="submit">Actualizar Registro</button>
    <a href="home.php"> Regresar</a>
    <hr class="my-4">
</form>
<?php 
 }
?>
  
</main>
    
  </body>
</html>


