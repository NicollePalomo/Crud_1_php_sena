<!DOCTYPE html>
<html>
  <head>
    <title>Crear programa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link href="estilos.css" rel="stylesheet" />
  </head>
  <body>
    <div id="div1" class="container">
      <div clase="menu">
        <?php
     session_start();
     if(! empty($_SESSION['Tipo_usuario']))
     { ?>
        <?php 
    } 
    ?>
        <div class="menu-2">
          <?php
         if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
            {
            ?>
             <img src="procesos.png" class="img-fluid" />
          <form id="formulario" role="form" method="post" action="guardar_programa.php" class="container" >

            <div class="col-md-12 mt-3">
              <strong class="lgris">Ingrese los datos del programa</strong>
            </div>

            <div class="form-group col-md-12 mt-3">
              <label class="lgris">Numero de Ficha</label>
              <input
                class="form-control input-lg"
                type="number"
                name="numficha"
                min="9999"
                max="9999999999999"
                value=""
                placeholder="Numero de Ficha"
                required
              />
            </div>

            <div class="form-group col-md-12 mt-3">
              <label class="lgris">Nombre del programa</label>
              <input
                class="form-control"
                type="text"
                name="nombreprog"
                value=""
                placeholder="Nombre del programa"
                required
              />
            </div>
            <div class="form-group col-md-12 mt-3">
              <label class="lgris">Tipo de programa</label>
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
            </div>
            <input class="btn btn-primary mt-3 mb-3" type="submit" value="Guardar" />
            <input
              class="btn btn-primary mt-3 mb-3"
              type="button"
              value="Regresar"
              onclick="location.href ='menu.php'"
            />
          </form>
        </div>
      </div>

      <?php
    }
    else
    {
        echo "No tiene permisos para realizar esta acción";
    }
    ?>
      <br />
    </div>
  </body>
</html>
