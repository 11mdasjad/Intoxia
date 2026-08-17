<x-layouts.app 
    :title="$post->seo_title ?? ($post->title . ' — Intoxia Insights')"
    :description="$post->seo_description ?? $post->excerpt"
    :ogImage="$post->og_image ? asset('storage/' . $post->og_image) : null"
    ogType="article"
>
    @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BlogPosting",
      "headline": "{{ $post->title }}",
      "description": "{{ $post->excerpt }}",
      "datePublished": "{{ $post->published_at?->tz('UTC')->toAtomString() }}",
      "dateModified": "{{ $post->updated_at?->tz('UTC')->toAtomString() }}",
      "author": {
        "@@type": "Person",
        "name": "{{ $post->author->name ?? 'Intoxia Technologies' }}"
      },
      "publisher": {
        "@@type": "Organization",
        "name": "Intoxia Technologies"
      }
    }
    </script>
    @endpush

    {{-- Hero Section --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <a href="{{ route('insights.index') }}" class="text-xs font-mono text-blue-400 hover:text-cyan-300 inline-flex items-center space-x-1 mb-6">
                <span>← All Insights</span>
            </a>

            @if($post->category)
                <div class="mb-4">
                    <span class="px-3 py-1 rounded-md text-xs font-mono font-bold bg-blue-600/20 text-cyan-400 border border-blue-500/30">
                        {{ $post->category->name }}
                    </span>
                </div>
            @endif

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                {{ $post->title }}
            </h1>

            <div class="mt-6 flex flex-wrap items-center gap-4 text-xs font-mono text-slate-600 pt-4 border-t border-slate-200">
                <span>By <strong class="text-slate-900">{{ $post->author->name ?? 'Intoxia Engineering' }}</strong></span>
                <span>&bull;</span>
                <span>Published {{ $post->published_at?->format('M j, Y') }}</span>
                <span>&bull;</span>
                <span>{{ $post->reading_time ?? 5 }} min read</span>
            </div>
        </div>
    </section>

    {{-- Main Article Content --}}
    <article class="py-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($post->excerpt)
            <div class="p-6 sm:p-8 rounded-2xl bg-blue-50/60 border border-blue-200 text-slate-700 text-lg leading-relaxed font-medium mb-12">
                {{ $post->excerpt }}
            </div>
        @endif

        <div class="prose prose-slate prose-lg max-w-none text-slate-700 leading-relaxed">
            {!! $post->body !!}
        </div>

        {{-- Tags --}}
        @if($post->tags && $post->tags->count() > 0)
            <div class="mt-12 pt-8 border-t border-slate-200 flex flex-wrap gap-2">
                @foreach($post->tags as $tag)
                    <span class="px-3 py-1 rounded-lg bg-white text-slate-600 text-xs font-mono">
                        #{{ $tag->name }}
                    </span>
                @endforeach
            </div>
        @endif

        {{-- Author Bio Card --}}
        <div class="mt-12 p-8 rounded-3xl bg-white border border-slate-200 flex items-center space-x-6">
            <div class="w-14 h-14 rounded-2xl bg-blue-600/20 text-blue-400 flex items-center justify-center font-bold text-xl font-mono shrink-0">
                IX
            </div>
            <div>
                <div class="text-sm font-bold text-slate-900">Intoxia Technologies Engineering Team</div>
                <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                    Research and engineering insights written by our software architects in New Delhi, India. We specialize in Laravel 13, applied AI systems, and cloud infrastructure.
                </p>
            </div>
        </div>
    </article>

    {{-- Related Posts --}}
    @if($relatedPosts->count() > 0)
    <section class="py-16 bg-[#05070a] border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-8">Related Technical Insights</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedPosts as $related)
                    <x-blog-card :post="$related" />
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
