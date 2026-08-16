<x-layouts.app 
    title="Industries & Vertical Solutions — Intoxia Technologies"
    description="Engineered industry solutions for Healthcare, FinTech, E-commerce, EdTech, Real Estate, Manufacturing, and Startups."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono uppercase tracking-widest font-semibold mb-4">
                Vertical Expertise
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Industry-Specific <span class="text-gradient-brand">Software Engineering</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Every industry faces unique regulatory, operational, and customer demands. Explore our tailored frameworks and custom architectures across 12 modern business sectors.
            </p>
        </div>
    </section>

    {{-- Industries Grid --}}
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($industries as $industry)
                <x-industry-card :industry="$industry" />
            @endforeach
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
