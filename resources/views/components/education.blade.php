            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition-all duration-400 border border-[#f0edff] hover:border-[#807fe2]/25 sticky top-8 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#807fe2] to-[#6c63d9] flex items-center justify-center text-white shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a2e]">Education</h3>
                    </div>

                    <div class="space-y-6">
                        @php
                            $educations = [
                                [
                                    'year' => '2021',
                                    'title' => 'Web App Development',
                                    'institution' => 'UTVT',
                                    'icon' => '🎓',
                                    'color' => 'from-purple-400 to-purple-500',
                                ],
                                [
                                    'year' => '2020',
                                    'title' => 'ICT Engineer',
                                    'institution' => 'UTVT',
                                    'icon' => '⚡',
                                    'color' => 'from-blue-400 to-blue-500',
                                ],
                                [
                                    'year' => '2018',
                                    'title' => 'ICT TSU Computer Systems',
                                    'institution' => 'UTVT',
                                    'icon' => '💻',
                                    'color' => 'from-emerald-400 to-emerald-500',
                                ],
                            ];
                        @endphp

                        @foreach($educations as $edu)
                            <div class="group/edu flex gap-4 items-start">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $edu['color'] }} flex items-center justify-center text-2xl flex-shrink-0 shadow-sm group-hover/edu:scale-105 transition-transform duration-300">
                                    {{ $edu['icon'] }}
                                </div>
                                <div class="flex-1 min-w-0 pt-0.5">
                                    <div class="flex items-center gap-2 flex-wrap">
                                        <span class="text-xs font-mono font-bold text-[#807fe2] bg-[#f0edff] px-2.5 py-0.5 rounded-lg">
                                            {{ $edu['year'] }}
                                        </span>
                                    </div>
                                    <h4 class="text-base font-bold text-[#1a1a2e] mt-1 group-hover/edu:text-[#807fe2] transition-colors">
                                        {{ $edu['title'] }}
                                    </h4>
                                    <p class="text-xs text-[#8a8aaa] font-mono mt-0.5">
                                        {{ $edu['institution'] }}
                                    </p>
                                </div>
                            </div>
                            @if(!$loop->last)
                                <div class="border-b border-[#f0edff] border-dashed"></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>