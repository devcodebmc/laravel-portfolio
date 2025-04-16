<!-- Encabezado Minimalista -->
<div class="minimal-header">
  @include('layouts.partials.header', [
    'sectionName' => 'Portfolio',
    'placeContent' => 'center', 
    'size' => 'clamp(2rem, 3vw, 3.5rem)'
  ])
</div>

<!-- Contenedor Principal -->
<div class="minimal-portfolio">
  <!-- Tarjeta de Proyecto -->
  <div class="project-card">
    <!-- Sección de Imagen -->
    <div class="project-image-container">
      <div class="project-image" style="background-image: url('')"></div>
      <div class="project-meta">
        <span class="project-date"><></span>
      </div>
    </div>

    <!-- Sección de Contenido -->
    <div class="project-content">
      <h2 class="project-title">Project Name</h2>
      
      <div class="project-tech">
        <span>HTML</span>
        <span>CSS</span>
        <span>JS</span>
      </div>
      
      <div class="project-actions">
        <a href="#" class="minimal-btn code-btn" target="_blank" rel="noopener noreferrer">
          <i class="icon icon-code"></i> Code
        </a>
        <a href="#" class="minimal-btn demo-btn" target="_blank" rel="noopener noreferrer">
          <i class="icon icon-external-link"></i> Demo
        </a>
      </div>
    </div>

    <!-- Controles de Navegación -->
    <div class="project-nav">
      <button class="nav-btn prev-btn">
        <i class="icon icon-arrow-left"></i>
      </button>
      <span class="project-counter">1/8</span>
      <button class="nav-btn next-btn">
        <i class="icon icon-arrow-right"></i>
      </button>
    </div>
  </div>
</div>

<style>
  /* Variables de diseño */
  :root {
    --primary: #2c3e50;
    --secondary: #807fe2;
    --light: #f8f9fa;
    --dark: #212529;
    --gray: #e9ecef;
    --transition: all 0.3s ease-out;
  }

  /* Estilos base */
  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: var(--light);
    color: var(--dark);
    line-height: 1.6;
  }

  /* Encabezado */
  .minimal-header {
    padding: 3rem 1rem 1rem;
    text-align: center;
  }

  /* Contenedor principal */
  .minimal-portfolio {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem;
  }

  /* Tarjeta de proyecto */
  .project-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
  }

  /* Imagen del proyecto */
  .project-image-container {
    position: relative;
  }

  .project-image {
    width: 100%;
    height: 100%;
    min-height: 400px;
    background-size: cover;
    background-position: center;
    transition: var(--transition);
  }

  .project-card:hover .project-image {
    transform: scale(1.01);
  }

  .project-meta {
    position: absolute;
    bottom: 1.5rem;
    left: 1.5rem;
  }

  .project-date {
    font-family: 'Fira Code', monospace;
    font-size: 0.9rem;
    color: white;
    background: rgba(0, 0, 0, 0.4);
    padding: 0.4rem 0.8rem;
    border-radius: 4px;
    backdrop-filter: blur(5px);
  }

  /* Contenido del proyecto */
  .project-content {
    padding: 2.5rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .project-title {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: var(--primary);
  }

  .project-tech {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
  }

  .project-tech span {
    font-size: 0.85rem;
    padding: 0.3rem 0.8rem;
    background: var(--gray);
    border-radius: 4px;
    color: var(--primary);
  }

  /* Botones */
  .project-actions {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
  }

  .minimal-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.8rem 1.5rem;
    font-size: 0.95rem;
    border-radius: 4px;
    text-decoration: none;
    transition: var(--transition);
    border: 1px solid transparent;
  }

  .code-btn {
    background: var(--dark);
    color: white;
  }

  .demo-btn {
    background: white;
    color: var(--secondary);
    border-color: var(--secondary);
  }

  .minimal-btn:hover {
    transform: translateY(-2px);
  }

  /* Navegación */
  .project-nav {
    grid-column: span 2;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    padding: 1.5rem;
    border-top: 1px solid var(--gray);
  }

  .nav-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border: 1px solid var(--gray);
    color: var(--dark);
    cursor: pointer;
    transition: var(--transition);
  }

  .nav-btn:hover {
    border-color: var(--secondary);
    color: var(--secondary);
  }

  .project-counter {
    font-size: 0.9rem;
    color: var(--dark);
    opacity: 0.7;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .project-card {
      grid-template-columns: 1fr;
    }
    
    .project-image {
      min-height: 300px;
    }
  }

  @media (max-width: 576px) {
    .project-content {
      padding: 1.5rem;
    }
    
    .project-actions {
      flex-direction: column;
    }
    
    .minimal-btn {
      justify-content: center;
    }
  }
