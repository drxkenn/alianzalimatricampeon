<?php 
$pageTitle = "Títulos";
require 'includes/header.php'; 
?>

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
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Primera División del Perú
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">25 Títulos</span>
            </li>
            <li class="list-group-item p-3 text-muted">
              (1918, 1919, 1927, 1928, 1931, 1932, 1933, 1948, 1952, 1954, 1955, 1962, 1963, 1965, 1975, 1977, 1978, 1997, 2001, 2003, 2004, 2006, 2017, 2021, 2022)
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Copa del Inca
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">1 Título</span>
            </li>
             <li class="list-group-item p-3 text-muted">
              (2014)
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Torneo Apertura
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">6 Títulos</span>
            </li>
             <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Torneo Clausura
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">7 Títulos</span>
            </li>
          </ul>

          <h2 class="fw-bold mt-5 mb-4" style="color: var(--alianza-blue);">Torneos Internacionales</h2>
          <ul class="list-group list-group-flush fs-5">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Copa Simón Bolívar
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">1 Título</span>
            </li>
            <li class="list-group-item p-3 text-muted">
              (1976)
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
