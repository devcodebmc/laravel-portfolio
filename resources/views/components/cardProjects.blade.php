<!-- Portfolio Section - Adaptado fielmente del CodePen -->
<section class="section-portfolio">
  <div class="portfolio-header">
    @include('layouts.partials.header', [
      'sectionName' => 'Portfolio',
      'placeContent' => 'center', 
      'size' => 'clamp(2rem, 3vw, 3.5rem)'
    ])
  </div>

  <!-- Contenedor con Spectre -->
  <div class="container">
    <div class="columns">
      <div class="column col-12 text-center">
        <!-- Filtros de proyectos - Estilo exacto del CodePen -->
        <div class="project-filter">
          <a href="#" class="btn btn-sm filter active" data-filter="*">Todos</a>
          <a href="#" class="btn btn-sm filter" data-filter=".laravel">Laravel</a>
          <a href="#" class="btn btn-sm filter" data-filter=".wordpress">WordPress</a>
          <a href="#" class="btn btn-sm filter" data-filter=".ecommerce">E-commerce</a>
          <a href="#" class="btn btn-sm filter" data-filter=".php">PHP</a>
        </div>
      </div>
    </div>

    <!-- Grid de proyectos - Estructura fiel al CodePen -->
    <div id="project-grid" class="columns project-grid">

      <!-- Proyecto : Eventos Especiales Lerma -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 laravel php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/eventos-especiales-lerma.jpg') }}" alt="Eventos Especiales Lerma" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://eventosespecialeslerma.com/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
              <a href="https://github.com/devcodebmc/eventosespeciales" target="_blank" class="btn btn-action circle" title="Ver repositorio">
                <i class="icon icon-share"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://eventosespecialeslerma.com/" target="_blank">Eventos Especiales Lerma</a>
            </h3>
            <span class="project__category">Laravel • PHP • Js • MySQL • Tailwind</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : CHRISTEL HOUSE  -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/cristelhouse.jpg') }}" alt="CHRISTEL HOUSE" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://pagos-christelhouse.aiko.com.mx/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
                <a href="https://pagos-christelhouse.aiko.com.mx/" target="_blank">CHRISTEL HOUSE</a>
              </h3>
            <span class="project__category">PHP • MySQL • Js • Bootstrap</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : ByD Solutions -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 laravel php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/bydsolutions.jpg') }}" alt="ByD Solutions" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://bydsolutions.com/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
              <a href="https://github.com/ByDsolutions-com/bydsolutions" target="_blank" class="btn btn-action circle" title="Ver repositorio">
                <i class="icon icon-share"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://bydsolutions.com/" target="_blank">ByD Solutions</a>
            </h3>
            <span class="project__category">Laravel • MySQL • Uikit • Js</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : TRANSPORTES SR  -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php wordpress">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/transportessr.jpg') }}" alt="TRANSPORTES SR" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://factura-transportessr.aiko.com.mx/login.php" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
                <a href="https://factura-transportessr.aiko.com.mx/login.php" target="_blank">TRANSPORTES SR</a>
              </h3>
            <span class="project__category">PHP • MySQL • Js • Bootstrap</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : JULIÁ TOURS  -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php wordpress">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/juliatours.jpg') }}" alt="JULIÁ TOURS" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://www.juliatours.com.mx/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
                <a href="https://www.juliatours.com.mx/" target="_blank">JULIÁ TOURS</a>
              </h3>
            <span class="project__category">PHP • Wordpress • MySQL • Js</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : Construcción LG -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 laravel">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/lg.jpg') }}" alt="Construcción LG" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://bydsolutions.com/demolg/public/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
              <a href="https://github.com/devcodebmc/lg" target="_blank" class="btn btn-action circle" title="Ver repositorio">
                <i class="icon icon-share"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://bydsolutions.com/demolg/public/" target="_blank">Construcción LG</a>
            </h3>
            <span class="project__category">Laravel • MySQL • Uikit • Js</span>
          </div>
        </div>
      </div>

            <!-- Proyecto : ZELER TIENDA -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 wordpress ecommerce">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/zeler.jpg') }}" alt="ZELER TIENDA" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://www.zeler.mx/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://www.zeler.mx/" target="_blank">ZELER TIENDA</a>
            </h3>
            <span class="project__category">WordPress • WooCommerce • MySQL • PHP</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : P51 -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/p51.jpg') }}" alt="P51" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://www.p51.mx/index.html" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://www.p51.mx/index.html" target="_blank">P51</a>
            </h3>
            <span class="project__category">HTML5 • CSS3 • JavaScript</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : LA COMARCA -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php wordpress">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/lacomarca.jpg') }}" alt="LA COMARCA" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://www.lacomarcaonline.com/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://www.lacomarcaonline.com/" target="_blank">LA COMARCA</a>
            </h3>
            <span class="project__category">PHP • jQuery • MySQL</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : ARTIPROMO  -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/artipromo.jpg') }}" alt="ARTIPROMO" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://artipromo.com.mx/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://artipromo.com.mx/" target="_blank">ARTIPROMO</a>
            </h3>
            <span class="project__category">PHP • js • MySQL • APIS • Web Services </span>
          </div>
        </div>
      </div>

      <!-- Proyecto : GEA SEGUIMIENTO -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/gea.jpg') }}" alt="GEA SEGUIMIENTO" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://gea.aiko.com.mx/login.php" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://gea.aiko.com.mx/login.php" target="_blank">GEA SEGUIMIENTO</a>
            </h3>
            <span class="project__category">PHP • jQuery • MySQL • Web Services</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : Consorcio Gadus -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/consorciogadus.jpg') }}" alt="Consorcio Gadus" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://consorciogadus.com/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://consorciogadus.com/" target="_blank">Consorcio Gadus</a>
            </h3>
            <span class="project__category">HTML5 • Bootstrap • PHP</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : Portales SAE -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/cotizador.jpg') }}" alt="Portales SAE" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://cotizador.aiko.com.mx/login.php" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://cotizador.aiko.com.mx/login.php" target="_blank">Portales SAE</a>
            </h3>
            <span class="project__category">PHP • jQuery • MySQL • SQl Server</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : RECETAS CASERAS -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 laravel">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/recetascaseras.jpg') }}" alt="RECETAS CASERAS" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://recetascaseras.bydsolutions.com/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
              <a href="https://github.com/devcodebmc/recetascaseras" target="_blank" class="btn btn-action circle" title="Ver repositorio">
                <i class="icon icon-share"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://recetascaseras.bydsolutions.com/" target="_blank">RECETAS CASERAS</a>
            </h3>
            <span class="project__category">Laravel • PostgreSQL • Tailwind</span>
          </div>
        </div>
      </div>

      <!-- Proyecto : SUNRISE  -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/sunrise.jpg') }}" alt="SUNRISE" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://sunriseexpendingmachine.com/" target="_blank" class="btn btn-action circle" title="Ver sitio web">
                <i class="icon icon-link"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://sunriseexpendingmachine.com/" target="_blank">SUNRISE</a>
            </h3>
            <span class="project__category">PHP • js • Html • Css </span>
          </div>
        </div>
      </div>

      <!-- Proyecto : BÍSTURI NOTICIAS -->
      <div class="column col-3 col-md-6 col-sm-12 project project--hover-2 php laravel">
        <div class="project__img-holder">
          <img src="{{ asset('images/projects/bisturinoticias.jpg') }}" alt="Bísturi Noticias" class="project__img">
          <div class="project__overlay">
            <div class="project__icons">
              <a href="https://github.com/devcodebmc/Bisturi-Noticias" target="_blank" class="btn btn-action circle" title="Ver repositorio">
                <i class="icon icon-share"></i>
              </a>
            </div>
          </div>
          <div class="project__description">
            <h3 class="project__title">
              <a href="https://github.com/devcodebmc/Bisturi-Noticias" target="_blank">BÍSTURI NOTICIAS</a>
            </h3>
            <span class="project__category">PHP • Laravel • MySQL • Uikit • Js</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* Variables personalizadas basadas en el CodePen */
