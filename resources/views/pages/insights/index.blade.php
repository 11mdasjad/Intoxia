<x-layouts.app 
    title="Engineering Insights & Technology Articles — Intoxia Technologies"
    description="In-depth technical articles on Laravel 13, AI Agent architecture, RAG systems, cloud infrastructure, and modern software design."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-mono uppercase tracking-widest font-semibold mb-4">
                Knowledge & R&D
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Engineering <span class="text-gradient-brand">Insights & Blog</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Architectural breakdowns, modern framework patterns, and actionable insights on AI engineering written by our senior developers.
            </p>
        </div>
    </section>

    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Search & Category Filter Bar --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-16">
            {{-- Category Pills --}}
            <div class="flex flex-wrap items-center gap-2">
                <a href="{{ route('insights.index') }}" class="px-4 py-2 rounded-xl text-xs font-mono font-semibold transition-all {{ !$selectedCategory ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/30' : 'bg-white/5 text-slate-400 hover:text-white hover:bg-white/10 border border-white/5' }}">
                    All Topics
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('insights.index', ['category' => $cat->slug]) }}" class="px-4 py-2 rounded-xl text-xs font-mono font-semibold transition-all {{ $selectedCategory === $cat->slug ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/30' : 'bg-white/5 text-slate-400 hover:text-white hover:bg-white/10 border border-white/5' }}">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>

            {{-- Search Input --}}
            <form action="{{ route('insights.index') }}" method="GET" class="w-full md:w-72">
                @if($selectedCategory)
                    <input type="hidden" name="category" value="{{ $selectedCategory }}">
                @endif
                <div class="relative">
                    <input 
                        type="text" 
                        name="q" 
                        value="{{ $search ?? '' }}" 
                        placeholder="Search articles..."
                        class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 pl-10 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 font-mono"
                    >
                    <svg class="w-4 h-4 text-slate-500 absolute left-3.5 top-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </form>
        </div>

        {{-- Featured Post --}}
        @if($featuredPost)
            <div class="mb-16">
                <div class="glass-panel rounded-3xl p-8 sm:p-12 border border-blue-500/30 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-8 space-y-4">
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1 rounded-md text-xs font-mono font-bold bg-blue-600/20 text-cyan-400 border border-blue-500/30">
                                FEATURED ARTICLE
                            </span>
                            @if($featuredPost->category)
                                <span class="text-xs font-mono text-slate-600">{{ $featuredPost->category->name }}</span>
                            @endif
                        </div>

                        <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight hover:text-blue-400 transition-colors">
                            <a href="{{ route('insights.show', $featuredPost->slug) }}">
                                {{ $featuredPost->title }}
                            </a>
                        </h2>

                        <p class="text-slate-700 text-base leading-relaxed">
                            {{ $featuredPost->excerpt }}
                        </p>

                        <div class="pt-4 flex items-center space-x-4 text-xs font-mono text-slate-600">
                            <span>By {{ $featuredPost->author->name ?? 'Intoxia Engineering' }}</span>
                            <span>&bull;</span>
                            <span>{{ $featuredPost->published_at?->format('M j, Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ $featuredPost->reading_time ?? 5 }} min read</span>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex items-center justify-center">
                        <a href="{{ route('insights.show', $featuredPost->slug) }}" class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-xl shadow-blue-600/30 transition-colors">
                            Read Full Insight →
                        </a>
                    </div>
                </div>
            </div>
        @endif

        {{-- Articles Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <x-blog-card :post="$post" />
            @empty
                <div class="col-span-full text-center py-16 text-slate-500 font-mono text-sm">
                    No articles found matching your criteria.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
