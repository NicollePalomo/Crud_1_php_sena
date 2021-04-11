<?php
include('funciones.php');
  session_start();
  $vnumficha=$_POST['numficha'];
  $vnombreprog=$_POST['nombreprog'];
  $vtipojornada=$_POST['tipojornada'];

 $miconexion=conectar_bd('', 'sena_bd');
 $resultado=consulta($miconexion,"insert into programa (progra_id,progra_nombre,progra_tipo) 
 values
 ('{$vnumficha}','{$vnombreprog}','{$vtipojornada}') " );

 if ($resultado)
  {
  echo"Guardado exitoso";
  }
?>