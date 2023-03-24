<?php 
include_once('db.php');
   $id=$_GET['id'];

   $sql="delete from zapateria where id='".$id."'";
       $resultado=mysqli_query($conexion,$sql);

   if ($resultado) {
	echo "<script language='JavaScript'>
            alert('los datos se eliminaron correctamente');
               location.assign('home.php');
               </script>"; 
    }

 ?>