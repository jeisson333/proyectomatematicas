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
    <div class="boxes-container">
      <article class="articulo">
          <h2>Artículo 1</h2>
          <p>Contenido del artículo 1.</p>
          <img src="./assets/img/articulo1.png" alt="Imagen 1">
      </article>
      
      <article class="articulo">
          <h2>Artículo 2</h2>
          <p>Contenido del artículo 2.</p>
          <img src="./assets/img/articulo2.jpg" alt="Imagen 2">
      </article>
    </div>
  <?php else: ?>
    <h1>aquí info de la pagina</h1>
  <?php endif; ?>
</section>
<footer>
    <p>Derechos de autor © 2023 Mi Página Web</p>
</footer>
