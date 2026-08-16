<x-layouts.app 
    title="Portfolio & Case Studies — Intoxia Technologies"
    description="Explore our filterable portfolio of production web applications, AI platforms, SaaS products, and mobile architectures."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200/80 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono uppercase tracking-widest font-bold mb-4 shadow-sm">
                <span>Proven Track Record</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-tight font-['Outfit']">
                Selected Work & <span class="text-gradient-vibrant">Case Studies</span>
            </h1>
            <p class="mt-6 text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                A selection of digital products, AI systems, and custom software engineered by Intoxia Technologies.
            </p>
        </div>
    </section>

    {{-- Filter Bar & Gallery --}}
    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Category Filters --}}
        <div class="flex flex-wrap items-center justify-center gap-2.5 mb-14">
            <a href="{{ route('work.index') }}" class="px-5 py-2.5 rounded-2xl text-xs font-mono font-bold transition-all shadow-sm {{ !$selectedCategory ? 'bg-blue-600 text-white shadow-blue-600/25' : 'bg-white text-slate-700 hover:text-blue-600 hover:bg-slate-50 border border-slate-200' }}">
                All Projects
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('work.index', ['category' => $cat->slug]) }}" class="px-5 py-2.5 rounded-2xl text-xs font-mono font-bold transition-all shadow-sm {{ $selectedCategory === $cat->slug ? 'bg-blue-600 text-white shadow-blue-600/25' : 'bg-white text-slate-700 hover:text-blue-600 hover:bg-slate-50 border border-slate-200' }}">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <x-project-card :project="$project" />
            @empty
                <div class="col-span-full text-center py-16 text-slate-500 font-mono text-sm">
                    No projects found in this category.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-14">
            {{ $projects->links() }}
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
