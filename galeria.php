<?php 
$pageTitle = "Galería";
require 'includes/header.php'; 
?>

<!-- Estilos personalizados para el slider (Opcional, pero recomendado) -->
<style>
    .carousel-item img {
        /* Fija una altura máxima para las imágenes del slider */
        max-height: 75vh; /* 75% de la altura de la pantalla */
        object-fit: cover; /* Se asegura que la imagen cubra el espacio sin deformarse */
        width: 100%;
    }

    .carousel-caption {
        /* Añade un fondo oscuro semitransparente a los textos */
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 0.5rem;
        padding: 1rem;
    }

    /* Mejora la visibilidad de las flechas de control */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        padding: 1.2rem;
    }
</style>

<!-- Encabezado de la página (como en tu captura) -->
<div class="page-header" style="text-align: center; padding: 3rem 1.5rem; color: white; background-color: var(--alianza-blue, #003366);">
  <h1 class="display-4 fw-bold">GALERÍA</h1>
  <p class="lead mb-0">Las mejores imágenes de Alianza Lima</p>
</div>

<!-- Contenido de la Galería (El Slider) -->
<div class="container my-5">
  <div class="row">
    <div class="col-lg-10 mx-auto">

      <!-- 
        INICIO DEL SLIDER (Bootstrap Carousel)
        - data-bs-ride="carousel" hace que se mueva solo.
      -->
      <div id="galeriaSlider" class="carousel slide carousel-fade shadow-lg" data-bs-ride="carousel">
        
        <!-- 1. Indicadores (los puntos de abajo) -->
        <div class="carousel-indicators">
          <!-- 
            - data-bs-target debe ser el ID del slider (#galeriaSlider)
            - data-bs-slide-to empieza en 0
            - El primero debe tener la clase 'active'
          -->
          <button type="button" data-bs-target="#galeriaSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#galeriaSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#galeriaSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#galeriaSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#galeriaSlider" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <!-- 2. Contenedor de las Imágenes -->
        <div class="carousel-inner rounded-3">

          <!-- 
            SLIDE 1 (El primero debe tener la clase 'active')
            - Reemplaza 'src' con la ruta a tu imagen.
            - Reemplaza 'alt' con una descripción.
          -->
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="./assets/img/historia/2001.jpg" class="d-block w-100" alt="Foto de la hinchada de Alianza Lima">
            <!-- Texto opcional (Caption) -->
            <div class="carousel-caption d-none d-md-block">
              <h5>La Hinchada Blanquiazul</h5>
              <p>El corazón del club latiendo en Matute.</p>
            </div>
          </div>

          <!-- SLIDE 2 -->
          <div class="carousel-item" data-bs-interval="4000">
            <!-- REEMPLAZA ESTA IMAGEN -->
            <img src="./assets/img/historia/2014.jpg" class="d-block w-100" alt="Foto del equipo campeón">
            <div class="carousel-caption d-none d-md-block">
              <h5>Campeones 2022</h5>
              <p>El equipo levantando la copa.</p>
            </div>
          </div>

          <!-- SLIDE 3 -->
          <div class="carousel-item" data-bs-interval="4000">
            <!-- REEMPLAZA ESTA IMAGEN -->
            <img src="./assets/img/historia/2017.jpg" class="d-block w-100" alt="Foto de un gol histórico">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gol Inolvidable</h5>
              <p>Celebración de un gol clave.</p>
            </div>
          </div>

          <!-- SLIDE 4 -->
          <div class="carousel-item" data-bs-interval="4000">
            <!-- REEMPLAZA ESTA IMAGEN -->
            <img src="./assets/img/historia/2021.jpg" class="d-block w-100" alt="Estadio de Matute">
            <div class="carousel-caption d-none d-md-block">
              <h5>El Alejandro Villanueva</h5>
              <p>Nuestra casa, la caldera.</p>
            </div>
          </div>

          <!-- SLIDE 5 -->
          <div class="carousel-item" data-bs-interval="4000">
            <!-- REEMPLAZA ESTA IMAGEN -->
            <img src="https://placehold.co/1200x700/CCCCCC/003366?text=Leyendas+del+Club" class="d-block w-100" alt="Leyendas del club">
            <div class="carousel-caption d-none d-md-block">
              <h5>Nuestras Leyendas</h5>
              <p>Ídolos que forjaron nuestra historia.</p>
            </div>
          </div>

          <!-- Puedes seguir añadiendo más <div class="carousel-item">...</div> aquí -->

        </div>

        <!-- 3. Controles (Flechas Izquierda/Derecha) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#galeriaSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galeriaSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
      <!-- FIN DEL SLIDER -->

    </div>
  </div>
</div>

<?php 
require 'includes/footer.php'; 
?>
