<!doctype html>
<html>
<head>
    <title>Registro de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head> 
<body>
     
     <div id="div1" class="container">
     <br>
     <div id="div2">
     <?php
     session_start();
     if(! empty($_SESSION['Tipo_usuario']))
     { ?> <img src="Captura.png">
     <?php 
    } 
    ?>
    <div id="div3" >
    <?php
    if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
    {
    ?>
    <form id="formulario" role="form" method="post" action="guardar_ficha.php">
    <div class="col-md-12">
    <strong class="lgris">Creacion de Fichas:</strong>
    <br>
    </div>
    <label class="lgris">Ficha:</label>
    <input class="form-control" type="number" name="fichas" min="9999" max="9999999999999" value="" placeholder="FICHA" required/>
    <br>
    <label class="lgris">Programa de la ficha:</label>
    <input class="form-control" type="number" name="numepragrama" min="1" max="10" value="" placeholder="Numero del Programa" required/>
    <br>
    <input class="btn btn-primary" type="submit" value="Guardar" >
    </div>
    </form>
    <?php
    }
    else
    {
        echo "No tiene permisos para realizar esta acción";
    }
    ?>
    <br>
    </div>
    </div>
    </div>
    </body>
    </html>