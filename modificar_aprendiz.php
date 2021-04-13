<!DOCTYPE html>
<html>
  <head>
    <title>Modificación de Aprendices</title>
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
      <div class="menu">
        <div class="menu-2">
          <img src="procesos.png" class="img-fluid" />

          <form name="formulario" role="form" method="post" class="container">

            <div class="col-md-12 mt-3">
              <strong class="lgris">Ingrese criterio de busqueda</strong>
            </div>

              <div class="form-row">
                <div class="form-group col-md-12 mt-3">
                  <input
                    class="form-control"
                    type="number"
                    name="numid"
                    min="9999"
                    max="9999999999999"
                    autofocus
                    value=""
                    placeholder="IDENTIFICACIÓN"
                  />
                </div>

                <div class="form-group col-md-12 mt-3 pb-3">
                  <input class="btn btn-primary" type="submit" value="Consultar" />
                </div>
              </div>
            </form>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
            {
                include('funciones.php');
                session_start();
                $vnumid=$_POST['numid'];
                $miconexion=conectar_bd('', 'sena_bd');
                $resultado=consulta($miconexion,"select * from aprendices where apre_id='{$vnumid}'");

                    if($resultado->num_rows>0) { $fila = $resultado->fetch_object();
                        $_SESSION['ide1']=$fila->apre_id; 
        ?>

        <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
            
          <div class="col-md-12">
            <strong class="lgris">Datos del aprendiz</strong><br />
            <label class="lgris">Id:</label>
            <input
              class="form-control"
              type="text"
              name="ide"
              disabled="disabled"
              value="<?php echo $fila->apre_id ?>"
            />
            <label class="lgris">Nombres:</label>
            <input
              class="form-control"
              style="text-transform: uppercase"
              type="text"
              name="nombres"
              required
              value="<?php echo $fila->apre_nombres ?>"
            />
            <label class="lgris">Apellidos:</label>
            <input
              class="form-control"
              style="text-transform: uppercase"
              type="text"
              name="apellidos"
              value="<?php echo $fila->apre_apellidos ?>"
              required
            />
            <label class="lgris">Dirección:</label>
            <input
              class="form-control"
              style="text-transform: uppercase"
              type="text"
              name="direccion"
              value="<?php echo $fila->apre_direccion ?>"
              required
            />
            <label class="lgris">Teléfono:</label>
            <input
              class="form-control"
              type="number"
              name="telefono"
              min="9999"
              max="9999999999999"
              value="<?php echo $fila->apre_telefono ?>"
              required
            />
            <br />
            <input class="btn btn-primary" type="submit" value="Actualizar" />
            <br />
          </div>
        </form>
        <?php
        }
        else{
            echo "No existen registros";
        }
        $miconexion->close(); }?>
      </div>
    </div>
  </body>
</html>
