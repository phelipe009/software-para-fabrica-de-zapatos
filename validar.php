<?php

   $conexion=mysqli_connect("127.0.0.1:33065","root","","eps_db")or die(
    "error de conexion");
?>
<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];



$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
  session_start();
  $_SESSION['cliente'] = $usuario;
  header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>