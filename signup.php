<?php

  /* require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['name'])) {
    $sql = "INSERT INTO users (email, password,name) VALUES (:email, :password,:name)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':name', $_POST['name']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado exitosamente';
    } else {
      $message = 'Lo sentimos, hubo un problema al crear tu cuenta.';
    }
  } */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="app-container">
        <div class="login">
          <img class="img-login" src="./assets/img/login-img.jpg" alt="Computadora"/>
          <div>
            <?php require 'partials/header.php' ?>

            <?php if(!empty($message)): ?>
              <p> <?= $message ?></p>
            <?php endif; ?>

            <h1>Registro</h1>

            <form action="signup.php" method="POST">
              <input name="name" type="text" placeholder="Nombre">
              <input name="email" type="text" placeholder="Introduce tu correo electrónico">
              <input name="password" type="password" placeholder="Ingresa tu contraseña">
              <input name="confirm_password" type="password" placeholder="Confirmar Contraseña">
              <input type="submit" value="Registrarse">
            </form>
            <p class="register">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
          </div>
      </div>
    </div>
  </body>
</html>