{{-- Float Mail + Theme Toggle --}}
<div class="fixed right-6 top-[5%] z-50 block">
    <div class="flex flex-col items-center gap-2">
        
        {{-- Theme Toggle (Bombilla) --}}
        <button id="theme-toggle" type="button" aria-label="Toggle theme" aria-pressed="false" title="Cambiar tema" 
                class="bulb-toggle flex items-center justify-center w-12 h-12 rounded-full transition-colors duration-200
                       hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 
                       focus:ring-gray-300 dark:focus:ring-offset-gray-900 dark:focus:ring-gray-600 py-1">
            <svg viewBox="0 0 64 88" class="bulb-toggle__svg w-8 h-8" role="img" aria-hidden="true">
                <defs>
                    <linearGradient id="glassGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#FAF7F2"/>
                        <stop offset="100%" stop-color="#F0EBE3"/>
                    </linearGradient>
                </defs>

                <circle cx="32" cy="30" r="26" fill="#C5BDB0" class="bulb-glow opacity-0 transition-opacity duration-400"/>

                <ellipse cx="32" cy="30" rx="20" ry="24" fill="url(#glassGradient)" class="bulb-glass" stroke-width="1.2"/>

                <g class="filament-line" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none">
                    <path d="M23 28 L27 38 L24 46"/>
                    <path d="M32 24 L32 40 L32 46"/>
                    <path d="M41 28 L37 38 L40 46"/>
                    <path d="M24 22 L29 28" stroke-width="1"/>
                    <path d="M40 22 L35 28" stroke-width="1"/>
                </g>

                <rect x="20" y="50" width="24" height="12" rx="2.5" class="bulb-base"/>
                <line x1="20" y1="54.5" x2="44" y2="54.5" stroke="#A0988A" stroke-width="0.5" opacity="0.4"/>
                <line x1="20" y1="57.5" x2="44" y2="57.5" stroke="#A0988A" stroke-width="0.5" opacity="0.4"/>
                
                <rect x="23" y="62" width="18" height="6" rx="1.5" class="bulb-contact"/>
                <circle cx="32" cy="68.5" r="2.8" class="bulb-contact" opacity="0.6"/>
            </svg>
        </button>

        <div class="w-px h-12 bg-gradient-to-b from-[#807fe2] to-transparent mt-8 hidden sm:block"></div>
        
        <a href="mailto:manzanocortesbrayan@gmail.com" 
           class="group text-xs font-mono text-[#8a8aaa] hover:text-[#807fe2] transition-colors duration-300 tracking-widest hidden sm:block"
           style="writing-mode: vertical-rl;">
            manzanocortesbrayan@gmail.com
        </a>
        
        <div class="w-px h-12 bg-gradient-to-t from-[#807fe2] to-transparent hidden sm:block"></div>
    </div>
</div>