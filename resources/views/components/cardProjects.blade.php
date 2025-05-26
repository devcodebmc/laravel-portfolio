<!-- Encabezado Minimalista -->
<div class="portfolio-header">
  @include('layouts.partials.header', [
    'sectionName' => 'Portfolio',
    'placeContent' => 'center', 
    'size' => 'clamp(2rem, 3vw, 3.5rem)'
  ])
</div>

<!-- Contenedor de proyectos -->
<div class="portfolio-container">
  <div class="portfolio-grid" id="portfolio-grid">
    <!-- Las tarjetas se generarán dinámicamente con JavaScript -->
  </div>
</div>

<script>
  const projects = [
    {
      title: "ByD Solutions",
      image: "../images/projects/bydsolutions.jpg",
      link: "https://bydsolutions.com/",
      github: "https://github.com/ByDsolutions-com/bydsolutions",
      date: "2020",
      description: "Plataforma de soluciones tecnológicas para empresas con sistema de gestión integral.",
      technologies: ["Laravel", "JavaScript", "MySQL", "Uikit"]
    },
    {
      title: "Bisturí Noticias",
      image: "../images/projects/bisturinoticias.jpg",
      link: "https://bisturinoticias.online/",
      github: "https://github.com/devcodebmc/Bisturi-Noticias",
      date: "2021",
      description: "Sitio de noticias con enfoque en salud y ciencia con sistema de suscripciones.",
      technologies: ["WordPress", "PHP", "JavaScript", "CSS3"]
    },
    {
      title: "Consorcio Gadus",
      image: "../images/projects/consorciogadus.jpg",
      link: "https://consorciogadus.com/",
      github: null,
      date: "2022",
      description: "Sitio corporativo para empresa de construcción con portafolio de proyectos.",
      technologies: ["HTML5", "CSS3", "JavaScript", "Bootstrap", "PHP"]
    },
    {
      title: "P51",
      image: "../images/projects/p51.jpg",
      link: "https://www.p51.mx/index.html",
      github: null,
      date: "2022",
      description: "Plataforma de gestión de recursos humanos con dashboard administrativo.",
      technologies: ["HTML5", "CSS3", "JavaScript"]
    },
    {
      title: "Construcción Lg",
      image: "../images/projects/lg.jpg",
      link: "https://bydsolutions.com/demolg/public/",
      github: "https://github.com/devcodebmc/lg",
      date: "2024",
      description: "Sitio web para empresa constructora con galería de proyectos y formularios de contacto.",
      technologies: ["PHP", "Laravel", "MySQL", "Uikit", "javaScript"]
    },
    {
      title: "ZELER TIENDA",
      image: "../images/projects/zeler.jpg",
      link: "https://www.zeler.mx/",
      github: null,
      date: "2024",
      description: "E-commerce para productos tecnológicos con carrito de compras y pasarela de pagos.",
      technologies: ["WordPress", "WooCommerce", "JavaScript", "CSS3", "HTML5"]
    },
    {
      title: "Portales SAE",
      image: "../images/projects/cotizador.jpg",
      link: "https://cotizador.aiko.com.mx/login.php",
      github: null,
      date: "2024",
      description: "Sistema de cotización para empresa de servicios con generación de PDF.",
      technologies: ["PHP", "JQuery", "MySQL", "SQL Server", "Bootstrap"]
    },
    {
      title: "GEA SEGUIMIENTO",
      image: "../images/projects/gea.jpg",
      link: "https://gea.aiko.com.mx/login.php",
      github: null,
      date: "2025",
      description: "Sistema de seguimiento de proyectos con calendario y asignación de tareas.",
      technologies: ["PHP", "jQuery", "MySQL", "Bootstrap"]
    },
    {
      title: "RECETAS CASERAS",
      image: "../images/projects/recetascaseras.jpg",
      link: "https://recetascaseras.bydsolutions.com/",
      github: "https://github.com/devcodebmc/recetascaseras",
      date: "2025",
      description: "Blog de recetas con sistema de búsqueda, categorías y favoritos.",
      technologies: ["PHP", "Laravel", "PostgreSQL", "Supabase", "Tailwind CSS", "JavaScript"]
    }
  ];

  // Renderizar Portfolio Grid
  function renderPortfolioGrid() {
    const portfolioGrid = document.getElementById('portfolio-grid');
    
    projects.forEach((project) => {
      const projectCard = document.createElement('div');
      projectCard.className = 'project-card';
      
      const showDemo = project.link && project.link !== "javascript:void(0);";
      const showGithub = project.github && project.github !== "javascript:void(0);";
      
      projectCard.innerHTML = `
        <div class="project-image">
          <img src="${project.image}" alt="${project.title}" loading="lazy">
        </div>
        <div class="project-content">
          <div class="project-header">
            <h3>${project.title}</h3>
            <span class="project-date">${project.date}</span>
          </div>
          <p class="project-description">${project.description}</p>
          <div class="project-technologies">
            ${project.technologies.map(tech => `<span>${tech}</span>`).join('')}
          </div>
          <div class="project-footer">
            ${showGithub ? `<a href="${project.github}" target="_blank" class="btn">Github</a>` : '<span class="btn-placeholder"></span>'}
            ${showDemo ? `<a href="${project.link}" target="_blank" class="btn">Ver proyecto</a>` : '<span class="btn-placeholder"></span>'}
          </div>
        </div>
      `;
      
      portfolioGrid.appendChild(projectCard);
    });
  }

  // Inicializar
  document.addEventListener('DOMContentLoaded', renderPortfolioGrid);
</script>

<style>
  /* Estilos minimalistas */
  .portfolio-header {
    text-align: center;
    margin: 3rem 0;
    padding: 0 1rem;
  }
  
  .portfolio-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
  }
  
  .portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
  }
  
  .project-card {
    border: 1px solid #eaeaea;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: white;
    display: flex;
    flex-direction: column;
    height: 100%;
  }
  
  .project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }
  
  .project-image {
    height: 200px;
    overflow: hidden;
  }
  
  .project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }
  
  .project-card:hover .project-image img {
    transform: scale(1.05);
  }
  
  .project-content {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }
  
  .project-header {
    margin-bottom: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .project-header h3 {
    margin: 0;
    font-size: 1.25rem;
    color: #333;
  }
  
  .project-date {
    font-size: 0.85rem;
    color: #666;
  }
  
  .project-description {
    color: #555;
    line-height: 1.5;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
  }
  
  .project-technologies {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
  }
  
  .project-technologies span {
    font-size: 0.75rem;
    padding: 0.3rem 0.7rem;
    background: #f5f5f5;
    color: #444;
    border-radius: 20px;
  }
  
  .project-footer {
    margin-top: auto;
    display: flex;
    gap: 1rem;
    padding-top: 1rem;
  }
  
  .btn-placeholder {
    visibility: hidden;
  }
  .btn {
    flex: 1;
    text-align: center;
    transition: background 0.3s ease;
  }
  @media (max-width: 768px) {
    .portfolio-grid {
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 1.5rem;
    }
    
    .project-image {
      height: 180px;
    }
  }
  
  @media (max-width: 480px) {
    .portfolio-grid {
      grid-template-columns: 1fr;
    }
    
    .project-footer {
      flex-direction: column;
    }
  }
</style>