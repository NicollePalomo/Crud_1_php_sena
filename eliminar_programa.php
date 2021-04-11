<!doctype html>
<html>
    <head>
    <title>Eliminación de Programas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
    <div id="divconsulta" class="container">
        <br>
        <div id="div2">
        <div id="div4" >
        <form name="formulario" role="form" method="post">
        <div class="col-md-12">
        <strong class="lgris">Ingrese criterio de busqueda</strong>
        <br> <br>
        <div class="form-row">
        <div class="form-group col-md-5">
        <input class="form-control" type="number" name="numficha" min="9999" max="9999999999999" value="" placeholder="N° FICHA" />
        </div>
        <div class="form-group col-md-3">
        <input class="btn btn-primary" type="submit" value="Eliminar" >
        </div> 
        </div>
        <br>
    </div> 
         </form>
          <br>
</div>


<div id="divconsulta2">
<?php
if ($_SERVER['REQUEST_METHOD']==='POST')
{
    include('funciones.php');
    $vnumficha=$_POST['numficha'];
    $miconexion=conectar_bd('', 'sena_bd');
    $resultado=consulta($miconexion,"select * from programa where progra_id='{$vnumficha}'");
    $resultado2=consulta($miconexion,"delete from programa where progra_id='{$vnumficha}'");
    if($resultado->num_rows>0)
{
    $fila = $resultado->fetch_object();
    echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo." <br>";
    
    if($resultado2) echo "<br> Datos borrados exitosamente";
}
    else{
        echo "No existen registros";
    }
    $miconexion->close();
}?>
</div>
 </div> 
 </div> 
 </body> 
 </html>