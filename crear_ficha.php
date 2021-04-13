<!DOCTYPE html>
<html>
  <head>
    <title>Registro de Aprendices</title>
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
      <div id="menu">
        <?php
     session_start();
     if(! empty($_SESSION['Tipo_usuario']))
     { ?>
        <?php 
    } 
    ?>
        <div class="menu-2">
          <img src="procesos.png" class="img-fluid" />
          <?php
            if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
            {
          ?>
          <form
            id="formulario"
            role="form"
            method="post"
            action="guardar_ficha.php"
            class="container"
          >
            <div class="col-md-12 mt-3">
              <strong class="lgris">Creacion de Fichas</strong>
            </div>

            <div class="col-md-12 mt-3">
              <label class="lgris">Ficha:</label>
              <input
                class="form-control"
                type="number"
                name="fichas"
                min="9999"
                max="9999999999999"
                value=""
                placeholder="FICHA"
                required
              />
            </div>

            <div class="col-md-12 mt-3">
              <label class="lgris">Programa de la ficha:</label>
              <input
                class="form-control"
                type="number"
                name="numepragrama"
                min="1"
                max="10"
                value=""
                placeholder="Numero del Programa"
                required
              />
            </div>
            <div class="col-md-12 mt-3">
              <input class="btn btn-primary" type="submit" value="Guardar" />
            </div>
          </form>
        </div>

        <?php
    }
    else
    {
        echo "No tiene permisos para realizar esta acción";
    }
    ?>
      </div>
    </div>
  </body>
</html>
