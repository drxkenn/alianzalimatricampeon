<?php 
$pageTitle = "Contacto";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-5">Contacto</h1>
  <p class="lead mb-0">Ponte en contacto con nosotros</p>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4 p-md-5">
          <h2 class="fw-bold mb-4 text-center" style="color: var(--alianza-blue);">Formulario de Contacto</h2>
          <p class="text-center text-muted mb-4">
            Este formulario es solo una maqueta visual. No tiene funcionalidad de envío
            (requeriría PHP backend o JavaScript, y JS está prohibido en esta demo).
          </p>
          
          <!-- Formulario de Contacto (Solo Maquetación) -->
          <form>
            <!-- Nombre -->
            <div class="mb-3">
              <label for="inputNombre" class="form-label fw-bold">Nombre Completo</label>
              <input type="text" class="form-control form-control-lg" id="inputNombre" placeholder="Escribe tu nombre" disabled>
            </div>
            
            <!-- Email -->
            <div class="mb-3">
              <label for="inputEmail" class="form-label fw-bold">Correo Electrónico</label>
              <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="tu@correo.com" disabled>
            </div>
            
            <!-- Asunto -->
            <div class="mb-3">
              <label for="inputAsunto" class="form-label fw-bold">Asunto</slabel>
              <select class="form-select form-select-lg" id="inputAsunto" disabled>
                <option selected>Elegir un motivo...</option>
                <option value="1">Sugerencia</option>
                <option value="2">Reportar error</option>
                <option value="3">Consulta general</option>
              </select>
            </div>

            <!-- Mensaje -->
            <div class="mb-3">
              <label for="inputMensaje" class="form-label fw-bold">Mensaje</label>
              <textarea class="form-control form-control-lg" id="inputMensaje" rows="5" placeholder="Escribe tu mensaje aquí..." disabled></textarea>
            </div>
            
            <!-- Botón -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg" disabled>
                Enviar Mensaje (Deshabilitado)
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
