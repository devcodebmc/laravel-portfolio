<!-- Sección de Encabezado -->
<section class="projects-header">
  @include('layouts.partials.header', [
    'sectionName' => 'projects',
    'placeContent' => 'center',
    'size' => 'clamp(1rem, 1rem + 7vw, 4rem)'
  ])
</section>

<!-- Tarjeta de Proyecto -->
<article class="project-card">
  <div class="project-card__image" style="background-image: url('')"></div>

  <div class="project-card__meta">
    <span class="project-card__date"><></span>
    <span class="project-card__date">{}</span>
  </div>

  <div class="project-card__content">
    <h3 class="project-card__title">Project Name</h3>

    <div class="project-card__links">
      <a href="#" class="project-card__link project-card__link--github" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-github"></i> GitHub
      </a>
      
      <a href="#" class="project-card__link project-card__link--view" target="_blank" rel="noopener noreferrer">
        <i class="fas fa-external-link-alt"></i> View Project
      </a>
    </div>
  </div>

  <nav class="project-card__navigation">
    <a href="#" class="project-card__nav-button project-card__nav-button--prev">
      <i class="fas fa-chevron-left"></i> Previous
    </a>
    <a href="#" class="project-card__nav-button project-card__nav-button--next">
      Next <i class="fas fa-chevron-right"></i>
    </a>
  </nav>
</article>

@push('js')
<script>
  const projects = [
    {
      title: "ByD Solutions",
      image: "../images/projects/bydsolutions.jpg",
      link: "https://bydsolutions.com/",
      github: "https://github.com/ByDsolutions-com/bydsolutions",
      date: "<2020> {01}"
    },
    {
      title: "Bisturí Noticias",
      image: "../images/projects/bisturinoticias.jpg",
      link: "https://bisturinoticias.online/",
      github: "https://github.com/devcodebmc/Bisturi-Noticias",
      date: "<2021> {02}"
    },
    {
      title: "Consorcio Gadus",
      image: "../images/projects/consorciogadus.jpg",
      link: "https://consorciogadus.com/",
      github: "javascript:void(0);",
      date: "<2022> {03}"
    },
    {
      title: "P51",
      image: "../images/projects/p51.jpg",
      link: "https://www.p51.mx/index.html",
      github: "javascript:void(0);",
      date: "<2022> {04}"
    },
    {
      title: "Construcción y Remodelación Lg",
      image: "../images/projects/lg.jpg",
      link: "https://bydsolutions.com/demolg/public/",
      github: "https://github.com/devcodebmc/lg",
      date: "<2024> {05}"
    },
    {
      title: "ZELER TIENDA",
      image: "../images/projects/zeler.jpg",
      link: "https://www.zeler.mx/",
      github: "javascript:void(0);",
      date: "<2024> {06}"
    },
    {
      title: "Portales SAE",
      image: "../images/projects/cotizador.jpg",
      link: "https://cotizador.aiko.com.mx/login.php",
      github: "javascript:void(0);",
      date: "<2024> {07}"
    },
    {
      title: "GEA SEGUIMIENTO Y REPORTEO",
      image: "../images/projects/gea.jpg",
      link: "https://gea.aiko.com.mx/login.php",
      github: "javascript:void(0);",
      date: "<2025> {08}"
    }
    
  ];

  let currentProjectIndex = 0;
  const projectElements = {
    title: document.querySelector(".project-card__title"),
    image: document.querySelector(".project-card__image"),
    link: document.querySelector(".project-card__link--view"),
    github: document.querySelector(".project-card__link--github"),
    date: document.querySelectorAll(".project-card__date"),
    prevBtn: document.querySelector(".project-card__nav-button--prev"),
    nextBtn: document.querySelector(".project-card__nav-button--next")
  };

  function showCurrentProject() {
    const project = projects[currentProjectIndex];
    projectElements.title.textContent = project.title;
    projectElements.image.style.backgroundImage = `url(${project.image})`;
    projectElements.link.setAttribute("href", project.link);
    projectElements.github.setAttribute("href", project.github);
    
    // Actualizar fechas si están definidas en el objeto
    if (project.date) {
      const dateParts = project.date.split(' ');
      projectElements.date[0].textContent = dateParts[0];
      projectElements.date[1].textContent = dateParts[1];
    }
  }

  function navigateProject(direction) {
    currentProjectIndex = (currentProjectIndex + direction + projects.length) % projects.length;
    showCurrentProject();
  }

  projectElements.prevBtn.addEventListener("click", (e) => {
    e.preventDefault();
    navigateProject(-1);
  });

  projectElements.nextBtn.addEventListener("click", (e) => {
    e.preventDefault();
    navigateProject(1);
  });

  // Inicializar
  showCurrentProject();
</script>
@endpush
