<?php 
$pageTitle = "Títulos";
require 'includes/header.php'; 
?>

<style>
     body{
      font-family: "Merriweather", serif;
     }
    .year-card-header {
        background-size: cover; 
        background-position: center; 
        height: 110px; 
        text-shadow: 1px 1px 6px rgba(0,0,0,0.9);
        color: #FFFFFF; 
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .year-card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .year-card:hover {
        transform: scale(1.05);
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
    }
</style>

<div class="page-header">
  <h1 class="display-5">Palmarés</h1>
  <p class="lead mb-0">La gloriosa historia del Club Alianza Lima</p>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4 p-md-5">

          <h2 class="fw-bold mb-4" style="color: var(--alianza-blue);">Torneos Nacionales</h2>
          <ul class="list-group list-group-flush fs-5">
            
            <li class="list-group-item d-flex justify-content-between align-items: center p-3">
              Primera División del Perú
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">25 Títulos</span>
            </li>
            <li class="list-group-item p-3">
              <?php require 'includes/titulos_data.php'; ?>
              <div class="row g-3 mt-2">
                <?php foreach ($anios_primera as $anio => $imagen_url): ?>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="card text-white shadow-sm border-0 rounded-3 overflow-hidden year-card">
                      <div class="year-card-header" style="background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('<?php echo $imagen_url; ?>');">
                        <h5 class="fw-bold mb-0"><?php echo $anio; ?></h5>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </li>
            
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Copa del Inca
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">1 Título</span>
            </li>
            <li class="list-group-item p-3">
                <div class="row g-3 mt-2">
                  <?php foreach ($anios_inca as $anio => $imagen_url): ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="card text-white shadow-sm border-0 rounded-3 overflow-hidden year-card">
                        <!-- Aplicamos la superposición oscura también aquí -->
                        <div class="year-card-header" style="background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('<?php echo $imagen_url; ?>');">
                          <h5 class="fw-bold mb-0"><?php echo $anio; ?></h5>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items: center p-3">
              Torneo Apertura
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">6 Títulos</span>
            </li>
             <li class="list-group-item d-flex justify-content-between align-items: center p-3">
              Torneo Clausura
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">7 Títulos</span>
            </li>
          </ul>

          <h2 class="fw-bold mt-5 mb-4" style="color: var(--alianza-blue);">Torneos Internacionales</h2>
          <ul class="list-group list-group-flush fs-5">
            
            <li class="list-group-item d-flex justify-content-between align-items: center p-3">
              Copa Simón Bolívar
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">1 Título</span>
            </li>
            <li class="list-group-item p-3">
                <div class="row g-3 mt-2">
                  <?php foreach ($anios_simon as $anio => $imagen_url): ?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="card text-white shadow-sm border-0 rounded-3 overflow-hidden year-card">
                        <!-- Aplicamos la superposición oscura también aquí -->
                        <div class="year-card-header" style="background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('<?php echo $imagen_url; ?>');">
                          <h5 class="fw-bold mb-0"><?php echo $anio; ?></h5>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>