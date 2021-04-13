<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link href="estilos.css" rel="stylesheet" />
    <title>Login</title>
  </head>
  <body>
    <div id="div1" class="container">
      <div class="menu">
        <div class="menu-2">
          <img src="login.png" class="img-fluid" />
          <form id="formulario" method="post" action="menu.php">

            <div class="form-group mt-3">
              <label class="lgris">Nombre de Usuario</label>
              <input type="text" class="form-control" name="usuario" placeholder="Nombre" />
            </div>
            
            <div class="form-group mt-3">
              <label class="lgris">Contraseña</label>
              <input
                type="password"
                class="form-control"
                name="clave"
                placeholder="Contraseña"
              />
            </div>
            <button type="submit" class="btn btn-primary boton mt-3 mb-3">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
