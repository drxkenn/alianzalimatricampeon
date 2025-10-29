<?php 
$pageTitle = "Fichajes";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-5">Mercado de Fichajes 2024</h1>
  <p class="lead mb-0">Altas y Bajas (Simuladas)</p>
</div>

<div class="container my-5">
  <div class="row g-5">
    
    <!-- Columna de ALTAS (IN) -->
    <div class="col-lg-6">
      <h2 class="mb-4 fw-bold text-success">Altas (Llegadas)</h2>
      <div class="card shadow-sm border-0 rounded-3">
        <ul class="list-group list-group-flush">
          
          <!-- Fichaje 1 -->
          <li class="list-group-item p-3">
            <div class="d-flex align-items-center">
              <img src="https://placehold.co/60x60/EEEEEE/333333?text=Foto" alt="Jugador" class="img-fluid rounded-circle me-3">
              <div class="flex-grow-1">
                <h5 class="mb-0 fw-bold">Kevin Serna</h5>
                <small class="text-muted">Desde: ADT de Tarma</small>
              </div>
              <span class="badge bg-success rounded-pill fs-6 p-2">€ 800K</span>
            </div>
          </li>
          
          <!-- Fichaje 2 -->
          <li class="list-group-item p-3">
            <div class="d-flex align-items-center">
              <img src="https://placehold.co/60x60/EEEEEE/333333?text=Foto" alt="Jugador" class="img-fluid rounded-circle me-3">
              <div class="flex-grow-1">
                <h5 class="mb-0 fw-bold">Jiovany Ramos</h5>
                <small class="text-muted">Desde: Dep. Táchira (VEN)</small>
              </div>
              <span class="badge bg-success rounded-pill fs-6 p-2">Libre</span>
            </div>
          </li>

          <!-- Fichaje 3 -->
          <li class="list-group-item p-3">
            <div class="d-flex align-items-center">
              <img src="https://placehold.co/60x60/EEEEEE/333333?text=Foto" alt="Jugador" class="img-fluid rounded-circle me-3">
              <div class="flex-grow-1">
                <h5 class="mb-0 fw-bold">Cecilio Waterman</h5>
                <small class="text-muted">Desde: Cobresal (CHI)</small>
              </div>
              <span class="badge bg-success rounded-pill fs-6 p-2">Libre</span>
            </div>
          </li>

        </ul>
      </div>
    </div>

    <!-- Columna de BAJAS (OUT) -->
    <div class="col-lg-6">
      <h2 class="mb-4 fw-bold text-danger">Bajas (Salidas)</h2>
      <div class="card shadow-sm border-0 rounded-3">
        <ul class="list-group list-group-flush">
          
          <!-- Baja 1 -->
          <li class="list-group-item p-3">
            <div class="d-flex align-items-center">
              <img src="https://placehold.co/60x60/EEEEEE/333333?text=Foto" alt="Jugador" class="img-fluid rounded-circle me-3">
              <div class="flex-grow-1">
                <h5 class="mb-0 fw-bold">Josepmir Ballón</h5>
                <small class="text-muted">Hacia: U. César Vallejo</small>
              </div>
              <span class="badge bg-danger rounded-pill fs-6 p-2">Libre</span>
            </div>
          </li>
          
          <!-- Baja 2 -->
          <li class="list-group-item p-3">
            <div class="d-flex align-items-center">
              <img src="https://placehold.co/60x60/EEEEEE/333333?text=Foto" alt="Jugador" class="img-fluid rounded-circle me-3">
              <div class="flex-grow-1">
                <h5 class="mb-0 fw-bold">Jairo Concha</h5>
                <small class="text-muted">Hacia: Universitario</small>
              </div>
              <span class="badge bg-danger rounded-pill fs-6 p-2">Libre</span>
            </div>
          </li>
          
        </ul>
      </div>
    </div>

  </div>
</div>

<?php require 'includes/footer.php'; ?>
