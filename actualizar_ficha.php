<?php
include('funciones.php');
session_start();
    $vnumficha=$_SESSION['fichas1'];
    $vnumeprograma=$_POST['numepragrama'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"update fichas set ficha_progra='{$vnumeprograma}'
 where ficha_numero='{$vnumficha}'");

if($resultado->mysqli_affected_rows>0);
{
   echo  "Actualizacion exitosa";
}
?>