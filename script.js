console.log("entra");
document.addEventListener("DOMContentLoaded", function () {
    const profileImage = document.querySelector(".profile-img");
    const profileMenu = document.querySelector("ul.profile-menu");
  
    // Agregar evento de clic a la imagen de perfil
    profileImage.addEventListener("click", function () {
      // Alternar la clase 'show-menu' para mostrar/ocultar el menú
      profileMenu.classList.toggle("show-menu");
    });
  });
  