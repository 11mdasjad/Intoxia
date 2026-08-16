<x-layouts.app 
    title="Technology Ecosystem & Engineering Stack — Intoxia Technologies"
    description="Explore the technologies, frameworks, cloud infrastructures, databases, and AI tooling powering Intoxia's enterprise applications."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200/80 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono uppercase tracking-widest font-bold mb-4 shadow-sm">
                <span>Architecture & Ecosystem</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-tight font-['Outfit']">
                Our Technology <span class="text-gradient-vibrant">Ecosystem</span>
            </h1>
            <p class="mt-6 text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                We select modern, battle-tested technology stacks engineered for ultra-low latency, multi-year scalability, and zero downtime.
            </p>
        </div>
    </section>

    {{-- Tech Stack Categories --}}
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        @foreach($categories as $category)
            @if($category->technologies->count() > 0)
                <div class="light-glass-panel rounded-3xl p-8 sm:p-10 border border-slate-200/80 shadow-md space-y-8">
                    
                    {{-- Category Header --}}
                    <div class="flex items-center space-x-3 border-b border-slate-200/80 pb-4">
                        <span class="w-3 h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-500 shadow-sm shadow-blue-500/50"></span>
                        <h2 class="text-2xl font-bold text-slate-900 tracking-tight font-['Outfit']">{{ $category->name }}</h2>
                        <span class="text-xs font-mono font-bold text-slate-400 bg-slate-100 px-2.5 py-0.5 rounded-md">
                            {{ $category->technologies->count() }} Technologies
                        </span>
                    </div>

                    {{-- Technology Cards Grid with Official SVG Logos --}}
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
                        @foreach($category->technologies as $tech)
                            <div class="light-glass-card rounded-2xl p-5 text-center flex flex-col items-center justify-center space-y-3 group border border-slate-200/90 shadow-sm hover:shadow-xl hover:border-blue-300 transition-all duration-300">
                                
                                {{-- Official Logo Container --}}
                                <div class="w-14 h-14 rounded-2xl bg-white border border-slate-100 flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-300">
                                    <x-tech-icon :name="$tech->name" size="w-8 h-8" />
                                </div>

                                {{-- Tech Name --}}
                                <div>
                                    <span class="text-sm font-bold text-slate-900 group-hover:text-blue-600 transition-colors font-['Outfit'] block">
                                        {{ $tech->name }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
