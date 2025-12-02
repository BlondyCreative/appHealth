<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login y Registro</title>

  <!-- Bootstrap -->


  <!-- Estilos pastel -->
  <style>
        * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
 body {

  font-family: 'Segoe UI', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
  margin: 0;
  background-color: #ffffff;
  }
  .backg {
       background-image: url("./assets/logoM.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
       height: 110vh;
    width: 160vh;
  }

   .login-container {
      width: 100%;
      max-width: 900px;
    }
        .input {

      width: 69vh;
      height: 44px;
      justify-content: center;
      align-items: center;
     margin-left: 50px;

    }

    button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #b2dfdb;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    h2 {
      margin-bottom: 30px;
      font-size: 24px;
      text-align: left;
      color: #333;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      text-align: left;
      margin-left: 100px;
      color: #444;
    }

    input {
        width: 80%;
      padding: 10px;
      margin-bottom: 20px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      align-items: center;
      justify-content: center;
      margin-left: 82px;

    }

    .btn-azul {
       width: 80%;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 15px;
 margin-left: 85px;
            transition: background-color 0.3s ease;
              margin-top: 15px;

    }

    .btn-azul:hover {
      background-color: #0056b3;
           width: 80%;
       align-items: center;
       justify-content: center;
 margin-left: 85px;
       
    }

    .log {

           align-items: center;
       justify-content: center;
                    margin-left: 350px;
    }
    .btn-pastel {
       width: 80%;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 15px;
 margin-left: 85px;
            transition: background-color 0.3s ease;
              margin-top: 15px;
    }



        .btn-pastel:hover {
      background-color: #0056b3;
           width: 80%;
       align-items: center;
       justify-content: center;
 margin-left: 85px;

    }

    .user{
   flex-direction: row;
        margin-right: 800px;
    }


    .acc {
        margin-left: 350px;
      margin-top: 40px;
      flex-direction: row;
      align-items: center;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center ">
   <div class="backg"></div>
  <div class="login-container ">

          <h2 class="log">Sistema de Login</h2>

          <!-- Formulario de Login -->
          <form action="register.php" method="post">
            <div class="align-items-center">
      <label for="usuario" class="user">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Ingrese su nombre" required />

      <label for="contraseña">Contraseña</label>
      <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required />

      <button type="submit" class="btn-azul">Registrate</button>
          </div>
          </form>
       
          <!-- Formulario de Registro -->


  <p class="acc">Ya tienes una cuenta?  </p>
  <a href="index.html" class="btn btn-pastel">Ingresar</a>


      </div>
    </div>
  </div>
</div>
 
</body>
</html>
