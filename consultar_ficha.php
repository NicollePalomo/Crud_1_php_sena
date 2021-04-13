<!DOCTYPE html>
<html>
  <head>
    <title>Consultar Programas</title>
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
              <strong class="lgris mt-3">Consulta de Fichas</strong>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12 mt-3">
                <label class="lgris">Numero de la Ficha</label>
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

              <div class="form-group col-md-12 mt-3">
                <label class="lgris">Numero del programa:</label>
                <input
                  class="form-control"
                  type="number"
                  name="numepragrama"
                  min="0"
                  max="10"
                  value=""
                  placeholder="N° del programa"
                />
              </div>

              <div class="form-group col-md-12 mt-3 pb-3">
                <input class="btn btn-primary" type="submit" value="Consultar" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
        {
            include('funciones.php');
            $vnumfichas=$_POST['fichas'];
            $vnumeprograma=$_POST['numepragrama'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from fichas where trim(ficha_numero) like '%{$vnumfichas}%' and (trim(ficha_progra) like '%{$vnumeprograma}%'
            )");
                if($resultado->num_rows>0) { while ($fila = $resultado->fetch_object()) { echo
            $fila->ficha_numero." ".$fila->ficha_progra." <br />"; } 
        } else
            { echo "No existen registros"; } $miconexion->close(); }
    ?>
    
  </body>
</html>
