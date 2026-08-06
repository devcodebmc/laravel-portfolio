{{-- components/footer.blade.php --}}
<footer id="contact" class="relative py-16 px-6 lg:px-16 overflow-hidden">
    <div class="absolute inset-0 bg-[#f8f7ff]">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 30% 20%, rgba(128,127,226,0.03) 0%, transparent 50%), radial-gradient(circle at 70% 80%, rgba(108,99,217,0.03) 0%, transparent 50%);"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-12">
            <div class="flex items-center justify-center gap-4 mb-4">
                <span class="inline-flex items-center gap-3 text-xs font-mono font-medium text-[#807fe2] tracking-widest uppercase bg-[#807fe2]/10 px-4 py-2 rounded-full">
                    <span class="w-2 h-2 rounded-full bg-[#807fe2] animate-pulse"></span>
                    let's connect
                </span>
                <span class="text-[11px] font-mono text-[#8a8aaa] tracking-wider">// get in touch</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.08]">
                <span class="text-[#1a1a2e]">Let's Build</span>
                <span class="relative inline-block">
                    <span class="text-gradient">Together</span>
                    <span class="absolute -bottom-2 left-0 right-0 h-2 bg-[#807fe2]/20 rounded-full blur-sm"></span>
                </span>
            </h2>
            <p class="text-base text-[#5a5a7a] font-light max-w-xl mx-auto mt-5 leading-relaxed">
                Have a project in mind or just want to say hello? I'd love to hear from you.
            </p>
        </div>

        @include('layouts.partials.mailField')

        <div class="flex flex-wrap items-center justify-center gap-6 mb-12">
            <div class="flex flex-wrap items-center justify-center gap-3">
                @php
                    $socialLinks = [
                        ['name' => 'GitHub', 'icon' => 'fab fa-github', 'url' => 'https://github.com/devcodebmc', 'color' => '#181717'],
                        ['name' => 'Instagram', 'icon' => 'fab fa-instagram', 'url' => '#', 'color' => '#E4405F'],
                        ['name' => 'CodePen', 'icon' => 'fab fa-codepen', 'url' => 'https://codepen.io/bryandevcode', 'color' => '#000000'],
                        ['name' => 'LinkedIn', 'icon' => 'fab fa-linkedin-in', 'url' => '#', 'color' => '#0A66C2'],
                    ];
                @endphp

                @foreach($socialLinks as $social)
                    <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="group w-14 h-14 rounded-full bg-white border-2 border-[#e8e5f5] flex items-center justify-center hover:border-[#807fe2] hover:shadow-lg hover:shadow-[#807fe2]/20 transition-all duration-300 hover:-translate-y-1">
                        <i class="{{ $social['icon'] }} text-xl transition-all duration-300 group-hover:scale-110" 
                           style="color: {{ $social['color'] }}"></i>
                    </a>
                @endforeach
            </div>

            <div class="relative group">
                <button id="likeButton" class="flex items-center gap-3 px-8 py-3.5 rounded-full bg-white border-2 border-[#e8e5f5] hover:border-[#807fe2] hover:shadow-lg hover:shadow-[#807fe2]/20 transition-all duration-300 hover:-translate-y-1 group">
                    <span class="flex items-center gap-2 text-sm font-medium text-[#5a5a7a] group-hover:text-[#807fe2] transition-colors">
                        <i class="fas fa-heart text-[#e33d66] text-base" id="heartIcon"></i>
                        <span>Like</span>
                        <span id="counter" class="font-bold text-[#807fe2]">{{ App\Models\LikeCount::getCount() }}</span>
                    </span>
                </button>
                
                <div class="absolute -top-12 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                    <span class="text-xs font-mono bg-[#1a1a2e] text-white px-3 py-1.5 rounded-lg whitespace-nowrap shadow-lg">
                        Show some love ❤️
                    </span>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-[#e8e5f5]">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-md text-[#8a8aaa] font-light">
                    <span class="font-mono">© {{ date('Y') }}</span>
                    <span class="mx-2">•</span>
                    Developed with
                    <i class="fas fa-heart text-[#e33d66] text-base mx-1 animate-pulse"></i>
                    by
                    <span class="font-medium text-[#807fe2]">Brayan Manzano</span>

                    <span class="mx-2">•</span>
                    <a href="mailto:manzanocortesbrayan@gmail.com" class="text-[#807fe2] hover:text-[#5a5a7a] transition-colors inline-flex items-center gap-2">
                        <i class="fas fa-envelope"></i>
                        manzanocortesbrayan@gmail.com
                    </a>
                </p>
                <div class="flex items-center flex-wrap justify-center gap-4">
                    <a href="https://github.com/devcodebmc" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-[#807fe2] hover:text-[#5a5a7a] transition-colors">
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>
                    <a href="https://bydsolutions.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-[#807fe2] hover:text-[#5a5a7a] transition-colors">
                        <i class="fas fa-globe"></i>
                        bydsolutions.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

@include('layouts.partials.floatMail')

{{-- Script para el like --}}
@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const likeButton = document.getElementById('likeButton');
        const likeCount = document.getElementById('counter');
        const heartIcon = document.getElementById('heartIcon');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        if (likeButton) {
            likeButton.addEventListener('click', function(e) {
                e.preventDefault();

                // Animación del corazón
                heartIcon.classList.add('scale-150');
                heartIcon.style.transition = 'all 0.3s ease';
                
                setTimeout(() => {
                    heartIcon.classList.remove('scale-150');
                }, 300);

                // Enviar like al servidor
                fetch('{{ route('like') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(response => response.json())
                .then(data => {
                    likeCount.textContent = data.count;
                    // Animación de conteo
                    likeCount.style.transform = 'scale(1.3)';
                    setTimeout(() => {
                        likeCount.style.transform = 'scale(1)';
                    }, 200);
                })
                .catch(error => console.error('Error:', error));
            });
        }
    });
</script>
@endpush

{{-- Estilos adicionales --}}
@push('styles')
<style>
    .writing-mode-vertical {
        writing-mode: vertical-rl;
        text-orientation: mixed;
        letter-spacing: 0.1em;
    }
    
    /* Animación del corazón */
    @keyframes heartbeat {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }
    
    .heart-beat {
        animation: heartbeat 0.5s ease;
    }
</style>
@endpush