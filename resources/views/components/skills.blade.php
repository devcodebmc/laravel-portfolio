{{-- components/skills.blade.php --}}
<section id="skills" class="relative py-24 px-6 lg:px-16 overflow-hidden">
    <div class="absolute inset-0 bg-[#f8f7ff]">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 40% 30%, rgba(128,127,226,0.04) 0%, transparent 50%), radial-gradient(circle at 60% 70%, rgba(108,99,217,0.04) 0%, transparent 50%);"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-4 mb-4">
                <span class="inline-flex items-center gap-3 text-xs font-mono font-medium text-[#807fe2] tracking-widest uppercase bg-[#807fe2]/10 px-4 py-2 rounded-full">
                    <span class="w-2 h-2 rounded-full bg-[#807fe2] animate-pulse"></span>
                    tech stack
                </span>
                <span class="text-[11px] font-mono text-[#8a8aaa] tracking-wider">// tools & skills</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.08]">
                <span class="text-[#1a1a2e]">What I</span>
                <span class="relative inline-block">
                    <span class="text-gradient">Work With</span>
                    <span class="absolute -bottom-2 left-0 right-0 h-2 bg-[#807fe2]/20 rounded-full blur-sm"></span>
                </span>
            </h2>
            <p class="text-base text-[#5a5a7a] font-light max-w-xl mx-auto mt-5 leading-relaxed">
                Technologies and tools I use daily to build exceptional digital experiences.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-5">
            @php
                $mainSkills = [
                    ['name' => 'HTML5', 'icon' => 'fab fa-html5', 'color' => '#E44D26'],
                    ['name' => 'CSS3', 'icon' => 'fab fa-css3-alt', 'color' => '#2965F1'],
                    ['name' => 'JavaScript', 'icon' => 'fab fa-js-square', 'color' => '#F0DB4F'],
                    ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => '#FF2D20'],
                    ['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => '#777BB4'],
                    ['name' => 'MySQL', 'icon' => 'fas fa-database', 'color' => '#4479A1'],
                    ['name' => 'SQL Server', 'icon' => 'fas fa-server', 'color' => '#CC2927'],
                    ['name' => 'WordPress', 'icon' => 'fab fa-wordpress', 'color' => '#21759B'],
                    ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => '#F05032'],
                    ['name' => 'GitHub', 'icon' => 'fab fa-github', 'color' => '#181717'],
                    ['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap', 'color' => '#7952B3'],
                    ['name' => 'Tailwind', 'icon' => 'fas fa-wind', 'color' => '#06B6D4'],
                    ['name' => 'jQuery', 'icon' => 'fab fa-js', 'color' => '#0769AD'],
                    ['name' => 'UIkit', 'icon' => 'fas fa-cube', 'color' => '#2396F3'],
                    ['name' => 'Arduino', 'icon' => 'fas fa-microchip', 'color' => '#00979D'],
                    ['name' => 'REST APIs', 'icon' => 'fas fa-plug', 'color' => '#FF6B6B'],
                ];
            @endphp

            @foreach($mainSkills as $skill)
                <div class="group relative bg-white rounded-xl p-5 text-center shadow-sm hover:shadow-xl transition-all duration-400 hover:-translate-y-2 border border-[#f0edff] hover:border-[#807fe2]/25">
                    <div class="text-4xl md:text-5xl mb-3 transition-all duration-300 group-hover:scale-110" 
                         style="color: {{ $skill['color'] }}">
                        <i class="{{ $skill['icon'] }}"></i>
                    </div>
                    
                    <h3 class="text-sm font-semibold text-[#1a1a2e] group-hover:text-[#807fe2] transition-colors">
                        {{ $skill['name'] }}
                    </h3>
                    
                    <div class="mt-3 h-0.5 w-0 group-hover:w-full bg-gradient-to-r from-transparent via-{{ $skill['color'] }} to-transparent transition-all duration-500 mx-auto opacity-0 group-hover:opacity-100"
                         style="background: linear-gradient(90deg, transparent, {{ $skill['color'] }}55, transparent);">
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-20">
            <div class="text-center mb-10">
                <div class="flex items-center justify-center gap-3">
                    <span class="text-xs font-mono font-medium text-[#8a8aaa] uppercase tracking-wider bg-white px-5 py-2 rounded-full border border-[#e8e5f5] shadow-sm">
                        Additional Tools & Technologies
                    </span>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center gap-3">
                @php
                    $additionalTools = [
                        ['name' => 'AWS', 'icon' => 'fab fa-aws', 'color' => '#FF9900'],
                        ['name' => 'Apache', 'icon' => 'fas fa-server', 'color' => '#D22128'],
                        ['name' => 'WebServices', 'icon' => 'fas fa-bolt', 'color' => '#06B6D4'],
                        ['name' => 'Composer', 'icon' => 'fas fa-boxes', 'color' => '#885630'],
                        ['name' => 'Figma', 'icon' => 'fab fa-figma', 'color' => '#F24E1E'],
                        ['name' => 'Framer', 'icon' => 'fas fa-code', 'color' => '#5a5a7a'],

                    ];
                @endphp

                @foreach($additionalTools as $tool)
                    <div class="group flex items-center gap-2.5 px-4 py-2.5 bg-white rounded-full border border-[#e8e5f5] hover:border-[#807fe2]/30 hover:bg-[#f8f7ff] hover:shadow-md transition-all duration-300 cursor-default">
                        <i class="{{ $tool['icon'] }} text-base" style="color: {{ $tool['color'] }}"></i>
                        <span class="text-sm font-light text-[#5a5a7a] group-hover:text-[#807fe2] transition-colors">
                            {{ $tool['name'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endpush