<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login y Registro</title>

  <link rel="stylesheet" href="css/index.css"/>

</head>
<body class="d-flex align-items-center justify-content-center ">
   <div class="backg"></div>
  <div class="login-container ">

          <h2 class="log">Sistema de Login</h2>

          <form action="test.php" method="post">
            <div class="align-items-center">
      <label for="usuario" class="user">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre" required />

      <label for="contraseña">Contraseña</label>
      <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required />

      <button type="submit" class="btn-azul">Ingresar</button>
          </div>
          </form>
       
          <!-- Formulario de Registro -->

  <a href="register.php" class="btn-pastel">Registrarse</a>

  
        
    
      </div>
    </div>
  </div>
</div>

</body>
</html>