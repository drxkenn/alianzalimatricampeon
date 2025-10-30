<?php 
$pageTitle = "Sobre el Proyecto";
require 'includes/header.php'; 
?>

<script>document.body.classList.add('page-sobre');</script>

<!-- Hero Section -->
<div class="sobre-hero">
  <div class="sobre-overlay">
    <div class="container">
      <div class="text-center py-5">
        <h1 class="display-3 fw-bold text-white text-uppercase mb-4">Sobre el Proyecto</h1>
        <p class="lead text-white-50 mb-0 mx-auto" style="max-width: 800px;">
          Alianza Transfer es un proyecto académico que simula un portal deportivo tipo Transfermarkt, 
          enfocado exclusivamente en el Club Alianza Lima.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Team Image Section -->
<div class="sobre-team-image">
  <div class="container py-5">
    <div class="row">
      <div class="col-12">
        <div class="team-photo-wrapper">
          <img src="assets/img/equipo/fotoo.jpg" alt="Plantel de Alianza Lima" class="img-fluid rounded-3 shadow-lg">
          <div class="team-photo-overlay"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team Cards Section -->
<div class="sobre-team">
  <div class="container py-5">
    <h2 class="text-center mb-5 text-white text-uppercase fw-bold">Equipo Desarrollador</h2>
    
    <div class="row g-4 justify-content-center">
      
      <!-- Developer 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="team-card">
          <div class="card-body p-4 text-center">
            <img src="assets/img/equipo/nathalin.jpg" alt="Nathalin Rodriguez" class="rounded-circle img-fluid mx-auto d-block mb-3 team-avatar">
            <div class="role-tag mb-4">Nathalin Rodriguez</div>
            <p class="text-muted mb-0">Ing. Informatico</p>
            <p class="small text-muted">Amo programar en PHP</p>
          </div>
        </div>
      </div>

      <!-- Developer 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="team-card">
          <div class="card-body p-4 text-center">
            <img src="assets/img/equipo/rodrigo.jpg" alt="Rodrigo Cadillo" class="rounded-circle img-fluid mx-auto d-block mb-3 team-avatar">
            <div class="role-tag mb-4">Rodrigo Cadillo</div>
            <p class="text-muted mb-0">Ing. Informatico</p>
            <p class="small text-muted">PHP es mi pasión</p>
          </div>
        </div>
      </div>

      <!-- Developer 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="team-card">
          <div class="card-body p-4 text-center">
            <img src="assets/img/equipo/jair.jpg" alt="Jair Juarez" class="rounded-circle img-fluid mx-auto d-block mb-3 team-avatar">
            <div class="role-tag mb-4">Jair Juarez</div>
            <p class="text-muted mb-0">Ing. Informatico</p>
            <p class="small text-muted">Arriba Alianza, Arriba PHP!!!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Assignment Section: división de archivos entre el equipo -->
  <section class="container my-5">
    <div class="card shadow-sm border-0">
      <div class="card-body text-center">
        <h2 class="h4 fw-bold mb-3">Asignación de archivos (equipo de 3)</h2>
        <p class="text-muted">A continuación la lista de archivos por responsable.</p>

        <div class="row mt-4">
          <div class="col-md-4">
            <h3 class="h6 fw-bold">Nathalin</h3>
            <p class="mb-2"><span class="badge bg-success text-white">Completado ✓</span></p>
            <ul class="list-unstyled small">
              <li>galeria.php</li>
              <li>fichajes.php</li>
              <li>jugadores.php</li>
              <li>plantel.php</li>
              <li>includes/navbar.php</li>
              <li>assets/css/plantel.css</li>
              <li>assets/css/navbar.css</li>
              <li>assets/css/galeria.css</li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3 class="h6 fw-bold">Rodrigo</h3>
            <p class="mb-2"><span class="badge bg-success text-white">Completado ✓</span></p>
            <ul class="list-unstyled small">
              <li>index.php</li>
              <li>contacto.php</li>
              <li>noticias.php</li>
              <li>includes/footer.php</li>
              <li>includes/header.php</li>
              <li>assets/css/footer.css</li>
              <li>assets/css/style.css</li>
              <li>assets/css/index.css</li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3 class="h6 fw-bold">Jair</h3>
            <p class="mb-2"><span class="badge bg-success text-white">Completado ✓</span></p>
            <ul class="list-unstyled small">
              <li>historia.php</li>
              <li>estadisticas.php</li>
              <li>estadio.php</li>
              <li>sobre.php</li>
              <li>titulos.php</li>
              <li>assets/css/estadisticas.css</li>
              <li>assets/css/historia.css</li>
              <li>assets/css/sobre.css</li>
            </ul>
          </div>
        </div>

        <hr>
        <h4 class="h6 fw-semibold">Todo lo trabajado fue con mucho amor.</h4>
      </div>
    </div>
  </section>

  <?php require 'includes/footer.php'; ?>
