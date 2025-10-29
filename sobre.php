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
            <div class="role-tag mb-4">Rodrigo Cadillo</div>
            <p class="text-muted mb-0">Desarrollador Back-End</p>
            <p class="small text-muted">PHP & lógica del sitio</p>
          </div>
        </div>
      </div>

      <!-- Developer 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="team-card">
          <div class="card-body p-4 text-center">
            <div class="role-tag mb-4">Nathalin Rodriguez</div>
            <p class="text-muted mb-0">Diseñador Front-End</p>
            <p class="small text-muted">Bootstrap & UI</p>
          </div>
        </div>
      </div>

      <!-- Developer 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="team-card">
          <div class="card-body p-4 text-center">
            <div class="role-tag mb-4">Jair Juarez</div>
            <p class="text-muted mb-0">Documentación y QA</p>
            <p class="small text-muted">Testing & documentación</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
