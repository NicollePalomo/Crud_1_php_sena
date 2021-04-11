<!doctype html>
<html>
<head>
    <title>Crear programa</title>
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
    <form id="formulario" role="form" method="post" action="guardar_programa.php">
    <div class="col-md-12">
    <strong class="lgris">Ingrese los datos del programa:</strong>
    <br>
    <label class="lgris">Numero de Ficha:</label>
    </div>
    <div class="form-group col-md-6">
    <input class="form-control input-lg" type="number" name="numficha" min="9999" max="9999999999999" value="" placeholder="Numero de Ficha" required/>
    </div>
    </div>
    <label class="lgris">Nombre del programa:</label>
    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombreprog" value="" placeholder="Nombre del programa" required/>
    <br>
    <label class="lgris">Tipo de programa:</label>
    <select class="form-control" type="number" name="tipojornada">
    <option value="1" selected>1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    </select>
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
