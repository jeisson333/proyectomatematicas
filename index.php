<?php
  session_start();

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
  }
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
    
    <?php require 'partials/header.php' ?>
    <?php if(!empty($user)): ?>
      
      <?php require 'partials/home.php' ?>
      
    <?php else: ?>
      <?php require 'partials/home.php' ?>
      <h1>aqui info de la pagina</h1>
    <?php endif; ?>
    <script src="script.js"></script>
  </body>
</html>