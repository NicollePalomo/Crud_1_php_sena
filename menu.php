<?php
  include('funciones.php');
  session_start();
  $_SESSION['nusuario']=$_POST['usuario'];
  $_SESSION['nclave']=$_POST['clave'];

   $miconexion=conectar_bd('', 'sena_bd');
   $resultado=consulta($miconexion,"select * from usuarios where
   usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Menu principal</title>
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
        <?php 
   if($resultado->num_rows>0) { ?> <img src="welcome.png" class="img-fluid" />
        <?php } ?>
        <div class="menu-2">
          <?php
   if($resultado->num_rows>0) { $fila = $resultado->fetch_object();
          $_SESSION['Tipo_usuario']=$fila->usua_tipo; ?>

          <label class="lgris2"> <?php echo $_SESSION['nusuario'] ?></label>
          <div>
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='crear_programa.php'"
              value="Crear programa"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='consulta_programa.php'"
              value="Consultar programa"
            />

            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='modificar_programa.php'"
              value="Modificar programa"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='eliminar_programa.php'"
              value="Eliminar programa"
            />

            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='crear_ficha.php'"
              value="Crear ficha"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='consultar_ficha.php'"
              value="Consultar ficha"
            />

            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='modificar_ficha.php'"
              value="Modificar ficha"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='eliminar_ficha.php'"
              value="Eliminar ficha"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='registro_aprendiz.php'"
              value="Registro de aprendices"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='consulta_aprendiz.php'"
              value="Consulta de aprendices"
            />

            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='modificar_aprendiz.php'"
              value="Actualización de aprendiz"
            />
            <input
              style="width: 40%"
              class="btn btn-outline-primary mt-4 ms-3"
              type="button"
              onclick="location.href ='borrar_aprendiz.php'"
              value="Borrar aprendices"
            />
          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary mt-4 mb-3" type="button">Logout</button>
          </div>
          <?php
  }
  else
  {
    echo "Usuario o clave invalido";
  }
  $miconexion->close(); ?>

        </div>
      </div>
    </div>
    <br>
  </body>
</html>
