{{-- components/timeline.blade.php --}}
<section id="experience" class="relative py-24 px-6 lg:px-16 overflow-hidden">
    <div class="absolute inset-0 bg-[#f8f7ff]">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 30% 30%, rgba(128,127,226,0.04) 0%, transparent 50%), radial-gradient(circle at 70% 70%, rgba(108,99,217,0.04) 0%, transparent 50%);"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#807fe2]/20 to-transparent"></div>
        {{-- Detalle decorativo --}}
        <div class="absolute top-1/4 right-8 w-32 h-32 border border-[#807fe2]/5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-1/4 left-8 w-40 h-40 border border-[#807fe2]/5 rounded-full blur-2xl"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16">
            <div class="flex items-center justify-center gap-4 mb-4">
                <span class="inline-flex items-center gap-3 text-xs font-mono font-medium text-[#807fe2] tracking-widest uppercase bg-[#807fe2]/10 px-4 py-2 rounded-full">
                    <span class="w-2 h-2 rounded-full bg-[#807fe2] animate-pulse"></span>
                    career path
                </span>
                <span class="text-[11px] font-mono text-[#8a8aaa] tracking-wider">// journey</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.08]">
                <span class="text-[#1a1a2e]">Where I've</span>
                <span class="relative inline-block">
                    <span class="text-gradient">Been</span>
                    <span class="absolute -bottom-2 left-0 right-0 h-2 bg-[#807fe2]/20 rounded-full blur-sm"></span>
                </span>
            </h2>
            <p class="text-base text-[#5a5a7a] font-light max-w-xl mx-auto mt-5 leading-relaxed">
                Every role has shaped my approach to building things that matter.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10">
            <div class="lg:col-span-2">
                <div class="relative pl-9 md:pl-12">
                    <div class="absolute left-0 top-2 bottom-0 w-[2px] bg-gradient-to-b from-[#807fe2]/40 via-[#807fe2]/20 to-transparent">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-2 h-2 animate-pulse"></div>
                    </div>

                    @php
                        $experiences = [
                            [
                                'id' => 'aiko',
                                'company' => 'Aiko Solutions',
                                'role' => 'Software Developer',
                                'period' => 'Sep 2024 — Present',
                                'description' => 'Building multi-platform applications and scalable enterprise solutions for clients across industries.',
                                'url' => 'https://aiko.com.mx/',
                                'featured' => true,
                            ],
                            [
                                'id' => 'bisturi',
                                'company' => 'Bisturí Noticias',
                                'role' => 'Web Developer & Community Manager',
                                'period' => 'Jul 2021 — Aug 2024',
                                'description' => 'Developed and maintained a leading regional news portal while managing content strategy and community engagement.',
                                'url' => 'https://bisturinoticias.online/',
                                'featured' => false,
                            ],
                            [
                                'id' => 'p51',
                                'company' => 'P51',
                                'role' => 'Web Developer',
                                'period' => 'Jan 2020 — Jun 2021',
                                'description' => 'Crafted custom websites and provided ongoing maintenance for diverse clients across multiple industries.',
                                'url' => 'https://www.p51.mx/index.html',
                                'featured' => false,
                            ],
                            [
                                'id' => 'health-clinic',
                                'company' => 'Xonacatlán Health Clinic',
                                'role' => 'Web Developer',
                                'period' => 'Jan 2020 — May 2020',
                                'description' => 'Designed and deployed a QR-based attendance system to streamline patient tracking and improve efficiency.',
                                'url' => null,
                                'featured' => false,
                            ],
                        ];
                    @endphp

                    @foreach($experiences as $index => $exp)
                        <div class="relative mb-8 last:mb-0 group">
                            <div class="absolute -left-[2.15rem] md:-left-[2.75rem] top-1.5">
                                <div class="relative">
                                    <div class="w-4 h-4 rounded-full border-2 border-[#807fe2] bg-white group-hover:bg-[#807fe2] transition-all duration-300 shadow-sm group-hover:shadow-md group-hover:shadow-[#807fe2]/30 group-hover:scale-110"></div>
                                    @if($exp['featured'])
                                        <div class="absolute -inset-1 rounded-full border border-[#807fe2]/30 animate-ping"></div>
                                    @endif
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 md:p-7 shadow-sm hover:shadow-xl transition-all duration-400 hover:-translate-y-1 border border-[#f0edff] hover:border-[#807fe2]/25 group-hover:shadow-[#807fe2]/5">
                                {{-- Header --}}
                                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-3 mb-3.5">
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2.5 flex-wrap">
                                            <h3 class="text-lg md:text-xl font-bold text-[#1a1a2e] group-hover:text-[#807fe2] transition-colors">
                                                {{ $exp['company'] }}
                                            </h3>
                                            @if($exp['featured'])
                                                <span class="text-[10px] font-mono font-semibold uppercase tracking-wider px-2.5 py-0.5 rounded-full bg-[#807fe2] text-white shadow-sm">
                                                    Current
                                                </span>
                                            @endif
                                        </div>
                                        <p class="text-base font-medium text-[#807fe2] mt-0.5">
                                            {{ $exp['role'] }}
                                        </p>
                                    </div>
                                    <span class="text-xs font-mono text-[#8a8aaa] whitespace-nowrap shrink-0 bg-[#f8f7ff] px-3 py-1 rounded-full border border-[#e8e5f5]">
                                        {{ $exp['period'] }}
                                    </span>
                                </div>

                                <p class="text-sm text-[#5a5a7a] font-light leading-relaxed mb-3.5">
                                    {{ $exp['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('components.education')
        </div>
    </div>
</section>