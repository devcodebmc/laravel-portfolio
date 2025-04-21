<section class="skills-editor">
  <div class="editor-container">
    <!-- Barra superior del editor -->
    <div class="editor-header">
      <div class="editor-dots">
        <span class="dot red"></span>
        <span class="dot yellow"></span>
        <span class="dot green"></span>
      </div>
      <div class="editor-title">
        <i class="devicon-javascript-plain colored"></i> skills.js
      </div>
    </div>
    
    <!-- Contenido del editor -->
    <div class="editor-body">
      <div class="line-numbers">
        <span></span><span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span>
      </div>
      
      <div class="code-content">
        <div class="code-line">
          <span class="comment">// My Tech Stack & Skills</span>
        </div>
        <div class="code-line">
          <span class="keyword">const</span> <span class="variable">skills</span> = [
        </div>
        
        <!-- Habilidades como elementos de array -->
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0);" class="skill" data-skill="html">
            <span class="string" style="--skill-color: #E44D26;">'HTML5'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="css">
            <span class="string" style="--skill-color: #2965F1;">'CSS3'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="javascript">
            <span class="string" style="--skill-color: #F0DB4F;">'JavaScript'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="laravel">
            <span class="string" style="--skill-color: #FF2D20;">'Laravel'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="mysql">
            <span class="string" style="--skill-color: #4479A1;">'MySQL'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="php">
            <span class="string" style="--skill-color: #777BB4;">'PHP'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="github">
            <span class="string" style="--skill-color: #181717;">'GitHub'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="bootstrap">
            <span class="string" style="--skill-color: #7952B3;">'Bootstrap'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="jquery">
            <span class="string" style="--skill-color: #0769AD;">'jQuery'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="uikit">
            <span class="string" style="--skill-color: #2396F3;">'UIkit'</span><span class="punctuation">,</span>
          </a>
        </div>
        <div class="code-line">
          &nbsp;&nbsp;<a href="javscript:void(0)" class="skill" data-skill="arduino">
            <span class="string" style="--skill-color: #00979D;">'Arduino'</span>
          </a>
        </div>
        <div class="code-line">
          <span class="punctuation">]</span><span class="punctuation">;</span>
        </div>
        <div class="code-line">
          <span class="comment">// Hover over any skill to see the logo</span>
        </div>
      </div>
    </div>
    
    <!-- Preview del logo -->
    <div class="skill-preview">
      <div class="preview-container">
        <img src="" alt="Skill Logo" class="skill-logo" id="skill-logo">
        <div class="skill-name" id="skill-name"></div>
      </div>
    </div>
  </div>
</section>

