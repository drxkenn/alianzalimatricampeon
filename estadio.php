<?php 
$pageTitle = "Estadio";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-5" style="font-family: 'Merriweather', serif;">Estadio Alejandro Villanueva</h1>
  <p class="lead mb-0">"Matute" - La Caldera</p>
</div>

<div class="container my-5">
  <!-- Vista Principal del Estadio -->
  <div class="row mb-5">
    <div class="col-12">
      <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
        <img src="assets/img/estadio.jpeg" class="card-img-top" alt="Foto del Estadio Alejandro Villanueva">
        <div class="card-body p-4">
          <h2 class="fw-bold mb-3" style="color: var(--alianza-blue); font-family: 'Merriweather', serif;">Nuestra Casa</h2>
          <p class="fs-5 text-muted">
            El Estadio Alejandro Villanueva, popularmente conocido como Matute, es el recinto deportivo propiedad del Club Alianza Lima. Se encuentra ubicado en el barrio de Matute, en el distrito de La Victoria, en Lima, Perú.
          </p>
          <p class="text-muted">
            Fue inaugurado el 27 de diciembre de 1974 y es uno de los estadios más emblemáticos del país. Su nombre rinde homenaje a Alejandro Villanueva, uno de los jugadores más importantes en la historia del club y del fútbol peruano.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Información Detallada -->
  <div class="row g-4">
    <!-- Datos Básicos -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0 rounded-3 h-100">
        <div class="card-body">
          <h3 class="fw-bold mb-4" style="color: var(--alianza-blue); font-family: 'Merriweather', serif;">Datos del Estadio</h3>
          <ul class="list-group list-group-flush fs-5">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <strong>Capacidad</strong>
              <span>33,938 espectadores</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <strong>Inauguración</strong>
              <span>27 de diciembre de 1974</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <strong>Propietario</strong>
              <span>Club Alianza Lima</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <strong>Dimensiones</strong>
              <span>105 x 68 m</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <strong>Superficie</strong>
              <span>Césped Natural</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Tribunas -->
    <div class="col-md-6">
      <div class="card shadow-sm border-0 rounded-3 h-100">
        <div class="card-body">
          <h3 class="fw-bold mb-4" style="color: var(--alianza-blue); font-family: 'Merriweather', serif;">Tribunas</h3>
          <div class="table-responsive">
            <table class="table table-hover table-borderless mb-0">
              <thead class="table-header-alianza">
                <tr>
                  <th class="py-3">Tribuna</th>
                  <th class="py-3">Capacidad</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3"><strong>Sur</strong></td>
                  <td class="py-3 text-muted">8,000</td>
                </tr>
                <tr>
                  <td class="py-3"><strong>Norte</strong></td>
                  <td class="py-3 text-muted">8,000</td>
                </tr>
                <tr>
                  <td class="py-3"><strong>Occidente</strong></td>
                  <td class="py-3 text-muted">10,938</td>
                </tr>
                <tr>
                  <td class="py-3"><strong>Oriente</strong></td>
                  <td class="py-3 text-muted">7,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Mapa de Ubicación -->
    <div class="col-12">
      <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.636231703273!2d-77.02551332509154!3d-12.068531042306097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c890b4f44b1b%3A0x452d52e5045df58e!2sEstadio%20Alejandro%20Villanueva!5e0!3m2!1ses!2spe!4v1761686603166!5m2!1ses!2spe" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="card-body text-center p-4">
          <h5 class="fw-bold mb-3" style="color: var(--alianza-blue); font-family: 'Merriweather', serif;">Ubicación</h5>
          <p class="text-muted mb-0">
            Av. Isabel La Católica 821, La Victoria<br>
            Lima, Perú
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
