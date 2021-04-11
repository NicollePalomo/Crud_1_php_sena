<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <title>Login</title>
</head>
<body>
  <div id="div1" class="container">
      <br>
      <div id="div2">
         <img src="Captura.PNG " class="img-responsive">
         <div id="div3">
              <form id="formulario" method="post" action="menu.php">
                 <br>
                 <strong class="lgris">Ingrese su usuario y contraseña para iniciar sessión</strong>
                 <br>
                 <label class="lgris">Nombre de Usuario:</label>
                 <br>
                  <input style="text-transform: uppercase;" type="text" name="usuario" value=""required/>
                  <br>
                  <label class="lgris">Contraseña:</label>
                  <br>
                   <input type="password" name="clave" value="" required/>
                   <br><br>
                   <input class="btn btn-primary" type="submit" value="LOGEARTE" >
                    <br><br>
                    </form>
            </div>
        </div>                
    </div>
    <br><br> 
</body>
</html>