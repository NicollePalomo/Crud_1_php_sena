<?php
include('funciones.php');
session_start();
$vnumfichas=$_POST['fichas'];
$vnumeprograma=$_POST['numepragrama'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"update programa set ficha_numero='{$vnumfichas}',ficha_progra='
{$vnumeprograma}' where ficha_numero='{$vnumficha}'");

if($resultado->mysqli_affected_rows>0);
{
   echo  "Actualizacion exitosa";
}
?>