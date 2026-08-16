<x-layouts.app 
    :title="$caseStudy->seo_title ?? ($caseStudy->title . ' | Intoxia Case Study')"
    :description="$caseStudy->seo_description ?? substr(strip_tags($caseStudy->challenge ?? $caseStudy->solution ?? ''), 0, 160)"
    :ogImage="$caseStudy->og_image ? asset('storage/' . $caseStudy->og_image) : null"
>
    {{-- Hero Section --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl">
                <a href="{{ route('work.index') }}" class="text-xs font-mono text-blue-400 hover:text-cyan-300 inline-flex items-center space-x-1 mb-4">
                    <span>← All Case Studies</span>
                </a>
                <div class="flex flex-wrap gap-2 mb-4">
                    @if($caseStudy->industry)
                        <span class="px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-cyan-400 text-xs font-mono font-semibold uppercase">
                            {{ $caseStudy->industry }}
                        </span>
                    @endif
                    @if($caseStudy->duration)
                        <span class="px-3 py-1 rounded-full bg-white border border-slate-200 text-slate-600 text-xs font-mono">
                            Timeline: {{ $caseStudy->duration }}
                        </span>
                    @endif
                </div>

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    {{ $caseStudy->title }}
                </h1>

                @if($caseStudy->client)
                    <div class="mt-4 text-sm font-mono text-slate-600">
                        Client: <span class="text-slate-900 font-semibold">{{ $caseStudy->client }}</span>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Case Study Deep Dive with Sticky Navigation --}}
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            {{-- Main Content --}}
            <div class="lg:col-span-8 space-y-14">
                
                {{-- Challenge --}}
                @if($caseStudy->challenge)
                    <div id="challenge" class="scroll-mt-28 space-y-4">
                        <div class="text-xs font-mono text-red-400 font-bold uppercase tracking-widest">01 — The Challenge</div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">The Problem & Business Context</h2>
                        <div class="text-slate-700 text-base leading-relaxed space-y-4">
                            <p>{{ $caseStudy->challenge }}</p>
                            @if($caseStudy->business_context)
                                <p class="text-slate-600">{{ $caseStudy->business_context }}</p>
                            @endif
                        </div>
                    </div>
                @endif

                {{-- Solution --}}
                @if($caseStudy->solution)
                    <div id="solution" class="scroll-mt-28 space-y-4 border-t border-slate-200 pt-12">
                        <div class="text-xs font-mono text-blue-400 font-bold uppercase tracking-widest">02 — The Solution</div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Strategic Engineering Approach</h2>
                        <div class="prose prose-invert prose-lg max-w-none text-slate-700 leading-relaxed">
                            {!! $caseStudy->solution !!}
                        </div>
                    </div>
                @endif

                {{-- Architecture & Design --}}
                @if($caseStudy->architecture || $caseStudy->design_approach)
                    <div id="architecture" class="scroll-mt-28 space-y-6 border-t border-slate-200 pt-12">
                        <div class="text-xs font-mono text-cyan-400 font-bold uppercase tracking-widest">03 — Architecture & Stack</div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">System Architecture & Design</h2>
                        
                        @if($caseStudy->design_approach)
                            <div class="p-6 rounded-2xl bg-white border border-slate-200 text-slate-700 text-sm leading-relaxed">
                                <strong class="text-slate-900 block mb-2 font-mono text-xs uppercase tracking-wider text-cyan-300">Design & UX Philosophy</strong>
                                {!! $caseStudy->design_approach !!}
                            </div>
                        @endif

                        @if($caseStudy->architecture)
                            <div class="prose prose-invert max-w-none text-slate-700 leading-relaxed">
                                {!! $caseStudy->architecture !!}
                            </div>
                        @endif

                        @if($caseStudy->technologies_used && is_array($caseStudy->technologies_used))
                            <div class="pt-4">
                                <div class="text-xs font-mono text-slate-600 uppercase tracking-wider mb-3">Technologies Leveraged:</div>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($caseStudy->technologies_used as $tech)
                                        <span class="px-3.5 py-1.5 rounded-lg bg-blue-950/50 border border-blue-500/30 text-cyan-300 text-xs font-mono font-semibold">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                @endif

                {{-- Results & Business Impact --}}
                @if($caseStudy->results && is_array($caseStudy->results))
                    <div id="results" class="scroll-mt-28 space-y-6 border-t border-slate-200 pt-12">
                        <div class="text-xs font-mono text-emerald-400 font-bold uppercase tracking-widest">04 — Commercial Impact</div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Results Achieved</h2>
                        
                        <div class="grid grid-cols-1 gap-4">
                            @foreach($caseStudy->results as $result)
                                <div class="p-5 rounded-2xl bg-emerald-950/20 border border-emerald-500/20 flex items-center space-x-3 text-slate-200 text-sm">
                                    <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <span class="font-medium">{{ $result }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Client Testimonial if present --}}
                @if($caseStudy->testimonial_quote)
                    <div class="p-8 rounded-3xl bg-blue-950/30 border border-blue-500/20 relative">
                        <div class="text-4xl text-blue-400 font-serif leading-none mb-3">“</div>
                        <p class="text-base text-slate-200 italic leading-relaxed">
                            {{ $caseStudy->testimonial_quote }}
                        </p>
                        <div class="mt-4 pt-4 border-t border-slate-200 text-xs font-mono text-slate-600">
                            <strong>{{ $caseStudy->testimonial_name }}</strong> &bull; {{ $caseStudy->testimonial_role }}
                        </div>
                    </div>
                @endif

            </div>

            {{-- Sticky Sidebar Navigator & CTA --}}
            <div class="lg:col-span-4 space-y-8">
                <div class="glass-panel rounded-3xl p-6 sm:p-8 border border-blue-500/20 sticky top-28 space-y-6">
                    <h3 class="text-base font-bold text-slate-900 font-mono uppercase tracking-wider">Case Study Contents</h3>
                    
                    <nav class="space-y-2 text-sm">
                        <a href="#challenge" class="block py-1.5 text-slate-600 hover:text-cyan-300 font-mono transition-colors">01. The Challenge</a>
                        <a href="#solution" class="block py-1.5 text-slate-600 hover:text-cyan-300 font-mono transition-colors">02. The Solution</a>
                        <a href="#architecture" class="block py-1.5 text-slate-600 hover:text-cyan-300 font-mono transition-colors">03. Architecture & Tech</a>
                        <a href="#results" class="block py-1.5 text-slate-600 hover:text-cyan-300 font-mono transition-colors">04. Results & Metrics</a>
                    </nav>

                    <div class="pt-6 border-t border-slate-200 space-y-3">
                        <div class="text-xs text-slate-600">Need a similar product built?</div>
                        <a href="{{ route('contact') }}" class="block text-center w-full py-3.5 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold text-sm shadow-lg shadow-blue-600/30 transition-colors">
                            Start Your Project
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
