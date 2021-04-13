<!DOCTYPE html>
<html>
  <head>
    <title>Modificación datos del Programa</title>
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
              <strong class="lgris mt-3">Ingrese criterio de busqueda</strong>

              <div class="form-row">
                <div class="form-group col-md-12 mt-3">
                  <input
                    class="form-control"
                    type="number"
                    name="numficha"
                    min="9999"
                    max="9999999999999"
                    autofocus
                    value=""
                    placeholder="N° Ficha"
                  />
                </div>
                <div class="form-group col-md-12 mt-3 pb-3">
                  <input class="btn btn-primary" type="submit" value="Consultar" />
                </div>
              </div>
            </div>
          </form>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
            {
                include('funciones.php');
                session_start();
                $vnumficha=$_POST['numficha'];
                $miconexion=conectar_bd('', 'sena_bd');
                $resultado=consulta($miconexion,"select * from programa where progra_id='{$vnumficha}'");
                    if($resultado->num_rows>0) { $fila = $resultado->fetch_object();
                     $_SESSION['numerficha1']=$fila->progra_id; ?>

        <form
          id="formulario2"
          role="form"
          method="post"
          action="actualizar_programa.php"
          class="container"
        >
          <div class="col-md-12 mt-3">
            <strong class="lgris mt-3">Datos del Programa</strong>
          </div>

          <div class="col-md-12 mt-3">
            <label class="lgris">Id del Programa:</label>
            <input
              class="form-control"
              type="number"
              name="numerficha"
              disabled="disabled"
              value="<?php echo $fila->progra_id ?>"
            />
          </div>

          <div class="col-md-12 mt-3">
            <label class="lgris">Nombre de Programa:</label>
            <input
              class="form-control"
              type="number"
              name="nombreprog"
              required
              value="<?php echo $fila->progra_nombre ?>"/>
            </div>

          <div class="col-md-12 mt-3">
            <label class="lgris">Tipos de Programa</label>
            <input
              class="form-control"
              type="number"
              name="tipojornada"
              value="<?php echo $fila->progra_tipo ?>"
              required
            />
          </div>

          <div class="col-md-12 mt-3">
            <input class="btn btn-primary mt-3 mb-3" type="submit" value="Actualizar" />
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
    <br />
  </body>
</html>
