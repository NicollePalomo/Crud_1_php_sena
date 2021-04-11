<?php
include('funciones.php');
  session_start();
  $vnumfichas=$_POST['fichas'];
  $vnumeprograma=$_POST['numepragrama'];

 $miconexion=conectar_bd('', 'sena_bd');
 $resultado=consulta($miconexion,"insert into fichas (ficha_numero,ficha_progra) 
 values
 ('{$vnumfichas}','{$vnumeprograma}') " );

 if ($resultado)
  {
  echo"Guardado exitoso";
  }
?>