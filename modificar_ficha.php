<!doctype html>
<html>
<head>
<title>Modificación datos de la Ficha</title>
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
    <input class="form-control" type="number" name="fichas" min="9999" max="9999999999999" autofocus value="" placeholder="N° Ficha" />
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
    session_start();
    $vnumficha=$_POST['fichas'];
    $miconexion=conectar_bd('', 'sena_bd');
    $resultado=consulta($miconexion,"select * from programa where progra_id='{$vnumficha}'");
    if($resultado->num_rows>0)
    {
        $fila = $resultado->fetch_object();
        $_SESSION['fichas1']=$fila->ficha_numero;
        ?>
        <form id="formulario2" role="form" method="post" action="actualizar_ficha.php">
        <div class="col-md-12">
        <strong class="lgris">Datos de la Ficha</strong><br>
        <label class="lgris">Id de la Ficha:</label>
        <input class="form-control" type="number" name="fichas" disabled="disabled" value="<?php echo $fila->ficha_numero ?>"/>
        <label class="lgris">Ficha del Programa:</label>
        <input class="form-control" type="number" name="numepragrama" required value="<?php echo $fila->ficha_progra ?>"/>
        <br>
        <input class="btn btn-primary" type="submit" value="Actualizar" >
        <br>
        </div>
        </form>
        <?php
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
