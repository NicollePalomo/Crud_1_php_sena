<?php
include('funciones.php');
session_start();
$vnumerficha=$_SESSION['numerficha1'];
$vnombreprog=$_POST['nombreprog'];
$vtipojornada=$_POST['tipojornada'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"update programa set progra_nombre='{$vnombreprog}',progra_tipo='
{$vtipojornada}' where progra_id='{$vnumerficha}'");

if($resultado->mysqli_affected_rows>0);
{
   echo  "Actualizacion exitosa";
}
?>