<section id="projects" class="relative py-16 md:py-24 px-4 sm:px-6 lg:px-16 overflow-hidden">
    {{-- Fondo --}}
    <div class="absolute inset-0 bg-[#f8f7ff]">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 50%, rgba(128,127,226,0.04) 0%, transparent 50%), radial-gradient(circle at 80% 50%, rgba(108,99,217,0.04) 0%, transparent 50%);"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        {{-- Encabezado --}}
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10 md:mb-12">
            <div class="space-y-3">
                <div class="flex items-center gap-3 mb-4">
                    <span class="inline-flex items-center gap-3 text-xs font-mono font-medium text-[#807fe2] tracking-widest uppercase bg-[#807fe2]/10 px-3 md:px-4 py-1.5 md:py-2 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-[#807fe2] animate-pulse"></span>
                        +10 projects
                    </span>
                    <span class="text-[11px] font-mono text-[#8a8aaa] tracking-wider">// showcase</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.08]">
                    <span class="text-[#1a1a2e]">My</span>
                    <span class="relative inline-block">
                        <span class="text-gradient">Work</span>
                        <span class="absolute -bottom-2 left-0 right-0 h-2 bg-[#807fe2]/20 rounded-full blur-sm"></span>
                    </span>
                </h2>
                <p class="text-[#5a5a7a] text-sm sm:text-base font-light max-w-xl leading-relaxed">
                    A selection of projects I've built for clients and personal use.
                </p>
            </div>
            
            {{-- Filtros responsivos --}}
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-3 w-full lg:w-auto">
                <div class="flex items-center gap-2">
                    <span class="text-[10px] sm:text-xs text-[#8a8aaa] font-mono tracking-wider whitespace-nowrap">FILTER BY</span>
                    <span class="hidden sm:block w-px h-6 bg-[#e0e0e6]"></span>
                </div>
                
                {{-- Filtros en scroll horizontal en móvil --}}
                <div class="flex items-center gap-1.5 bg-white/80 backdrop-blur-sm p-1.5 rounded-full shadow-sm border border-[#e8e8f0] overflow-x-auto w-full sm:w-auto scrollbar-hide">
                    <button data-filter="*" class="filter-btn px-3 sm:px-4 py-1 rounded-full text-[10px] sm:text-xs font-mono font-medium transition-all duration-300 bg-[#807fe2] text-white shadow-lg shadow-[#807fe2]/20 whitespace-nowrap">
                        All
                    </button>
                    <button data-filter=".laravel" class="filter-btn px-3 sm:px-4 py-1 rounded-full text-[10px] sm:text-xs font-mono font-medium transition-all duration-300 text-[#5a5a7a] hover:text-[#1a1a2e] hover:bg-[#f0edff] whitespace-nowrap">
                        Laravel
                    </button>
                    <button data-filter=".wordpress" class="filter-btn px-3 sm:px-4 py-1 rounded-full text-[10px] sm:text-xs font-mono font-medium transition-all duration-300 text-[#5a5a7a] hover:text-[#1a1a2e] hover:bg-[#f0edff] whitespace-nowrap">
                        WP
                    </button>
                    <button data-filter=".php" class="filter-btn px-3 sm:px-4 py-1 rounded-full text-[10px] sm:text-xs font-mono font-medium transition-all duration-300 text-[#5a5a7a] hover:text-[#1a1a2e] hover:bg-[#f0edff] whitespace-nowrap">
                        PHP
                    </button>
                    <button data-filter=".landing" class="filter-btn px-3 sm:px-4 py-1 rounded-full text-[10px] sm:text-xs font-mono font-medium transition-all duration-300 text-[#5a5a7a] hover:text-[#1a1a2e] hover:bg-[#f0edff] whitespace-nowrap">
                        Landing
                    </button>
                </div>
            </div>
        </div>

        {{-- Grid de proyectos --}}
        <div id="project-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6">
            @php
                $projects = [
                    [
                        'title' => 'Eventos Especiales Lerma',
                        'category' => 'Laravel • PHP • MySQL',
                        'image' => 'eventos-especiales-lerma.jpg',
                        'url' => 'https://eventosespecialeslerma.com/',
                        'github' => 'https://github.com/devcodebmc/eventosespeciales',
                        'tags' => ['laravel', 'php'],
                    ],
                    [
                        'title' => 'ByD Solutions',
                        'category' => 'Laravel • MySQL • UIkit',
                        'image' => 'bydsolutions.jpg',
                        'url' => 'https://bydsolutions.com/',
                        'github' => 'https://github.com/ByDsolutions-com/bydsolutions',
                        'tags' => ['laravel', 'php'],
                    ],
                    [
                        'title' => 'App Mex',
                        'category' => 'PHP • jQuery • MySQL',
                        'image' => 'app-mex.jpg',
                        'url' => 'https://app-mex.com/login.php',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'CHRISTEL HOUSE',
                        'category' => 'PHP • MySQL • Bootstrap',
                        'image' => 'cristelhouse.jpg',
                        'url' => 'https://pagos-christelhouse.aiko.com.mx',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'BCD PROVEEDORES',
                        'category' => 'PHP • jQuery • SQL Server',
                        'image' => 'proveedores-bcd.jpg',
                        'url' => 'https://proveedores.bcdtravelnet.mx',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'GEA SEGUIMIENTO',
                        'category' => 'PHP • jQuery • MySQL',
                        'image' => 'gea.jpg',
                        'url' => 'https://gea.aiko.com.mx/login.php',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'Construcción LG',
                        'category' => 'Laravel • MySQL • UIkit',
                        'image' => 'lg.jpg',
                        'url' => 'https://bydsolutions.com/demolg/public/',
                        'github' => 'https://github.com/devcodebmc/lg',
                        'tags' => ['landing'],
                    ],
                    [
                        'title' => 'MAKICOP',
                        'category' => 'PHP • MySQL • Bootstrap',
                        'image' => 'makicop.jpg',
                        'url' => 'https://mensajeriamk.aiko.com.mx/',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'P51',
                        'category' => 'HTML • CSS • JavaScript',
                        'image' => 'p51.jpg',
                        'url' => 'https://p51.mx',
                        'github' => null,
                        'tags' => ['landing'],
                    ],
                    [
                        'title' => 'RECETAS CASERAS',
                        'category' => 'Laravel • PostgreSQL • Tailwind',
                        'image' => 'recetascaseras.jpg',
                        'url' => 'https://recetascaseras.bydsolutions.com/',
                        'github' => 'https://github.com/devcodebmc/recetascaseras',
                        'tags' => ['laravel', 'php'],
                    ],
                    [
                        'title' => 'JULIÁ TOURS',
                        'category' => 'PHP • WordPress • MySQL',
                        'image' => 'juliatours.jpg',
                        'url' => 'https://www.juliatours.com.mx/',
                        'github' => null,
                        'tags' => ['php', 'wordpress'],
                    ],
                    [
                        'title' => 'CONSORCIO GADUS',
                        'category' => 'HTML • CSS • JavaScript',
                        'image' => 'gadus.jpg',
                        'url' => 'https://consorciogadus.com',
                        'github' => null,
                        'tags' => ['landing'],
                    ],
                    [
                        'title' => 'SUNRISE',
                        'category' => 'PHP • HTML • CSS',
                        'image' => 'sunrise.jpg',
                        'url' => 'https://sunriseexpendingmachine.com/',
                        'github' => null,
                        'tags' => ['landing'],
                    ],
                    [
                        'title' => 'ARTIPROMO',
                        'category' => 'PHP • MySQL • REST APIs',
                        'image' => 'artipromo.jpg',
                        'url' => 'https://artipromo.com.mx/',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'Portales SAE',
                        'category' => 'PHP • jQuery • SQL Server',
                        'image' => 'cotizador.jpg',
                        'url' => 'https://cotizador.aiko.com.mx/login.php',
                        'github' => null,
                        'tags' => ['php'],
                    ],
                    [
                        'title' => 'KHALSA DIAMANTE',
                        'category' => 'HTML • CSS • JavaScript',
                        'image' => 'khalsadiamante.jpg',
                        'url' => 'https://www.khalsadiamante.com',
                        'github' => null,
                        'tags' => ['landing'],
                    ],
                ];
            @endphp
            
            @foreach($projects as $project)
                <div class="project-item {{ implode(' ', $project['tags']) }} group">
                    <div class="relative rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1 border border-[#f0edff] hover:border-[#807fe2]/20 h-full flex flex-col">
                        
                        {{-- Imagen --}}
                        <div class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-[#f0edff] to-[#e8e5f5] flex-shrink-0">
                            <img 
                                src="{{ asset('images/projects/' . $project['image']) }}" 
                                alt="{{ $project['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy"
                            >
                            
                            {{-- Overlay sutil --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e]/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <div class="p-3 sm:p-4 flex-1 flex flex-col">
                            {{-- Título + Iconos en la misma línea --}}
                            <div class="flex items-start justify-between gap-2">
                                <h3 class="text-xs sm:text-sm font-semibold text-[#1a1a2e] group-hover:text-[#807fe2] transition-colors truncate flex-1">
                                    {{ $project['title'] }}
                                </h3>
                                <div class="flex items-center gap-1 shrink-0">
                                    @if($project['github'])
                                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer"
                                           class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#f0edff] flex items-center justify-center border border-[#807fe2] text-[#807fe2] hover:bg-[#807fe2] hover:text-white transition-all duration-300 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 sm:w-3.5 sm:h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.15 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.62.24 2.85.12 3.15.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                            </svg>
                                        </a>
                                    @endif
                                    @if($project['url'])
                                        <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" 
                                           class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#f0edff] flex items-center justify-center border border-[#807fe2] text-[#807fe2] hover:bg-[#807fe2] hover:text-white transition-all duration-300 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 sm:w-3.5 sm:h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <p class="text-[10px] sm:text-[12px] text-[#8a8aaa] font-mono truncate mt-0.5">
                                {{ $project['category'] }}
                            </p>

                            <div class="flex flex-wrap gap-1 mt-2">
                                @foreach($project['tags'] as $tag)
                                    <span class="text-[9px] sm:text-[10px] font-medium px-1.5 sm:px-2 py-0.5 rounded-full bg-[#f0edff] text-[#807fe2]">
                                        #{{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="mt-12 md:mt-16 text-center">
            <div class="inline-flex flex-col sm:flex-row items-center gap-4 bg-white/80 backdrop-blur-sm p-4 rounded-2xl border border-[#e8e5f5] shadow-lg">
                <span class="text-sm text-[#5a5a7a] font-light">
                    Ready to build something amazing together?
                </span>
                <span class="hidden sm:block w-px h-8 bg-[#e0e0e6]"></span>
                <a href="#contact" 
                   class="inline-flex items-center gap-2 px-6 sm:px-8 py-2.5 sm:py-3 rounded-full bg-gradient-to-r from-[#807fe2] to-[#6c63d9] text-white font-medium text-sm shadow-lg shadow-[#807fe2]/30 hover:shadow-[#807fe2]/50 hover:-translate-y-1 transition-all duration-300 group">
                    <span>Let's talk about your project</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Estilos para scroll horizontal sin scrollbar --}}
@push('styles')
<style>
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
</style>
@endpush

{{-- Script --}}
@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const grid = document.getElementById('project-grid');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = grid.querySelectorAll('.project-item');

        function filterProjects(filter) {
            items.forEach(item => {
                const matches = filter === '*' || item.classList.contains(filter.replace('.', ''));
                
                if (matches) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 200);
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.dataset.filter;

                filterBtns.forEach(b => {
                    b.classList.remove('bg-[#807fe2]', 'text-white', 'shadow-lg', 'shadow-[#807fe2]/20');
                    b.classList.add('text-[#5a5a7a]', 'hover:text-[#1a1a2e]', 'hover:bg-[#f0edff]');
                });
                this.classList.remove('text-[#5a5a7a]', 'hover:text-[#1a1a2e]', 'hover:bg-[#f0edff]');
                this.classList.add('bg-[#807fe2]', 'text-white', 'shadow-lg', 'shadow-[#807fe2]/20');

                filterProjects(filter);
            });
        });

        const allBtn = document.querySelector('.filter-btn[data-filter="*"]');
        if (allBtn) {
            filterBtns.forEach(b => {
                b.classList.remove('bg-[#807fe2]', 'text-white', 'shadow-lg', 'shadow-[#807fe2]/20');
                b.classList.add('text-[#5a5a7a]', 'hover:text-[#1a1a2e]', 'hover:bg-[#f0edff]');
            });
            allBtn.classList.remove('text-[#5a5a7a]', 'hover:text-[#1a1a2e]', 'hover:bg-[#f0edff]');
            allBtn.classList.add('bg-[#807fe2]', 'text-white', 'shadow-lg', 'shadow-[#807fe2]/20');
        }

        items.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 100 + index * 40);
        });
    });
</script>
@endpush