<style>
  :root {
    --editor-bg: #1E1E2E;
    --editor-line: #2D2D42;
    --editor-text: #E1E1E6;
    --editor-cursor: #F8F8F2;
    --editor-selection: #414458;
    --editor-comment: #6272A4;
    --editor-keyword: #FF79C6;
    --editor-string: #F1FA8C;
    --editor-number: #BD93F9;
    --editor-variable: #50FA7B;
    --editor-error: #FF5555;
  }
  
  .skills-editor {
    max-width: 900px;
    margin: 2rem auto;
    font-family: 'Fira Code', 'Courier New', monospace;
  }
  
  .editor-container {
    display: flex;
    background: var(--editor-bg);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    position: relative;
  }
  
  .editor-header {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    padding: 8px 15px;
    background: #252537;
    border-bottom: 1px solid #3a3a4e;
    z-index: 2;
  }
  
  .editor-dots {
    display: flex;
    gap: 8px;
    margin-right: 15px;
  }
  
  .dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
  }
  
  .dot.red { background: #FF5F56; }
  .dot.yellow { background: #FFBD2E; }
  .dot.green { background: #27C93F; }
  
  .editor-title {
    color: #8888A8;
    font-size: 0.9rem;
    font-weight: 500;
  }
  
  .editor-body {
    display: flex;
    width: 70%;
    padding: 3rem 1rem 2rem 0;
  }
  
  .line-numbers {
    color: #6D6D85;
    text-align: right;
    padding: 0 15px;
    user-select: none;
    font-size: 0.9rem;
  }
  
  .line-numbers span {
    display: block;
    line-height: 1.8;
  }
  
  .code-content {
    flex-grow: 1;
  }
  
  .code-line {
    line-height: 1.8;
    padding-left: 10px;
    position: relative;
  }
  
  .comment {
    color: var(--editor-comment);
    font-style: italic;
  }
  
  .keyword {
    color: var(--editor-keyword);
  }
  
  .variable {
    color: var(--editor-variable);
  }
  
  .string {
    color: var(--string);
    position: relative;
    transition: all 0.3s ease;
  }
  
  .punctuation {
    color: var(--editor-text);
  }
  
  .skill {
    text-decoration: none;
    position: relative;
    color: #8888A8;
  }
  
  .skill:hover .string {
    color: var(--skill-color);
    text-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
  }
  
  .skill-preview {
    width: 30%;
    background: #252537;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    border-left: 1px solid #3a3a4e;
  }
  
  .preview-container {
    text-align: center;
  }
  
  .skill-logo {
    max-width: 120px;
    max-height: 120px;
    margin-bottom: 1rem;
    filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.5));
    transition: transform 0.3s ease;
  }
  
  .skill-name {
    color: white;
    font-size: 1.2rem;
    font-weight: 500;
    background: rgba(0, 0, 0, 0.2);
    padding: 5px 15px;
    border-radius: 20px;
  }
  
  @media (max-width: 768px) {
    .editor-container {
      flex-direction: column;
    }
    
    .editor-body, .skill-preview {
      width: 100%;
    }
    
    .skill-preview {
      border-left: none;
      border-top: 1px solid #3a3a4e;
      padding: 1.5rem;
    }
  }
</style>

@push('js')
<script>
  const skillsData = {
    html: { name: "HTML5", image: "{{asset('images/html-5.svg')}}" },
    css: { name: "CSS3", image: "{{asset('images/css-3.svg')}}" },
    javascript: { name: "JavaScript", image: "{{asset('images/javascript.svg')}}" },
    laravel: { name: "Laravel", image: "{{asset('images/laravel.svg')}}" },
    mysql: { name: "MySQL", image: "{{asset('images/mysql.svg')}}" },
    php: { name: "PHP", image: "{{asset('images/php.svg')}}" },
    github: { name: "GitHub", image: "{{asset('images/github.svg')}}" },
    bootstrap: { name: "Bootstrap", image: "{{asset('images/bootstrap.svg')}}" },
    jquery: { name: "jQuery", image: "{{asset('images/jquery.svg')}}" },
    uikit: { name: "UIkit", image: "{{asset('images/uikit.svg')}}" },
    arduino: { name: "Arduino", image: "{{asset('images/arduino.svg')}}" }
  };
  
  const skills = document.querySelectorAll('.skill');
  const skillLogo = document.getElementById('skill-logo');
  const skillName = document.getElementById('skill-name');
  
  skills.forEach(skill => {
    skill.addEventListener('mouseenter', () => {
      const skillKey = skill.getAttribute('data-skill');
      const skillInfo = skillsData[skillKey];
      
      skillLogo.src = skillInfo.image;
      skillLogo.style.display = 'block';
      skillName.textContent = skillInfo.name;
      
      // Efecto de animación
      skillLogo.style.transform = 'scale(0.8)';
      setTimeout(() => {
        skillLogo.style.transform = 'scale(1)';
      }, 50);
    });
    
    skill.addEventListener('mouseleave', () => {
      skillLogo.style.display = 'none';
      skillName.textContent = 'Choice a skill';
    });
  });
  
  // Mostrar un logo por defecto al cargar
  window.addEventListener('DOMContentLoaded', () => {
    const defaultSkill = skillsData.laravel;
    skillLogo.src = defaultSkill.image;
    skillName.textContent = defaultSkill.name;
  });
</script>
@endpush