</style>

@push('js')
<script>
  const projects = [
    {
      title: "ByD Solutions",
      image: "../images/projects/bydsolutions.jpg",
      link: "https://bydsolutions.com/",
      github: "https://github.com/ByDsolutions-com/bydsolutions",
      date: "<2020> {01}",
      tech: ["HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "Uikit"]
    },
    {
      title: "Bisturí Noticias",
      image: "../images/projects/bisturinoticias.jpg",
      link: "https://bisturinoticias.online/",
      github: "https://github.com/devcodebmc/Bisturi-Noticias",
      date: "<2021> {02}",
      tech: ["HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "Bootstrap"]
    },
    {
      title: "Consorcio Gadus",
      image: "../images/projects/consorciogadus.jpg",
      link: "https://consorciogadus.com/",
      github: "javascript:void(0);",
      date: "<2022> {03}",
      tech: ["HTML", "CSS", "JavaScript"]
    },
    {
      title: "P51",
      image: "../images/projects/p51.jpg",
      link: "https://www.p51.mx/index.html",
      github: "javascript:void(0);",
      date: "<2022> {04}",
      tech: ["HTML", "CSS", "JavaScript"]
    },
    {
      title: "Construcción y Remodelación Lg",
      image: "../images/projects/lg.jpg",
      link: "https://bydsolutions.com/demolg/public/",
      github: "https://github.com/devcodebmc/lg",
      date: "<2024> {05}",
      tech: ["HTML", "CSS", "JavaScript", "PHP", "Laravel", "MySQL", "Uikit"]
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
    title: document.querySelector(".project-title"),
    image: document.querySelector(".project-image"),
    link: document.querySelector(".demo-btn"),
    github: document.querySelector(".code-btn"),
    date: document.querySelector(".project-date"),
    tech: document.querySelector(".project-tech"),
    counter: document.querySelector(".project-counter"),
    prevBtn: document.querySelector(".prev-btn"),
    nextBtn: document.querySelector(".next-btn")
  };

  function showCurrentProject() {
    const project = projects[currentProjectIndex];
    
    projectElements.title.textContent = project.title;
    projectElements.image.style.backgroundImage = `url(${project.image})`;
    projectElements.link.setAttribute("href", project.link);
    projectElements.github.setAttribute("href", project.github);
    projectElements.date.textContent = project.date;
    projectElements.counter.textContent = `${currentProjectIndex + 1}/${projects.length}`;
    
    // Actualizar tecnologías
    projectElements.tech.innerHTML = project.tech
      .map(tech => `<span>${tech}</span>`)
      .join('');
  }

  function navigateProject(direction) {
    currentProjectIndex = (currentProjectIndex + direction + projects.length) % projects.length;
    showCurrentProject();
  }

  projectElements.prevBtn.addEventListener("click", () => navigateProject(-1));
  projectElements.nextBtn.addEventListener("click", () => navigateProject(1));

  // Navegación con teclado
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') navigateProject(-1);
    if (e.key === 'ArrowRight') navigateProject(1);
  });

  // Inicializar
  showCurrentProject();
</script>
@endpush