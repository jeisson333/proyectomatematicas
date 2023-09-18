
<nav>

<?php if(!empty($user)): ?>

     <div class="nav-toggle">
            <button id="menu-toggle">☰</button>
        </div>
      <ul id="nav-list">
            <li><a href="/proyectoMatematicas">Home</a></li>
            <li><a href="#">Free</a></li>  
            <li><img src='http://localhost/proyectoMatematicas/assets/img/profile.svg' alt="Logo de la empresa" class="profile-img" /></li>
      </ul>
      <ul class="profile-menu">
            
            <li><a href="#"><?= $user['name']; ?></a></li>
            <li><a href="/changePassword">Cambiar contraseña</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>   
        
      </ul>
      <section>
        <article class="articulo1">
            <h2>Artículo 1</h2>
            <p>Contenido del artículo 1.</p>
            <img src="http://localhost/proyectoMatematicas/assets/img/articulo1.png" alt="Imagen 1">
        </article>
        
        <article class="articulo2">
            <h2>Artículo 2</h2>
            <p>Contenido del artículo 2.</p>
            <img src="http://localhost/proyectoMatematicas/assets/img/articulo2.jpg" alt="Imagen 2">
        </article>
    </section>
    
    <footer>
        <p>Derechos de autor © 2023 Mi Página Web</p>
    </footer>
        
    <?php else: ?>
      <ul>
        <li><a href="login.php">Iniciar sesion</a> </li>
        <li><a href="signup.php">Crear una cuenta</a></li>
      </ul>
      
      
      
    <?php endif; ?>
    

  
</nav>
