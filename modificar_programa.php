<!doctype html>
<html>
<head>
<title>Modificación datos del Programa</title>
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
    <input class="form-control" type="number" name="numficha" min="9999" max="9999999999999" autofocus value="" placeholder="N° Ficha" />
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
    $vnumficha=$_POST['numficha'];
    $miconexion=conectar_bd('', 'sena_bd');
    $resultado=consulta($miconexion,"select * from programa where progra_id='{$vnumficha}'");
    if($resultado->num_rows>0)
    {
        $fila = $resultado->fetch_object();
        $_SESSION['numerficha1']=$fila->apre_id;
        ?>
        <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
        <div class="col-md-12">
        <strong class="lgris">Datos del Programa</strong><br>
        <label class="lgris">Id del Programa:</label>
        <input class="form-control" type="number" name="numerficha" disabled="disabled" value="<?php echo $fila->progra_id ?>"/>
        <label class="lgris">Nombre del Programa:</label>
        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombreprog" required value="<?php echo $fila->progra_nombre ?>"/>
        <label class="lgris">Apellidos:</label>
        <input class="form-control" style="text-transform: uppercase;" type="number" name="tipojornada" value="<?php echo $fila->progra_tipo ?>" required/>
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
