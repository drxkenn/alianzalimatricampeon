<!-- 
  Navbar principal. 
  Usamos 'sticky-top' para que se quede fija arriba.
  'navbar-dark' y 'bg-alianza' (clase personalizada) para el estilo.
-->
<nav class="navbar navbar-expand-lg navbar-dark bg-alianza sticky-top shadow-sm">
  <div class="container">
    
    <!-- Marca y Escudo -->
    <a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>index.php">
      <img src="<?php echo BASE_URL; ?>assets/img/logo.png" alt="Escudo Alianza Lima" width="30" height="30" class="d-inline-block align-text-top me-2">
      <span class="fw-bold">Alianza Transfer</span>
    </a>
    
    <!-- Botón Hamburguesa (Móvil) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Links del Menú -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>index.php">Inicio</a>
        </li>
        
        <!-- Dropdown Club -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownClub" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Club
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownClub">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>historia.php">Historia</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>titulos.php">Títulos</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>estadio.php">Estadio</a></li>
          </ul>
        </li>
        
        <!-- Dropdown Equipo -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownEquipo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Equipo
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownEquipo">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>jugadores.php">Jugadores (Valor)</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>plantel.php">Plantel</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>estadisticas.php">Estadísticas</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>fichajes.php">Fichajes</a>
        </li>
        
        <!-- Dropdown Media -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownMedia" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Media
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMedia">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>noticias.php">Noticias</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>galeria.php">Galería</a></li>
          </ul>
        </li>
        
        <!-- Dropdown Proyecto -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownProyecto" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proyecto
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownProyecto">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>contacto.php">Contacto</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>sobre.php">Sobre el Proyecto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
