@extends('layouts.main')

@section('content')
<section class="min-h-screen flex items-center justify-center px-6 lg:px-16 py-16 bg-[#fafafa] relative overflow-hidden">

    <div class="max-w-6xl w-full flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">

        <div class="flex-1 text-left">

            <div class="flex items-center gap-2 mb-3">
                <span class="animate-wave inline-block text-2xl">👋</span>
                <span class="text-base text-[#4a4a6a] font-light tracking-widest">Hey, I'm</span>
            </div>

            <h1 class="text-[clamp(3rem,8vw,5.5rem)] font-bold leading-[1.05] tracking-tight text-[#1a1a2e] mb-2">
                Brayan <span class="text-gradient">Manzano</span>
            </h1>

            <div class="flex items-center gap-4 my-3">
                <div class="h-[2px] w-12 bg-gradient-to-r from-[#807fe2] to-transparent"></div>
                <h2 class="text-[clamp(1.1rem,2.5vw,1.6rem)] font-light text-[#4a4a6a] tracking-[3px] whitespace-nowrap">
                    Web Developer
                </h2>
                <div class="h-[2px] w-12 bg-gradient-to-l from-[#807fe2] to-transparent"></div>
            </div>

            <p class="text-base text-[#5a5a7a] leading-relaxed max-w-md font-light mt-4 mb-8">
                Thank you for visiting my personal website.
                I enjoy sharing knowledge and helping others grow.
            </p>

            <div class="flex flex-wrap gap-3 mb-10">
                <a href="#contact"
                   class="inline-flex items-center gap-2 px-7 py-3 rounded-full bg-[#807fe2] text-white font-medium text-sm
                          shadow-[0_8px_20px_rgba(128,127,226,0.3)] hover:bg-[#6c63d9] hover:-translate-y-1
                          transition-all duration-300">
                    Get In Touch
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#projects"
                   class="inline-flex items-center gap-2 px-7 py-3 rounded-full border border-[#e0e0e6] text-[#1a1a2e]
                          font-medium text-sm hover:bg-[#f0f0f5] hover:-translate-y-1 transition-all duration-300">
                    Browse Projects
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </a>
            </div>

            <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                <div class="bg-white rounded-xl p-5 text-center border border-[#f0edff] shadow-sm hover:shadow-md transition-all duration-300">
                    <p class="text-3xl font-bold text-[#807fe2] stat-number">16+</p>
                    <p class="text-xs text-[#8a8aaa] font-mono uppercase tracking-wider mt-1">Technologies</p>
                </div>
                <div class="bg-white rounded-xl p-5 text-center border border-[#f0edff] shadow-sm hover:shadow-md transition-all duration-300">
                    <p class="text-3xl font-bold text-[#807fe2] stat-number">5+</p>
                    <p class="text-xs text-[#8a8aaa] font-mono uppercase tracking-wider mt-1">Years Active</p>
                </div>
                <div class="bg-white rounded-xl p-5 text-center border border-[#f0edff] shadow-sm hover:shadow-md transition-all duration-300">
                    <p class="text-3xl font-bold text-[#807fe2] stat-number">10+</p>
                    <p class="text-xs text-[#8a8aaa] font-mono uppercase tracking-wider mt-1">Projects Built</p>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 w-64 lg:w-[360px] relative flex justify-center">

            <div class="absolute inset-[-10px] rounded-full border-2 border-[#807fe2]/20 animate-spin-slow"></div>

            <div class="relative w-full aspect-square rounded-full overflow-hidden
                        bg-gradient-to-br from-[#807fe2] to-[#6c63d9] p-[3px]">
                <img src="{{ asset('images/profile.png') }}"
                     alt="Brayan Manzano - Web Developer"
                     class="w-full h-full object-cover rounded-full hover:scale-[1.02] transition-transform duration-500">
            </div>

            <div class="absolute bottom-4 -right-2 lg:right-0 flex items-center gap-2
                        bg-white rounded-full px-4 py-2
                        shadow-[0_8px_25px_rgba(0,0,0,0.08)] border border-[#807fe2]/15
                        animate-float">
                <span class="text-lg">🚀</span>
                <span class="text-xs font-medium text-[#1a1a2e] whitespace-nowrap">Available for work</span>
            </div>
        </div>
    </div>

    <div class="absolute bottom-6 left-1/2 animate-bounce-scroll hidden md:flex flex-col items-center gap-1 opacity-40">
        <span class="text-[10px] uppercase tracking-[2px] text-[#8a8aaa]">Scroll</span>
        <div class="w-[1.5px] h-10 bg-gradient-to-b from-[#807fe2] to-transparent rounded-full"></div>
    </div>

</section>

@push('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const stats = document.querySelectorAll('.stat-number');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.textContent);
                let current = 0;
                const duration = 2000;
                const steps = 60;
                const increment = target / steps;
                const interval = duration / steps;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    el.textContent = Math.floor(current) + '+';
                }, interval);
                
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.3 });
    
    stats.forEach(stat => observer.observe(stat));
});
</script>
@endpush

@include('components.cardProjects')
@include('components.timeline')
@include('components.skills')

@endsection