:root {
  --portfolio-primary: #5755D9; /* Color naranja del CodePen */
  --portfolio-primary-hover: #5f57e0;
  --portfolio-overlay: rgba(0, 0, 0, 0.7);
  --portfolio-text: #28465a;
  --portfolio-text-light: #7a7a7a;
  --portfolio-bg: #F7F9FA;
}

/* Estilos generales */
.section-portfolio {
  padding: 4rem 0;
  background-color: var(--portfolio-bg);
}

.portfolio-header {
  text-align: center;
  margin-bottom: 2rem;
}

/* Filtros - Estilo exacto del CodePen */
.project-filter {
  display: flex;
  justify-content: center;
  margin-bottom: 40px;
  cursor: default;
}

.project-filter .btn.filter {
  display: inline-block;
  margin-right: 10px;
  font-size: 13px;
  transition: all 0.3s ease-in-out;
}

/* Grid de proyectos - Adaptado para Spectre */
.columns.project-grid {
  margin-left: -4px;
  margin-right: -4px;
  margin-bottom: 2rem;
}

.columns.project-grid .column {
  padding: 0 4px;
  margin-bottom: 16px;
}

/* Contenedor de proyecto */
.project {
  overflow: hidden;
  display: block;
  position: relative;
}

.project__img-holder {
  position: relative;
  width: 100%;
  aspect-ratio: 4/3;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.7);
}

