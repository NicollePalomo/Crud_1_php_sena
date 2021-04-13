<!DOCTYPE html>
<html>
  <head>
    <title>Eliminación de fichas</title>
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
      <br />
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
                  name="numficha"
                  min="9999"
                  max="9999999999999"
                  value=""
                  placeholder="N° FICHA"
                />
              </div>

              <div class="form-group col-md-12">
                <input class="btn btn-primary mt-3 mb-3" type="submit" value="Eliminar" />
              </div>
            </div>
          </form>
        </div>

        <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
            {
                include('funciones.php');
                $vnumficha=$_POST['numficha'];
                $miconexion=conectar_bd('', 'sena_bd');
                $resultado=consulta($miconexion,"select * from programa where ficha_numero='{$vnumficha}'");
                $resultado2=consulta($miconexion,"delete from programa where ficha_numero='{$vnumficha}'");

                    if($resultado->num_rows>0) { $fila = $resultado->fetch_object(); echo
                        $fila->ficha_numero." ".$fila->ficha_programa." <br />"; if($resultado2) echo "<br />
                        Datos borrados exitosamente"; } 
            else {   
            echo "No existen registros"; }
            $miconexion->close(); 
            }
        ?>
      </div>
    </div>
  </body>
</html>
