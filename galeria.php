<?php 
$pageTitle = "Galería";
require 'includes/header.php'; 
?>

<!-- Encabezado de la página (minimalista) -->
<div class="page-header" style="text-align: center; padding: 3rem 1.5rem; color: white; background-color: var(--alianza-blue, #003366);">
  <h1 class="display-4 fw-bold">GALERÍA</h1>
  <p class="lead mb-0">Las mejores imágenes de Alianza Lima</p>
</div>

<!-- Gallery: grid de cards responsive y minimalistas -->
<div class="container my-5">
  <div class="row g-4">

    <?php
    // Fotos históricas por año ganadas (ajusta las rutas si hace falta)
    $images = [
      ['year' => '2001', 'src' => 'assets/img/historia/2001.jpg', 'title' => 'Campeón 2001'],
      ['year' => '2010', 'src' => 'assets/img/historia/1933.jpg', 'title' => 'Campeón 1993'],
      ['year' => '2014', 'src' => 'assets/img/historia/2014.jpg', 'title' => 'Campeón 2014'],
      ['year' => '2017', 'src' => 'assets/img/historia/2017.jpg', 'title' => 'Campeón 2017'],
      ['year' => '2021', 'src' => 'assets/img/historia/2021.jpg', 'title' => 'Campeón 2021'],
      ['year' => 'Leyendas', 'src' => 'assets/img/historia/leyendas.webp', 'title' => 'Leyendas del club']
    ];

    foreach ($images as $img): ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card gallery-card h-100 border-0 shadow-sm position-relative">
          <div class="ratio ratio-4x3 overflow-hidden position-relative">
            <img src="<?php echo $img['src']; ?>" loading="lazy" class="card-img-top gallery-img" alt="<?php echo htmlspecialchars($img['title']); ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title mb-1 small text-uppercase fw-semibold"><?php echo htmlspecialchars($img['title']); ?></h5>
            <p class="card-text text-muted small mb-0">Año: <span class="fw-bold"><?php echo htmlspecialchars($img['year']); ?></span></p>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
</div>

<?php
require 'includes/footer.php'; 
?>