.project__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.3s ease-in-out;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

/* Overlay con efecto hover - Exacto al CodePen */
.project__overlay {
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  text-align: center;
  background-color: var(--portfolio-overlay);
  transition: all 0.3s ease-in-out;
}

/* Íconos - Estilo exacto del CodePen */
.project__icons {
  position: absolute;
  top: 0;
  width: 100%;
  text-align: center;
  margin-top: -20px;
  transition: all 0.3s ease-in-out;
}

.project__icons .btn {
  display: inline-block;
  width: 40px;
  height: 40px;
  font-size: 14px;
  margin: 0 3px;
  line-height: 40px;
  text-align: center;
  color: #333333;
  background-color: #fff;
  border-radius: 100px;
  transition: all 0.3s ease-in-out;
  padding: 0;
  border: none;
}

.project__icons .btn:hover {
  color: #fff;
  background-color: var(--portfolio-primary);
}

/* Descripción del proyecto - Estilo "cinta" del CodePen */
.project__description {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 13px 20px;
  background-color: #fff;
  display: block;
  text-align: left;
  transform: translateY(100%);
  z-index: 2;
  transition: all 0.3s ease-in-out;
}

.project__title {
  margin-bottom: 0;
  text-transform: none;
  letter-spacing: 0;
  font-size: 14px;
  line-height: 1.3;
  font-weight: 600;
  color: var(--portfolio-text);
}

.project__title a {
  color: inherit;
  text-decoration: none;
}

.project__title:hover a {
  color: var(--portfolio-primary);
}

.project__category {
  font-size: 13px;
  font-style: italic;
  color: var(--portfolio-text-light);
  display: block;
}

.project__category a {
  color: inherit;
}

.project__category:hover a {
  color: var(--portfolio-primary);
}

/* EFECTO HOVER 2 - EXACTO AL CODEPEN */
/* Esta es la clave: el hover mueve la descripción hacia arriba y los íconos al centro */
.project--hover-2:hover .project__overlay {
  opacity: 1;
  visibility: visible;
}

.project--hover-2:hover .project__description {
  transform: translateY(-100%);
  bottom: auto;
}

.project--hover-2:hover .project__img {
  transform: translateY(-30px);
}

.project--hover-2:hover .project__icons {
  top: 42%;
}

/* Responsive - Adaptado del CodePen */
@media screen and (max-width: 35.5em) {
  .columns.project-grid .column {
    width: 100% !important;
  }

  .project-filter .btn.filter {
    display: block;
    margin-top: 8px;
    margin-right: 0;
    width: 100%;
  }
}

/* Ajustes para tamaños de pantalla medianos */
@media (max-width: 960px) {
  .columns.project-grid .column.col-md-6 {
    width: 50%;
  }
}

/* Ajustes para tamaños de pantalla pequeños */
@media (max-width: 600px) {
  .section-portfolio {
    padding: 2rem 0;
  }
  
  .columns.project-grid .column.col-sm-12 {
    width: 100%;
  }
}
</style>

<!-- Scripts - Mantenemos Isotope como en el CodePen -->
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<script>
$(document).ready(function() {
  /* Isotope Filter - Exacto al CodePen */
  var $portfolioFilter = $('#project-grid');
  
  $('.project-filter').on('click', 'a', function(e) {
    e.preventDefault();
    var filterValue = $(this).attr('data-filter');
    $portfolioFilter.isotope({ filter: filterValue });
    $('.project-filter a').removeClass('active');
    $(this).addClass('active');
  });

  /* Portfolio con imagesLoaded - Exacto al CodePen */
  $portfolioFilter.imagesLoaded(function() {
    $portfolioFilter.isotope({
      itemSelector: '.project',
      layoutMode: 'fitRows',
      percentPosition: true
    });
  });
});
</script>
@endpush