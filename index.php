<?php 
$pageTitle = "Inicio";
require 'includes/header.php'; 
?>

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
      <h1 class="display-4 fw-bold text-uppercase" style="color: var(--alianza-blue); font-family: 'Merriweather', serif;">
        Club Alianza Lima
      </h1>
      <p class="lead fs-3 fw-bold fst-italic" style="color: var(--alianza-blue-light);">
        "El corazón del pueblo"
      </p>
      <hr class="my-4">
      <p class="fs-5 text-muted">
        Bienvenido a <strong>Alianza Transfer</strong>, la plataforma de análisis y valoración de jugadores dedicada en exclusiva al Club Alianza Lima. Te traemos los datos de mercado más actualizados, estadísticas del plantel, análisis histórico y las noticias que definen al equipo más popular del Perú.</p>
      <a href="jugadores.php" class="btn btn-primary btn-lg mt-3 px-5">
        Ver Jugadores
      </a>
      <a href="noticias.php" class="btn btn-outline-secondary btn-lg mt-3 px-5">
        Últimas Noticias
      </a>
    </div>
  </div>
</div>

<!-- Sección: Palmarés (responsive con Bootstrap) -->
<section class="palmares py-5 bg-light">
  <div class="container">
    <div class="row g-3 justify-content-center">

      <!-- Item 1 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="palmares-item d-flex flex-column align-items-center text-center" tabindex="0">
          <div class="position-relative mb-2" style="width:72px; height:72px;">
            <img src="https://clubalianzalima.com.pe/static/media/Torneos/escudos/campeonnacional_vx7qmkE.png" alt="Campeón Nacional" class="img-fluid rounded-circle w-100 h-100" style="object-fit:contain;">
            <div class="palmares-score position-absolute top-50 start-50 translate-middle fw-bold text-black">25</div>
          </div>
          <p class="mb-1 small text-uppercase fw-semibold">Campeón Nacional</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="palmares-item d-flex flex-column align-items-center text-center" tabindex="0">
          <div class="position-relative mb-2" style="width:72px; height:72px;">
            <img src="https://clubalianzalima.com.pe/static/media/Torneos/escudos/aperturaclausura_4QHxE4v.png" alt="Torneo Apertura" class="img-fluid rounded-circle w-100 h-100" style="object-fit:contain;">
            <div class="palmares-score position-absolute top-50 start-50 translate-middle fw-bold text-black">5</div>
          </div>
          <p class="mb-1 small text-uppercase fw-semibold">Torneo Apertura</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="palmares-item d-flex flex-column align-items-center text-center" tabindex="0">
          <div class="position-relative mb-2" style="width:72px; height:72px;">
            <img src="https://clubalianzalima.com.pe/static/media/Torneos/escudos/aperturaclausura.png" alt="Torneo Clausura" class="img-fluid rounded-circle w-100 h-100" style="object-fit:contain;">
            <div class="palmares-score position-absolute top-50 start-50 translate-middle fw-bold text-black">5</div>
          </div>
          <p class="mb-1 small text-uppercase fw-semibold">Torneo Clausura</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="palmares-item d-flex flex-column align-items-center text-center" tabindex="0">
          <div class="position-relative mb-2" style="width:72px; height:72px;">
            <img src="https://clubalianzalima.com.pe/static/media/Torneos/escudos/torneoinca.png" alt="Torneo del Inca" class="img-fluid rounded-circle w-100 h-100" style="object-fit:contain;">
            <div class="palmares-score position-absolute top-50 start-50 translate-middle fw-bold text-black">1</div>
          </div>
          <p class="mb-1 small text-uppercase fw-semibold">Torneo del Inca</p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="palmares-item d-flex flex-column align-items-center text-center" tabindex="0">
          <div class="position-relative mb-2" style="width:72px; height:72px;">
            <img src="https://clubalianzalima.com.pe/static/media/Torneos/escudos/reserva.png" alt="Torneo Promoción y Reserva" class="img-fluid rounded-circle w-100 h-100" style="object-fit:contain;">
            <div class="palmares-score position-absolute top-50 start-50 translate-middle fw-bold text-black">2</div>
          </div>
          <p class="mb-1 small text-uppercase fw-semibold">Torneo Promoción y Reserva</p>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="palmares-item d-flex flex-column align-items-center text-center" tabindex="0">
          <div class="position-relative mb-2" style="width:72px; height:72px;">
            <img src="https://clubalianzalima.com.pe/static/media/uploads/Torneos/trofeo_ff.png" alt="Torneo Fútbol Femenino" class="img-fluid rounded-circle w-100 h-100" style="object-fit:contain;">
            <div class="palmares-score position-absolute top-50 start-50 translate-middle fw-bold text-black">3</div>
          </div>
          <p class="mb-1 small text-uppercase fw-semibold">Fútbol Femenino</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Sección: El único Tetracampeón -->
<section class="tetracampeon py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-5">
        <div class="ratio ratio-4x3 shadow-sm rounded overflow-hidden">
          <img src="assets/img/historia/tetra.png" alt="Tetracampeonato - Alianza Lima" class="img-fluid w-100 h-100" style="object-fit:cover;">
        </div>
      </div>
      <div class="col-lg-7">
        <h2 class="h3 fw-bold">El único tetracampeón del fútbol peruano</h2>
        <p class="text-muted">Una de las páginas más brillantes en la historia del club. A continuación los años que componen el tetracampeonato:</p>
        <?php
        $tetracampeon_years = ['1931', '1932', '1933', '1934'];
        ?>
        <div class="mb-3">
          <?php foreach($tetracampeon_years as $year): ?>
            <span class="badge bg-primary text-white me-2 mb-2" aria-label="Año <?php echo $year; ?>"><?php echo $year; ?></span>
          <?php endforeach; ?>
        </div>
        <a href="historia.php" class="btn btn-outline-primary">Ver más sobre la historia</a>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
