<!-- Encabezado Minimalista -->
<div class="minimal-header">
  @include('layouts.partials.header', [
    'sectionName' => 'Portfolio',
    'placeContent' => 'center', 
    'size' => 'clamp(2rem, 3vw, 3.5rem)'
  ])
</div>

<!-- Bento Grid Container Full-Width -->
<div class="fullwidth-bento-grid">
  <!-- Las tarjetas se generarán dinámicamente con JavaScript -->
</div>

<style>
  /* Variables de diseño */
  :root {
    --primary: #2c3e50;
    --secondary: #6e5bff;
    --light: #f8f9fa;
    --dark: #212529;
    --gray: #e9ecef;
    --light-gray: #f1f3f5;
    --transition: all 0.2s ease;
    --card-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    --card-hover-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  /* Estilos base */
  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: var(--light);
    color: var(--dark);
    line-height: 1.5;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  /* Encabezado */
  .minimal-header {
    padding: 2rem 1rem;
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Contenedor Bento Grid Full-Width */
  .fullwidth-bento-grid {
    width: 100%;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 0;
  }

  /* Items del Bento Grid */
  .fullwidth-bento-item {
    position: relative;
    overflow: hidden;
    aspect-ratio: 1/1;
    transition: var(--transition);
    background-size: cover;
    background-position: center;
    border-right: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }

  .fullwidth-bento-item:hover {
    transform: scale(1.02);
    z-index: 1;
    box-shadow: var(--card-hover-shadow);
  }

  /* Overlay y contenido */
  .fullwidth-bento-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1.2rem;
    opacity: 0;
    transition: var(--transition);
  }

  .fullwidth-bento-item:hover .fullwidth-bento-overlay {
    opacity: 1;
  }

  .fullwidth-bento-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }

  .fullwidth-bento-title {
    color: white;
    font-size: 1.1rem;
    font-weight: 500;
    margin: 0;
    
  }

  .fullwidth-bento-date {
    font-family: 'Fira Code', monospace;
    font-size: 0.7rem;
    color: rgba(255,255,255,0.8);
    background: rgba(0,0,0,0.4);
    padding: 0.2rem 0.4rem;
    border-radius: 3px;
  }

  .fullwidth-bento-links {
    display: flex;
    justify-content: flex-end;
    gap: 0.8rem;
  }

  .fullwidth-bento-link {
    color: white;
    opacity: 0.8;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: rgba(0,0,0,0.5);
    border-radius: 50%;
    padding: 5px;
  }

  .fullwidth-bento-link:hover {
    opacity: 1;
    transform: scale(1.2);
    background: var(--secondary);
    color: var(--light);
  }

  .fullwidth-bento-link svg {
    width: 100%;
    height: 100%;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .fullwidth-bento-grid {
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
  }

  @media (max-width: 480px) {
    .fullwidth-bento-grid {
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
    
    .fullwidth-bento-title {
      font-size: 1rem;
    }
    
    .fullwidth-bento-date {
      font-size: 0.6rem;
    }
    
    .fullwidth-bento-link {
      width: 24px;
      height: 24px;
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
      date: "<2020>"
    },
    {
      title: "Bisturí Noticias",
      image: "../images/projects/bisturinoticias.jpg",
      link: "https://bisturinoticias.online/",
      github: "https://github.com/devcodebmc/Bisturi-Noticias",
      date: "<2021>"
    },
    {
      title: "Consorcio Gadus",
      image: "../images/projects/consorciogadus.jpg",
      link: "https://consorciogadus.com/",
      github: null,
      date: "<2022>"
    },
    {
      title: "P51",
      image: "../images/projects/p51.jpg",
      link: "https://www.p51.mx/index.html",
      github: null,
      date: "<2022>"
    },
    {
      title: "Construcción Lg",
      image: "../images/projects/lg.jpg",
      link: "https://bydsolutions.com/demolg/public/",
      github: "https://github.com/devcodebmc/lg",
      date: "<2024>"
    },
    {
      title: "ZELER TIENDA",
      image: "../images/projects/zeler.jpg",
      link: "https://www.zeler.mx/",
      github: null,
      date: "<2024>"
    },
    {
      title: "Portales SAE",
      image: "../images/projects/cotizador.jpg",
      link: "https://cotizador.aiko.com.mx/login.php",
      github: null,
      date: "<2024>"
    },
    {
      title: "GEA SEGUIMIENTO",
      image: "../images/projects/gea.jpg",
      link: "https://gea.aiko.com.mx/login.php",
      github: null,
      date: "<2025>"
    },
    {
      title: "RECETAS CASERAS",
      image: "../images/projects/recetascaseras.jpg",
      link: "https://recetascaseras.bydsolutions.com/",
      github: "https://github.com/devcodebmc/recetascaseras",
      date: "<2025>"
    }
  ];

  // Renderizar Bento Grid Full-Width
  function renderFullWidthBentoGrid() {
    const bentoGrid = document.querySelector('.fullwidth-bento-grid');
    bentoGrid.innerHTML = '';
    
    projects.forEach((project) => {
      const bentoItem = document.createElement('div');
      bentoItem.className = 'fullwidth-bento-item';
      bentoItem.style.backgroundImage = `url('${project.image}')`;
      
      // Solo mostrar enlaces si existen
      const showDemo = project.link && project.link !== "javascript:void(0);";
      const showGithub = project.github && project.github !== "javascript:void(0);";
      
      bentoItem.innerHTML = `
        <div class="fullwidth-bento-overlay">
          <div class="fullwidth-bento-header">
            <h3 class="fullwidth-bento-title">${project.title}</h3>
            <span class="fullwidth-bento-date">${project.date}</span>
          </div>
          <div class="fullwidth-bento-links">
            ${showGithub ? `
            <a href="${project.github}" target="_blank" class="fullwidth-bento-link" title="GitHub">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017C2 16.425 4.865 20.18 8.839 21.5C9.339 21.584 9.5 21.272 9.5 21V18.5C6.5 19 5.5 17 5.5 17C4.9 15.8 4 15.5 4 15.5C3 14.8 4 14.8 4 14.8C5 14.8 5.6 15.7 5.6 15.7C6.6 17.1 7.8 16.7 9 16.5C9.1 15.9 9.4 15.5 9.7 15.2C7.7 15 5.7 14.2 5.7 10.5C5.7 9.3 6.1 8.3 6.6 7.6C6.5 7.3 6.1 6.3 6.7 4.8C6.7 4.8 7.5 4.5 9.5 6C10.3 5.8 11.2 5.7 12 5.7C12.8 5.7 13.7 5.8 14.5 6C16.5 4.5 17.3 4.8 17.3 4.8C17.9 6.3 17.5 7.3 17.4 7.6C17.9 8.3 18.3 9.3 18.3 10.5C18.3 14.2 16.3 15 14.3 15.2C14.6 15.6 14.9 16.2 14.9 17.1V21C14.9 21.3 15.1 21.6 15.6 21.5C19.1 20.2 22 16.4 22 12.017C22 6.484 17.523 2 12 2Z" clip-rule="evenodd"/>
              </svg>
            </a>
            ` : ''}
            ${showDemo ? `
            <a href="${project.link}" target="_blank" class="fullwidth-bento-link" title="Ver Proyecto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
              </svg>
            </a>
            ` : ''}
          </div>
        </div>
      `;
      
      bentoGrid.appendChild(bentoItem);
    });
  }

  // Inicializar
  document.addEventListener('DOMContentLoaded', renderFullWidthBentoGrid);
</script>
@endpush