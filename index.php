<?php 
$pageTitle = "Inicio";
require 'includes/header.php'; 
?>

<!-- 1. Sección de Video -->
<!-- 
  Este contenedor mantiene la proporción 16:9 del video.
  El video está en 'autoplay', 'muted' (requerido para autoplay en la mayoría de navegadores), y 'loop'.
-->
<div class="video-container shadow-lg">
  <!-- Video versión desktop (16:9) -->
  <video class="video-desktop" autoplay muted loop playsinline>
    <source src="assets/videos/video_inicio.webm" type="video/webm">
  </video>
  
  <!-- Video versión móvil (9:16) -->
  <video class="video-mobile" autoplay muted loop playsinline>
    <source src="assets/videos/video_inicio_mobile.webm" type="video/webm">
  </video>
</div>

<!-- 2. Sección de Bienvenida y Lema -->
<div class="container text-center py-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <img src="assets/img/logo.png" alt="Escudo Alianza Lima" class="mb-4" style="width: 120px; border-radius: 50%;">
      <h1 class="display-4 fw-bold text-uppercase" style="color: var(--alianza-blue);">
        Club Alianza Lima
      </h1>
      <p class="lead fs-3 fw-bold fst-italic" style="color: var(--alianza-blue-light);">
        "El corazón del pueblo"
      </p>
      <hr class="my-4">
      <p class="fs-5 text-muted">
        Bienvenidos a <strong>Alianza Transfer</strong>, el portal no oficial inspirado en Transfermarkt y dedicado exclusivamente al equipo más popular del Perú. Explora el valor de mercado de nuestros jugadores, el plantel actual, nuestra historia y las últimas noticias.
      </p>
      <a href="jugadores.php" class="btn btn-primary btn-lg mt-3 px-5">
        Ver Jugadores
      </a>
      <a href="noticias.php" class="btn btn-outline-secondary btn-lg mt-3 px-5">
        Últimas Noticias
      </a>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
