<x-layouts.app 
    title="Engineering & AI Services — Intoxia Technologies"
    description="Comprehensive IT services: Web Development, AI & Machine Learning, Generative AI Agents, Mobile Apps, SaaS Platforms, Cloud DevOps, and Business Automation."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-mono uppercase tracking-widest font-semibold mb-4">
                Core Capabilities
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Software Engineering & <span class="text-gradient-brand">Intelligent AI Services</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Discover our full spectrum of enterprise technology services. Every service is delivered with dedicated product architects, clean code standards, and transparent SLAs.
            </p>
        </div>
    </section>

    {{-- Services by Category --}}
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        @foreach($categories as $category)
            @if($category->services->count() > 0)
                <div>
                    <div class="flex items-center space-x-3 mb-8 border-b border-slate-200 pb-4">
                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">{{ $category->name }}</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($category->services as $service)
                            <x-service-card :service="$service" />
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
