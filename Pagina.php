<?php
session_start();
 if(isset($_SESSION['usuario'])){
  header("location: index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KeysGaming</title>
  <link rel="stylesheet" type="text/css" href="assest/css/style.css">
  <link rel="shortcut icon" href="./imagenes/Navegacion/logo_steam-limpio.png">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="php/login_usuario_be.php" method="POST">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" required name="Usuario">
          <label for="">Usuario</label>
        </div>
        <div class="input-group">
          <input type="password" required name="Contrasena">
          <label for="">Contraseña</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Recuerdame</label>
        </div>
        <button type="submit">Login</button>
        <div class="signUp-link">
          <p>No tienes una cuenta? <a href="#" class="signUpBtn-link">Registrarme</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
      <form action="php/registro_usuario_be.php" method="POST">
        <h2>Registrarme</h2>
        <div class="input-group">
          <input type="text" required name="Usuario">
          <label for="">Usuario</label>
        </div>
        <div class="input-group">
          <input type="email" required name="Correo">
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" required name="Contrasena">
          <label for="">Contraseña</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Estoy de acuerdo con los terminos y condiciones</label>
        </div>
        <button type="submit">Registrarme</button>
        <div class="signUp-link">
          <p>¿Ya tienes una cuenta? <a href="#" class="signInBtn-link">Iniciar Sesion</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="assest/js/script.js"></script>
</body>
</html>