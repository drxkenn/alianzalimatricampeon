<?php 
$pageTitle = "Noticias";
require 'includes/header.php'; 
?>

<div class="page-header">
  <h1 class="display-5">Últimas Noticias</h1>
  <p class="lead mb-0">Novedades del Club Alianza Lima</p>
</div>

<div class="container my-5">
  <div class="row g-4">
    
    <!-- Noticia 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="card shadow-sm border-0 rounded-3 h-100">
        <img src="assets/img/noticia/noticia_01.png" class="card-img-top" alt="Imagen de la noticia 1">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold" style="color: var(--alianza-blue);">TRUST SOCIEDAD TITULIZADORA Y ALIANZA LIMA SUSCRIBIERON ACUERDO ESTRATÉGICO</h5>
          <p class="card-text text-muted flex-grow-1">Un nuevo aliado se suma a la familia de Alianza Lima. Esta mañana, el 'Equipo del Pueblo' anunció un acuerdo estratégico con TRUST SOCIEDAD TITULIZADORA...</p>
          <button type="button" class="btn btn-primary mt-auto align-self-start" data-bs-toggle="modal" data-bs-target="#noticia1Modal">
            Leer más
          </button>
        </div>
        <div class="card-footer bg-white border-0 text-muted small">
          Publicado 10/18/25, 2:52 PM
        </div>
      </div>
    </div>
    
    <!-- Noticia 2 -->
    <div class="col-md-6 col-lg-4">
      <div class="card shadow-sm border-0 rounded-3 h-100">
        <img src="https://placehold.co/600x350/EEEEEE/333333?text=Noticia+2" class="card-img-top" alt="Imagen de la noticia 2">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold" style="color: var(--alianza-blue);">Nuevo Refuerzo en la Mira</h5>
          <p class="card-text text-muted flex-grow-1">Se rumorea que el club está en negociaciones avanzadas con un mediocampista argentino para la próxima temporada...</p>
          <button type="button" class="btn btn-primary mt-auto align-self-start" data-bs-toggle="modal" data-bs-target="#noticia2Modal">
            Leer más
          </button>
        </div>
        <div class="card-footer bg-white border-0 text-muted small">
          Publicado hace 1 día
        </div>
      </div>
    </div>
    
    <!-- Noticia 3 -->
    <div class="col-md-6 col-lg-4">
      <div class="card shadow-sm border-0 rounded-3 h-100">
        <img src="https://placehold.co/600x350/EEEEEE/333333?text=Noticia+3" class="card-img-top" alt="Imagen de la noticia 3">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold" style="color: var(--alianza-blue);">Matute se Viste de Gala</h5>
          <p class="card-text text-muted flex-grow-1">El Estadio Alejandro Villanueva presenta mejoras en la iluminación y el césped para los próximos partidos de local...</p>
          <button type="button" class="btn btn-primary mt-auto align-self-start" data-bs-toggle="modal" data-bs-target="#noticia3Modal">
            Leer más
          </button>
        </div>
        <div class="card-footer bg-white border-0 text-muted small">
          Publicado hace 3 días
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- Modal Noticia 1 -->
<div class="modal fade" id="noticia1Modal" tabindex="-1" aria-labelledby="noticia1ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="noticia1ModalLabel">
          TRUST SOCIEDAD TITULIZADORA Y ALIANZA LIMA SUSCRIBIERON ACUERDO ESTRATÉGICO
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/noticia/noticia_011.jpg" class="img-fluid rounded mb-4" alt="Trust y Alianza Lima">

        <p>
          Un nuevo aliado se suma a la familia de Alianza Lima. Esta mañana, el ‘Equipo del Pueblo’ anunció un acuerdo estratégico con 
          <strong>TRUST SOCIEDAD TITULIZADORA S.A.</strong>, empresa que se dedica principalmente a la estructuración de fideicomisos de titulización.
        </p>

        <p>
          Este vínculo legal permitirá al club acceder a servicios especializados y generación de patrimonios autónomos para la protección, mejor gestión 
          y oportunidades de inversión de cara a que los activos de Alianza Lima puedan generar el mejor rendimiento posible y de la forma más segura 
          en el desarrollo de sus actividades.
        </p>

        <p>
          El acuerdo entre ambas entidades servirá para el cumplimiento de los objetivos de Alianza Lima, que es generar la mayor cantidad de oportunidades 
          y beneficios para todas nuestras disciplinas y categorías.
        </p>

        <p>
          <strong>José Asti</strong>, Gerente Legal de Alianza Lima, mencionó sobre el acuerdo lo siguiente: 
          <em>
            “Lograr firmas de contratos con empresas de servicios financieros, que están reguladas ante la SMV, como en el caso de TRUST, es no solo parte 
            de una estrategia en la administración del club para hacer más eficiente el uso de recursos, sino también de darle seriedad y confianza al mercado 
            de que Alianza Lima es una institución que busca la excelencia en su manejo financiero de cara al cumplimiento de sus objetivos”.
          </em>
        </p>

        <p>
          Por su parte, <strong>Diana Melgarejo</strong>, Gerente General de TRUST, destacó: 
          <em>
            “Gracias al Club Alianza Lima por elegirnos. Valoramos la confianza y estamos comprometidos a ofrecerles el mejor servicio”.
          </em>
        </p>

        <p class="fw-bold text-center text-primary mt-4">
          ¡Arriba TRUST! ¡Arriba Alianza! ¡Toda la vida!
        </p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Noticia 2 -->
<div class="modal fade" id="noticia2Modal" tabindex="-1" aria-labelledby="noticia2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="noticia2ModalLabel">Nuevo Refuerzo en la Mira</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="https://placehold.co/1200x600/EEEEEE/333333?text=Nuevo+Refuerzo" class="img-fluid rounded mb-4" alt="Nuevo Refuerzo">
        <p>Alianza Lima está en negociaciones avanzadas con un destacado mediocampista argentino para reforzar el equipo de cara a la próxima temporada. Las conversaciones se encuentran en una etapa crucial y se espera cerrar el acuerdo en los próximos días.</p>
        <p>El jugador, con experiencia en la Primera División argentina y participación en torneos internacionales, podría ser un valioso aporte para el mediocampo blanquiazul.</p>
        <p>Los detalles finales del contrato están siendo ultimados por la directiva del club, y se espera hacer el anuncio oficial una vez se concrete la transferencia.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Noticia 3 -->
<div class="modal fade" id="noticia3Modal" tabindex="-1" aria-labelledby="noticia3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="noticia3ModalLabel">Matute se Viste de Gala</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="https://placehold.co/1200x600/EEEEEE/333333?text=Estadio+Matute" class="img-fluid rounded mb-4" alt="Estadio Matute">
        <p>El Estadio Alejandro Villanueva, conocido cariñosamente como Matute, ha sido sometido a importantes mejoras en su infraestructura. Las obras incluyen una actualización completa del sistema de iluminación y una renovación integral del césped.</p>
        <p>El nuevo sistema de iluminación LED cumple con los estándares internacionales más exigentes, permitiendo una mejor experiencia tanto para los jugadores como para los espectadores y las transmisiones televisivas.</p>
        <p>El césped ha sido tratado con las últimas técnicas de mantenimiento deportivo, asegurando una superficie de juego óptima para la práctica del fútbol profesional.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
