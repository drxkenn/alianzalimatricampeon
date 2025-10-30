<?php 
$pageTitle = "Valor de Jugadores";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-5" style="font-family: 'Merriweather', serif;">Valor de Jugadores</h1>
  <p class="lead mb-0">Valores de mercado del plantel principal</p>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">
          
          <!-- 
            Usamos .table-responsive para que la tabla no rompa el layout en móviles 
            y permita scroll horizontal si es necesario.
          -->
          <div class="table-responsive">
            <table class="table table-hover table-borderless mb-0" style="font-size: 0.95rem;">
              <thead class="table-header-alianza">
                <tr class="text-uppercase">
                  <th scope="col" class="py-3 px-4">Foto</th>
                  <th scope="col" class="py-3 px-4">Nombre</th>
                  <th scope="col" class="py-3 px-4">Posición</th>
                  <th scope="col" class="py-3 px-4">Edad</th>
                  <th scope="col" class="py-3 px-4 text-end">Valor de Mercado</th>
                </tr>
              </thead>
              <tbody>
                <!-- Pedro Gallese -->
                <tr>
                  <td class="p-3 align-middle">
                    <div class="player-photo">
                      <img src="assets/img/jugadores/pedro_gallese.webp" alt="Pedro Gallese" class="img-fluid rounded-circle">
                    </div>
                  </td>
                  <td class="p-3 align-middle fw-bold">Pedro Gallese</td>
                  <td class="p-3 align-middle text-muted">Arquero</td>
                  <td class="p-3 align-middle text-muted">34</td>
                  <td class="p-3 align-middle text-end fw-bold fs-6" style="color: var(--alianza-blue);">€ 1.5M</td>
                </tr>
                <!-- Carlos Zambrano -->
                <tr>
                  <td class="p-3 align-middle">
                    <div class="player-photo">
                      <img src="assets/img/jugadores/carlos_zambrano.webp" alt="Carlos Zambrano" class="img-fluid rounded-circle">
                    </div>
                  </td>
                  <td class="p-3 align-middle fw-bold">Carlos Zambrano</td>
                  <td class="p-3 align-middle text-muted">Defensa Central</td>
                  <td class="p-3 align-middle text-muted">35</td>
                  <td class="p-3 align-middle text-end fw-bold fs-6" style="color: var(--alianza-blue);">€ 750K</td>
                </tr>
                <!-- Hernán Barcos -->
                <tr>
                  <td class="p-3 align-middle">
                    <div class="player-photo">
                      <img src="assets/img/jugadores/hernan_barcos.webp" alt="Hernán Barcos" class="img-fluid rounded-circle">
                    </div>
                  </td>
                  <td class="p-3 align-middle fw-bold">Hernán Barcos</td>
                  <td class="p-3 align-middle text-muted">Delantero Centro</td>
                  <td class="p-3 align-middle text-muted">40</td>
                  <td class="p-3 align-middle text-end fw-bold fs-6" style="color: var(--alianza-blue);">€ 300K</td>
                </tr>
                <!-- Kevin Serna -->
                <tr>
                  <td class="p-3 align-middle">
                    <div class="player-photo">
                      <img src="assets/img/jugadores/kevin_serna.png" alt="Kevin Serna" class="img-fluid rounded-circle">
                    </div>
                  </td>
                  <td class="p-3 align-middle fw-bold">Kevin Serna</td>
                  <td class="p-3 align-middle text-muted">Extremo Derecho</td>
                  <td class="p-3 align-middle text-muted">26</td>
                  <td class="p-3 align-middle text-end fw-bold fs-6" style="color: var(--alianza-blue);">€ 1.0M</td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
