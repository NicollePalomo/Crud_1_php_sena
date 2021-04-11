<!doctype html>
<html>
 <head>
 <title>Consultar Programas</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 </head>
 <body>
  <div id="divconsulta" class="container">
    <br>
    <div id="div2">
       <div id="div4">
            <form name="formulario" role="form" method="post">
            <div class="col-md-12">
            <strong class="lgris">Consulta de Fichas</strong>
            <br> <br>
            <div class="form-row">
            <div class="form-group col-md-3">
            <label class="lgris">Numero de la Ficha:</label>
            <input class="form-control" type="number" name="numficha" min="9999" max="9999999999999" value="" placeholder="N° FICHA" />
            </div>
            <br>
            <div class="form-group col-md-3">
            <label class="lgris">Numero del programa:</label>
            <input class="form-control" type="number" name="numepragrama" min="0" max="10" value="" placeholder="N° del programa" />
            </div>
            <div class="form-group col-md-3">
            <input class="btn btn-primary" type="submit" value="Consultar" >
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
    $vnumfichas=$_POST['fichas'];
    $vnumeprograma=$_POST['numepragrama'];
    $miconexion=conectar_bd('', 'sena_bd');
    $resultado=consulta($miconexion,"select * from fichas where trim(ficha_numero) like '%{$vnumfichas}%' and (trim(ficha_progra) like '%{$vnumeprograma}%'
    )");
    if($resultado->num_rows>0)
    {
        while ($fila = $resultado->fetch_object())
        {
            echo $fila->ficha_numero." ".$fila->ficha_progra." <br>";
        }
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