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
      <br />
      <div class="menu">
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
            action="guardado_aprendiz.php"
            class="container"
          >
            <div class="col-md-12 mt-3">
              <strong class="lgris">Ingrese los datos del aprendiz</strong>

              <div class="form-row">
                <div class="form-group col-md-12 mt-3">
                  <label class="lgris mt-3">Identificacion:</label>
                  <select class="form-control" name="tipoid">
                    <option value="CC" selected>CC</option>
                    <option value="TI">TI</option>
                    <option value="RC">RC</option>
                    <option value="PEP">PEP</option>
                  </select>
                </div>

                <div class="form-group col-md-12 mt-3">
                  <input
                    class="form-control input-lg"
                    type="number"
                    name="numid"
                    min="9999"
                    max="9999999999999"
                    value=""
                    placeholder="IDENTIFICACIÓN"
                    required
                  />
                </div>
              </div>
              <label class="lgris">Nombres:</label>
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                name="nombres"
                value=""
                placeholder="Nombres"
                required
              />
              <label class="lgris">Apellidos:</label>
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                name="apellidos"
                value=""
                placeholder="Apellidos"
                required
              />
              <label class="lgris">Dirección:</label>
              <input
                class="form-control"
                style="text-transform: uppercase"
                type="text"
                name="direccion"
                value=""
                placeholder="DIRECCIÓN"
                required
              />
              <label class="lgris">Teléfono:</label>
              <input
                class="form-control"
                type="number"
                name="telefono"
                min="9999"
                max="9999999999999"
                value=""
                placeholder="TELÉFONO"
                required
              />
              <label class="lgris">Ficha:</label>
              <input
                class="form-control"
                type="number"
                name="ficha"
                min="9999"
                max="9999999999999"
                value=""
                placeholder="FICHA"
                required
              />
              <br />
              <input class="btn btn-primary mb-3" type="submit" value="Guardar" />
            </div>
          </form>
          <?php
            }
            else
            {
                echo "No tiene permisos para realizar esta acción";
            }
            ?>
        </div>
      </div>
    </div>
    <br />
  </body>
</html>
