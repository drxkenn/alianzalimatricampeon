<?php 
$pageTitle = "Estadísticas";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-4">Estadísticas 2024</h1>
  <p class="lead mb-0">Resumen de la temporada del Club Alianza Lima</p>
</div>

<div class="bento-container">
  <div class="container my-5">
    <div class="bento-grid">
      <!-- Partidos Jugados - Tarjeta Grande -->
      <div class="bento-item bento-item-large">
        <div class="bento-card text-center">
          <h3 class="bento-title">Partidos Jugados</h3>
          <div class="bento-value display-1">34</div>
          <div class="bento-details">
            <div class="row g-3">
              <div class="col-4">
                <div class="detail-item">
                  <span class="detail-value">20</span>
                  <span class="detail-label">Victorias</span>
                </div>
              </div>
              <div class="col-4">
                <div class="detail-item">
                  <span class="detail-value">8</span>
                  <span class="detail-label">Empates</span>
                </div>
              </div>
              <div class="col-4">
                <div class="detail-item">
                  <span class="detail-value">6</span>
                  <span class="detail-label">Derrotas</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Goles - Tarjeta Grande -->
      <div class="bento-item bento-item-large">
        <div class="bento-card text-center">
          <h3 class="bento-title">Balance de Goles</h3>
          <div class="bento-value display-2">+27</div>
          <div class="bento-details">
            <div class="row g-3">
              <div class="col-6">
                <div class="detail-item">
                  <span class="detail-value">55</span>
                  <span class="detail-label">Goles a Favor</span>
                  <small class="detail-subtext">1.6 por partido</small>
                </div>
              </div>
              <div class="col-6">
                <div class="detail-item">
                  <span class="detail-value">28</span>
                  <span class="detail-label">Goles en Contra</span>
                  <small class="detail-subtext">0.8 por partido</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Máximo Goleador -->
      <div class="bento-item">
        <div class="bento-card text-center">
          <h3 class="bento-title">Máximo Goleador</h3>
          <div class="bento-value">14</div>
          <div class="bento-player">Hernán Barcos</div>
          <div class="bento-details">
            <span class="detail-label">Goles en Liga 1</span>
          </div>
        </div>
      </div>

      <!-- Posesión -->
      <div class="bento-item">
        <div class="bento-card text-center">
          <h3 class="bento-title">Posesión</h3>
          <div class="bento-value">58%</div>
          <div class="bento-details">
            <span class="detail-label">Promedio por partido</span>
          </div>
        </div>
      </div>

      <!-- Efectividad de Pases -->
      <div class="bento-item">
        <div class="bento-card text-center">
          <h3 class="bento-title">Efectividad</h3>
          <div class="bento-value">84%</div>
          <div class="bento-details">
            <span class="detail-label">Pases Completados</span>
          </div>
        </div>
      </div>

      <!-- Tarjetas -->
      <div class="bento-item">
        <div class="bento-card text-center">
          <h3 class="bento-title">Disciplina</h3>
          <div class="row g-3">
            <div class="col-6">
              <div class="detail-item">
                <span class="detail-value yellow-card">55</span>
                <span class="detail-label">Amarillas</span>
              </div>
            </div>
            <div class="col-6">
              <div class="detail-item">
                <span class="detail-value red-card">4</span>
                <span class="detail-label">Rojas</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
