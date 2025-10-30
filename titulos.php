<?php 
$pageTitle = "Títulos";
require 'includes/header.php'; 
?>

<!-- Estilos personalizados para las tarjetas de años -->
<style>
     body{
      font-family: "Merriweather", serif;
     }
    .year-card-header {
        background-size: cover; 
        background-position: center; 
        /* 1. Tarjeta más grande */
        height: 110px; 
        /* 2. Sombra de texto un poco más fuerte para mejorar el contorno */
        text-shadow: 1px 1px 6px rgba(0,0,0,0.9);
        /* Asegura que el texto (h5) sea siempre blanco */
        color: #FFFFFF; 
        
        /* Esto ayuda a centrar el texto vertical y horizontalmente */
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative; /* Necesario para la superposición si se usara ::before */
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
            
            <!-- Primera División del Perú --><li class="list-group-item d-flex justify-content-between align-items: center p-3">
              Primera División del Perú
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">25 Títulos</span>
            </li>
            <li class="list-group-item p-3">
              <?php
                // Definimos los años con sus respectivas imágenes
                // Asegúrate de que las rutas a tus imágenes sean correctas
                $anios_primera = [
                  1918 => './assets/img/historia/1918.jpg', 
                  1919 => './assets/img/historia/escudo.jpg', 
                  1927 => './assets/img/historia/escudo.jpg', 
                  1928 => './assets/img/historia/escudo.jpg', 
                  1931 => './assets/img/historia/1931.jpg', 
                  1932 => './assets/img/historia/1932.jpg', 
                  1933 => './assets/img/historia/1933.jpg', 
                  1948 => './assets/img/historia/1948.jpg', 
                  1952 => './assets/img/historia/1952.jpg', 
                  1954 => './assets/img/historia/1954.jpg', 
                  1955 => './assets/img/historia/1955.jpg', 
                  1962 => './assets/img/historia/1962.jpg', 
                  1963 => './assets/img/historia/1963.jpg', 
                  1965 => './assets/img/historia/1965.jpg', 
                  1975 => './assets/img/historia/1975.jpg', 
                  1977 => './assets/img/historia/1977.jpg', 
                  1978 => './assets/img/historia/1978.jpg', 
                  1997 => './assets/img/historia/1997.jpg', 
                  2001 => './assets/img/historia/2001.jpg', 
                  2003 => './assets/img/historia/2003.jpg', 
                  2004 => './assets/img/historia/2004.jpg', 
                  2006 => './assets/img/historia/2006.jpg', 
                  2017 => './assets/img/historia/2017.jpg', 
                  2021 => './assets/img/historia/2021.jpg', 
                  2022 => './assets/img/historia/2022.webp', // Agregué 2022 que faltaba en tu último código
                ];
              ?>
              <div class="row g-3 mt-2">
                <?php foreach ($anios_primera as $anio => $imagen_url): ?>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="card text-white shadow-sm border-0 rounded-3 overflow-hidden year-card">
                      <!-- 
                        3. APLICAMOS LA SUPERPOSICIÓN OSCURA:
                        Usamos 'linear-gradient' para poner un color negro con 25% de opacidad
                        ENCIMA de la imagen de fondo.
                      -->
                      <div class="year-card-header" style="background-image: linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('<?php echo $imagen_url; ?>');">
                        <h5 class="fw-bold mb-0"><?php echo $anio; ?></h5>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </li>
            
            <!-- Copa del Inca --><li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Copa del Inca
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">1 Título</span>
            </li>
            <li class="list-group-item p-3">
                <?php
                  $anios_inca = [
                    2014 => './assets/img/historia/2014.jpg' // Reemplaza esta imagen
                  ];
                ?>
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

            <!-- Torneo Apertura y Clausura (sin lista de años, se quedan igual) --><li class="list-group-item d-flex justify-content-between align-items: center p-3">
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
            
            <!-- Copa Simón Bolívar --><li class="list-group-item d-flex justify-content-between align-items: center p-3">
              Copa Simón Bolívar
              <span class="badge bg-alianza rounded-pill p-2" style="font-size: 1rem;">1 Título</span>
            </li>
            <li class="list-group-item p-3">
                <?php
                  $anios_simon = [
                    1976 => './assets/img/historia/1976.jpg' // Reemplaza esta imagen
                  ];
                ?>
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