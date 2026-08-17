<x-layouts.app 
    title="Engineering Digital Products & AI Systems That Move Businesses Forward"
    description="Intoxia Technologies helps ambitious businesses build intelligent digital products, AI-powered solutions, scalable software, and high-performing digital experiences."
>

    {{-- 1. HERO SECTION WITH 3D VISUAL & VIBRANT MODERN THEME --}}
    <section class="relative pt-32 pb-20 sm:pt-40 sm:pb-32 overflow-hidden">
        {{-- Floating 3D glowing ambient spheres --}}
        <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[700px] sm:w-[1000px] h-[500px] bg-gradient-to-tr from-blue-400/20 via-indigo-400/20 to-cyan-300/25 blur-[120px] rounded-full pointer-events-none -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                {{-- Left Text Column --}}
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    
                    {{-- Top Badge --}}
                    <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-white/90 border border-blue-200 text-blue-700 text-xs font-mono font-bold tracking-wide shadow-sm shadow-blue-500/10">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan-500 animate-ping"></span>
                        <span>ENTERPRISE ENGINEERING &bull; AI AGENTS &bull; CLOUD 2026</span>
                    </div>

                    {{-- Main H1 --}}
                    <h1 class="text-4xl sm:text-6xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1] font-['Outfit']">
                        Engineering Digital Products That <span class="text-gradient-vibrant">Move Businesses Forward.</span>
                    </h1>

                    {{-- Supporting Message --}}
                    <p class="text-lg sm:text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0 font-normal">
                        Intoxia Technologies designs and engineers high-scale custom software, autonomous AI agents, and intelligent digital ecosystems for modern enterprises.
                    </p>

                    {{-- Actions --}}
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                        <a href="{{ route('contact') }}" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-bold text-base transition-all shadow-xl shadow-blue-600/30 flex items-center space-x-2.5 hover:scale-105">
                            <span>Start a Project</span>
                            <svg class="w-4 h-4 text-cyan-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>

                        <a href="{{ route('work.index') }}" class="px-8 py-4 rounded-2xl bg-white hover:bg-slate-50 text-slate-800 border border-slate-200/90 font-bold text-base transition-all shadow-sm hover:shadow-md flex items-center space-x-2">
                            <span>Explore Our Work</span>
                        </a>
                    </div>

                    {{-- Quick Trust Signals --}}
                    <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-xs font-mono font-semibold text-slate-500">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Production Ready SLA</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>South Delhi Tech Center</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Dedicated Architects</span>
                        </div>
                    </div>

                </div>

                {{-- Right 3D Visual Column --}}
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-lg lg:max-w-none">
                        
                        {{-- 3D Image Card with glowing reflections --}}
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-blue-500/20 border-2 border-white/80 bg-gradient-to-br from-white/90 via-slate-50 to-blue-50/50 p-3 animate-float">
                            <img 
                                src="{{ asset('images/hero-3d-visual.jpg') }}" 
                                alt="Intoxia Technologies 3D Digital Transformation" 
                                class="w-full h-auto rounded-2xl object-cover shadow-inner"
                            >

                            {{-- Floating Glass Feature Pill Top --}}
                            <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-xl border border-white/80 px-4 py-2.5 rounded-2xl shadow-lg flex items-center space-x-3">
                                <div class="w-3 h-3 rounded-full bg-emerald-500 animate-ping"></div>
                                <div>
                                    <div class="text-[10px] font-mono text-slate-500 uppercase tracking-widest">AI Engine Status</div>
                                    <div class="text-xs font-bold text-slate-900 font-mono">Autonomous &bull; 99.9% Uptime</div>
                                </div>
                            </div>

                            {{-- Floating Glass Feature Pill Bottom --}}
                            <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-xl border border-white/80 px-4 py-3 rounded-2xl shadow-xl flex items-center space-x-3">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 text-white flex items-center justify-center font-mono font-bold text-xs shadow-md shadow-blue-500/30">
                                    IX
                                </div>
                                <div>
                                    <div class="text-[10px] font-mono text-indigo-600 font-bold uppercase">Architecture</div>
                                    <div class="text-xs font-black text-slate-900">Laravel 13 + Next Gen AI</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 2. TRUST BAR --}}
    <section class="py-10 border-y border-slate-200/80 bg-white/70 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-6">
                <span class="text-xs font-mono uppercase tracking-widest text-slate-500 font-bold">
                    Enterprise Engineering &bull; Modern Web Platforms &bull; AI Agents &bull; Scalable Cloud
                </span>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-14 text-slate-700 text-sm font-mono font-bold">
                <div class="flex items-center space-x-2 px-3 py-1.5 rounded-xl bg-blue-50 border border-blue-100">
                    <span class="text-blue-600">⚡</span>
                    <span>Enterprise Web Apps</span>
                </div>
                <div class="flex items-center space-x-2 px-3 py-1.5 rounded-xl bg-purple-50 border border-purple-100">
                    <span class="text-purple-600">🤖</span>
                    <span>AI & LLM Integration</span>
                </div>
                <div class="flex items-center space-x-2 px-3 py-1.5 rounded-xl bg-cyan-50 border border-cyan-100">
                    <span class="text-cyan-600">📱</span>
                    <span>Mobile Applications</span>
                </div>
                <div class="flex items-center space-x-2 px-3 py-1.5 rounded-xl bg-emerald-50 border border-emerald-100">
                    <span class="text-emerald-600">☁️</span>
                    <span>Cloud DevOps</span>
                </div>
                <div class="flex items-center space-x-2 px-3 py-1.5 rounded-xl bg-amber-50 border border-amber-100">
                    <span class="text-amber-600">🔒</span>
                    <span>Zero-Trust Security</span>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. DYNAMIC STATS SECTION --}}
    @if($stats->count() > 0)
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($stats as $stat)
                <div 
                    x-data="statCounter('{{ $stat->value }}', '{{ $stat->suffix ?? '' }}')"
                    class="light-glass-panel rounded-3xl p-6 sm:p-8 text-center hover:border-blue-300 transition-all duration-300 group shadow-sm hover:shadow-xl"
                >
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 font-mono tracking-tight group-hover:scale-105 transition-transform">
                        <span x-text="current">0</span><span x-text="suffix">{{ $stat->suffix }}</span>
                    </div>
                    <div class="mt-2 text-sm sm:text-base font-bold text-slate-800 tracking-tight">
                        {{ $stat->label }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- 4. ABOUT SECTION (Editorial Layout with 3D Mesh Accent) --}}
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-600 text-xs font-mono uppercase tracking-wide font-bold">
                    <span>Engineering Philosophy</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-['Outfit']">
                    Technology Built Around Your <span class="text-gradient-vibrant">Real Business Objectives.</span>
                </h2>

                <p class="text-slate-600 leading-relaxed text-base sm:text-lg">
                    We don't build generic software or chase hollow hype. Intoxia Technologies combines deep software architecture, generative AI capabilities, human-centered UI/UX design, and growth strategy to build digital assets that create compounding commercial value.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-cyan-600 font-mono text-sm font-bold">01. AI-Driven</div>
                        <p class="text-xs text-slate-500 mt-1">Autonomous workflows & intelligent agents embedded into your product stack.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-blue-600 font-mono text-sm font-bold">02. Research-Led</div>
                        <p class="text-xs text-slate-500 mt-1">Deep operational analysis before a single line of production code is written.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-indigo-600 font-mono text-sm font-bold">03. Engineering-First</div>
                        <p class="text-xs text-slate-500 mt-1">High-throughput, clean architecture designed for multi-year scalability.</p>
                    </div>
                    <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-emerald-600 font-mono text-sm font-bold">04. Client-First</div>
                        <p class="text-xs text-slate-500 mt-1">Transparent timelines, direct engineer communication, and clear deliverables.</p>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center space-x-2 text-sm font-bold font-mono text-blue-600 hover:text-indigo-700 transition-colors">
                        <span>Meet Intoxia Technologies</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6 relative">
                <div class="light-glass-panel rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-2xl relative overflow-hidden">
                    {{-- 3D Mesh Accent Image Background --}}
                    <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full opacity-20 pointer-events-none overflow-hidden">
                        <img src="{{ asset('images/abstract-3d-mesh.jpg') }}" alt="3D Mesh" class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-6 relative z-10">
                        <div class="flex items-center justify-between border-b border-slate-200/80 pb-4">
                            <span class="text-xs font-mono text-slate-500 font-semibold">Headquarters</span>
                            <span class="text-xs font-mono font-bold text-slate-900">New Delhi / NCR, India</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-200/80 pb-4">
                            <span class="text-xs font-mono text-slate-500 font-semibold">Target Frameworks</span>
                            <span class="text-xs font-mono font-bold text-blue-600">Laravel 13 &bull; PHP 8.5 &bull; Python AI</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-200/80 pb-4">
                            <span class="text-xs font-mono text-slate-500 font-semibold">Deployment SLA</span>
                            <span class="text-xs font-mono font-bold text-emerald-600">99.9% Production Ready</span>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <span class="text-xs font-mono text-slate-500 font-semibold">Consultation Model</span>
                            <span class="text-xs font-mono font-bold text-indigo-600">Dedicated Product Squads</span>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-200/80 bg-blue-50/80 rounded-2xl p-6 border border-blue-100 text-center relative z-10">
                        <div class="text-xs font-mono text-blue-600 font-bold uppercase tracking-wider mb-1">Direct Engineering Hotline</div>
                        <a href="tel:+917011639618" class="text-2xl font-black text-slate-900 hover:text-blue-600 transition-colors font-['Outfit']">+91 70116 39618</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- 5. SERVICES GRID --}}
    <section class="py-24 bg-white/60 border-t border-slate-200/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                badge="End-to-End Capabilities"
                title="Engineering & Digital Transformation Services"
                subtitle="We design, engineer, and deploy high-performing digital systems across web, mobile, AI, and enterprise automation."
            />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($featuredServices as $service)
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between group relative overflow-hidden">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-12 h-12 rounded-2xl bg-blue-600/10 border border-blue-500/20 flex items-center justify-center text-blue-600 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                @if($service->category)
                                    <span class="text-[11px] font-mono font-bold px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600">
                                        {{ $service->category->name }}
                                    </span>
                                @endif
                            </div>

                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors tracking-tight font-['Outfit']">
                                {{ $service->name }}
                            </h3>

                            <p class="mt-3 text-sm text-slate-500 leading-relaxed line-clamp-3">
                                {{ $service->short_description }}
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <a href="{{ route('services.show', $service->slug) }}" class="text-xs font-bold font-mono text-blue-600 group-hover:text-indigo-600 inline-flex items-center space-x-1.5 transition-colors">
                                <span>Explore Architecture</span>
                                <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-14 text-center">
                <a href="{{ route('services.index') }}" class="px-8 py-4 rounded-2xl bg-white hover:bg-slate-50 border border-slate-300 text-slate-900 font-mono text-sm font-bold inline-flex items-center space-x-2 shadow-sm hover:shadow-md transition-all">
                    <span>View All 15+ Core Services</span>
                    <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- 6. DEDICATED 3D AI & MACHINE LEARNING SECTION --}}
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="rounded-3xl bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-950 text-white p-8 sm:p-14 relative overflow-hidden shadow-2xl">
            
            {{-- Background 3D Glow overlay --}}
            <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-12">
                <div class="lg:col-span-7 space-y-4">
                    <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-cyan-500/20 border border-cyan-400/30 text-cyan-300 text-xs font-mono uppercase tracking-widest font-bold">
                        3D AI Capabilities
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight font-['Outfit']">
                        Deploy Real AI Systems. <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-teal-200 to-indigo-300">Not Gimmicks.</span>
                    </h2>
                    <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                        From custom RAG vector databases and autonomous multi-agent systems to enterprise machine learning models, we build mathematical AI solutions that produce direct business ROI.
                    </p>

                    <div class="pt-4">
                        <a href="{{ route('contact') }}" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-cyan-400 to-blue-500 hover:from-cyan-300 hover:to-blue-400 text-slate-950 font-black text-sm shadow-xl shadow-cyan-500/30 inline-flex items-center space-x-2">
                            <span>Build With AI</span>
                            <svg class="w-4 h-4 text-slate-950" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- 3D AI Core Visual --}}
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-cyan-400/30 bg-slate-950/80 p-2 max-w-xs sm:max-w-sm animate-float">
                        <img src="{{ asset('images/ai-3d-core.jpg') }}" alt="3D AI Neural Processor Core" class="w-full h-auto rounded-2xl object-cover">
                        <div class="absolute bottom-4 left-4 right-4 bg-slate-900/90 backdrop-blur-md px-4 py-2 rounded-xl border border-white/10 text-center">
                            <span class="text-xs font-mono font-bold text-cyan-300">Intoxia Neural AI Engine // 2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-6 border-t border-white/10">
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-cyan-400/40 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-cyan-400/20 flex items-center justify-center text-cyan-300 mb-4 font-mono font-bold">01</div>
                    <h3 class="text-lg font-bold text-white font-['Outfit']">Generative AI & LLMs</h3>
                    <p class="text-xs text-slate-300 mt-2 leading-relaxed">Enterprise OpenAI, Claude, and Llama 3 custom integrations with prompt guardrails.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-cyan-400/40 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-cyan-400/20 flex items-center justify-center text-cyan-300 mb-4 font-mono font-bold">02</div>
                    <h3 class="text-lg font-bold text-white font-['Outfit']">Autonomous AI Agents</h3>
                    <p class="text-xs text-slate-300 mt-2 leading-relaxed">Multi-agent systems executing automated research, task routing, and data processing.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-cyan-400/40 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-cyan-400/20 flex items-center justify-center text-cyan-300 mb-4 font-mono font-bold">03</div>
                    <h3 class="text-lg font-bold text-white font-['Outfit']">Vector RAG Knowledge</h3>
                    <p class="text-xs text-slate-300 mt-2 leading-relaxed">Pinecone, ChromaDB, and pgvector embeddings over your proprietary company files.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- 7. INDUSTRIES SECTION --}}
    <section class="py-24 bg-white/70 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                badge="Domain Experience"
                title="Engineered For Your Industry"
                subtitle="We tailor regulatory compliance, architecture, and workflows to specific vertical challenges."
            />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($industries as $industry)
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>

                            <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors tracking-tight font-['Outfit']">
                                {{ $industry->name }}
                            </h3>

                            <p class="mt-3 text-sm text-slate-500 leading-relaxed">
                                {{ $industry->short_description }}
                            </p>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                            <a href="{{ route('industries.show', $industry->slug) }}" class="text-xs font-mono font-bold text-blue-600 hover:text-blue-700 inline-flex items-center space-x-1 transition-colors">
                                <span>Industry Framework</span>
                                <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('industries.index') }}" class="text-sm font-mono font-bold text-blue-600 hover:text-indigo-700 inline-flex items-center space-x-1">
                    <span>Explore All 12 Industry Solutions →</span>
                </a>
            </div>
        </div>
    </section>

    {{-- 8. WHY INTOXIA DIFFERENTIATION --}}
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-section-heading 
            badge="The Intoxia Standard"
            title="Why Leading Businesses Choose Us"
            subtitle="Clear architectural principles that separate production-grade engineering from generic agency work."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="light-glass-card rounded-3xl p-8 space-y-4">
                <div class="text-xs font-mono text-blue-600 font-bold tracking-widest uppercase">01 — Business-First Thinking</div>
                <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Code that drives unit economics</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    We start with your revenue model, operational bottlenecks, and customer acquisition costs. Every technical feature must move a commercial metric.
                </p>
            </div>

            <div class="light-glass-card rounded-3xl p-8 space-y-4">
                <div class="text-xs font-mono text-blue-600 font-bold tracking-widest uppercase">02 — Modern Clean Engineering</div>
                <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Maintainable, clean architecture</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    We adhere to SOLID principles, strict typing, automated test coverage, and modular codebases so your team can easily extend the project.
                </p>
            </div>

            <div class="light-glass-card rounded-3xl p-8 space-y-4">
                <div class="text-xs font-mono text-indigo-600 font-bold tracking-widest uppercase">03 — AI-Ready Architecture</div>
                <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Built for autonomous intelligence</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    We structure your database, APIs, and caching layer to support vector embeddings and LLM agent integration whenever you are ready.
                </p>
            </div>

            <div class="light-glass-card rounded-3xl p-8 space-y-4">
                <div class="text-xs font-mono text-emerald-600 font-bold tracking-widest uppercase">04 — Scalable Infrastructure</div>
                <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Built for millions of requests</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Cloud-native architectures deployed on AWS, Docker, and Redis that scale horizontally as your user traffic grows.
                </p>
            </div>

            <div class="light-glass-card rounded-3xl p-8 space-y-4">
                <div class="text-xs font-mono text-amber-600 font-bold tracking-widest uppercase">05 — Transparent Communication</div>
                <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">No middleman delays</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Direct access to your project lead architect. Bi-weekly demos, staging deployment previews, and continuous GitHub commit transparency.
                </p>
            </div>

            <div class="light-glass-card rounded-3xl p-8 space-y-4">
                <div class="text-xs font-mono text-purple-600 font-bold tracking-widest uppercase">06 — Long-Term Support</div>
                <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">We stand behind our code</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Dedicated post-launch SLA maintenance, security updates, server monitoring, and continuous iteration to ensure zero downtime.
                </p>
            </div>
        </div>
    </section>

    {{-- 9. PORTFOLIO & WORK PREVIEW --}}
    @if($featuredProjects->count() > 0)
    <section class="py-24 bg-white/70 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                badge="Selected Work"
                title="Featured Case Studies & Engineering"
                subtitle="Explore how we have engineered digital solutions for enterprises, startups, and institutions."
            />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>

            <div class="mt-14 text-center">
                <a href="{{ route('work.index') }}" class="px-8 py-4 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white font-mono text-sm font-bold inline-flex items-center space-x-2 shadow-lg shadow-blue-600/25 transition-all">
                    <span>Explore Full Portfolio</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </section>
    @endif

    {{-- 10. TESTIMONIALS SECTION --}}
    @if($testimonials->count() > 0)
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-section-heading 
            badge="Client Feedback"
            title="What Our Partners Say"
            subtitle="Direct reviews from CTOs, founders, and product leaders who trust Intoxia."
        />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($testimonials as $testimonial)
                <div class="light-glass-card rounded-3xl p-8 flex flex-col justify-between relative shadow-sm">
                    <div>
                        <div class="flex items-center space-x-1 text-amber-400 mb-4">
                            @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>

                        <p class="text-sm text-slate-700 leading-relaxed italic">
                            "{{ $testimonial->testimonial }}"
                        </p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white font-bold text-sm shadow-md">
                            {{ substr($testimonial->name, 0, 1) }}
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900 font-['Outfit']">{{ $testimonial->name }}</div>
                            <div class="text-xs text-slate-500">{{ $testimonial->role }}@if($testimonial->company), {{ $testimonial->company }}@endif</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- 11. GLOBAL CALL TO ACTION BANNER --}}
    <x-cta-banner />

</x-layouts.app>
