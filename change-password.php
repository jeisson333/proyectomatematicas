<?php
  /* session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conexion->prepare('SELECT id, email,name, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  } */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body> 
    <nav>
      <?php if(!empty($user)): ?>
        <div class="nav-toggle">
              <button id="menu-toggle">☰</button>
        </div>
        <ul id="nav-list">
          <li><a href="/proyectoMatematicas">Home</a></li>
          <li class="mr-menu"><a href="free.php">Free</a></li>  
          <li class="welcome">Bienvenido <?= $user['name']; ?></li>
          <li><img src='./assets/img/profile.svg' alt="Logo de la empresa" class="profile-img" /></li>
        </ul>
        <ul class="profile-menu">
        <li><a href="/change-password.php">Cambiar contraseña</a></li>
          <li><a href="logout.php">Cerrar sesión</a></li>   
        </ul>
            
      <?php else: ?>
        <ul>
          <li><a href="login.php">Iniciar sesión</a> </li>
          <li><a href="signup.php">Crear una cuenta</a></li>
        </ul>
      <?php endif; ?>
    </nav>
    <section>
      <?php if(!empty($user)): ?>
        <div class="login">
        <img class="img-login" src="./assets/img/login-img.jpg" alt="Computadora"/>
        <div>
          <?php require 'partials/header.php' ?>
          <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
          <?php endif; ?>
          <h1>Cambio de contraseña</h1>
          <form action="login.php" method="POST">
            <input name="passwordOld" type="password" placeholder="Contraseña anterior">
            <input name="passwordNew" type="password" placeholder="Contraseña nueva">
            <input type="submit" value="Cambiar">
          </form>
        </div>
      </div>
      <?php else: ?>
        <h1>aquí info de la pagina</h1>
      <?php endif; ?>
    </section>
    <footer>
        <p>Derechos de autor © 2023 Mi Página Web</p>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
