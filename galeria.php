<?php 
$pageTitle = "Galería";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-5">Galería</h1>
  <p class="lead mb-0">Las mejores imágenes de Alianza Lima</p>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
        
        <!-- 
          Carousel de Bootstrap.
          No usamos JS, solo los atributos 'data-bs-ride' y 'data-bs-target'.
        -->
        <div id="galeriaCarousel" class="carousel slide" data-bs-ride="false">
          
          <!-- Indicadores (los puntos de abajo) -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#galeriaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#galeriaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#galeriaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          
          <!-- Contenido de las imágenes -->
          <div class="carousel-inner">
            <!-- Imagen 1 -->
            <div class="carousel-item active">
              <img src="https://placehold.co/1200x700/003366/FFFFFF?text=Foto+del+Equipo" class="d-block w-100" alt="Foto del Equipo">
              <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                <h5>Plantel 2024</h5>
                <p>Foto oficial del equipo en Matute.</p>
              </div>
            </div>
            <!-- Imagen 2 -->
            <div class="carousel-item">
              <img src="https://placehold.co/1200x700/EEEEEE/333333?text=Hinchada+en+Matute" class="d-block w-100" alt="Hinchada">
              <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                <h5>La Fiel Hinchada</h5>
                <p>El Comando Svr alentando en la tribuna Sur.</p>
              </div>
            </div>
            <!-- Imagen 3 -->
            <div class="carousel-item">
              <img src="https://placehold.co/1200x700/0D47A1/FFFFFF?text=Celebraci%C3%B3n+de+Gol" class="d-block w-100" alt="Celebración de Gol">
              <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                <h5>Celebración de Gol</h5>
                <p>Los jugadores celebrando un gol en el clásico.</p>
              </div>
            </div>
          </div>
          
          <!-- Controles (Flechas) -->
          <button class="carousel-control-prev" type="button" data-bs-target="#galeriaCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#galeriaCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
