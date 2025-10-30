<?php
  define('BASE_URL', '/alianza/'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle . ' - Alianza Transfer' : 'Alianza Transfer'; ?></title>
  
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Google Fonts (Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/navbar.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/index.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/sobre.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/galeria.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/historia.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/plantel.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/estadisticas.css">
</head>
<body class="bg-light">

<?php require 'navbar.php'; ?>

<!-- Contenedor principal -->
<main class="container-fluid p-0">
