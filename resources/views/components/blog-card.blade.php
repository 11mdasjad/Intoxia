@props([
    'post'
])

<article class="glass-card rounded-2xl overflow-hidden group flex flex-col justify-between">
    {{-- Featured Image or Visual Header --}}
    <div class="relative h-48 bg-slate-900 overflow-hidden">
        @if($post->featured_image)
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        @else
            <div class="w-full h-full bg-gradient-to-br from-blue-950/40 via-slate-900 to-indigo-950/40 flex items-center justify-center p-6 text-center border-b border-white/10">
                <span class="font-mono text-xs text-cyan-400 uppercase tracking-widest">{{ $post->category->name ?? 'Technology' }}</span>
            </div>
        @endif

        @if($post->category)
            <div class="absolute top-3 left-3">
                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono font-semibold bg-white/85 backdrop-blur-md text-cyan-400 border border-slate-200">
                    {{ $post->category->name }}
                </span>
            </div>
        @endif

        @if($post->reading_time)
            <div class="absolute bottom-3 right-3">
                <span class="px-2 py-0.5 rounded text-[10px] font-mono text-slate-700 bg-black/70 backdrop-blur-sm">
                    {{ $post->reading_time }} min read
                </span>
            </div>
        @endif
    </div>

    {{-- Content --}}
    <div class="p-6 flex-grow flex flex-col justify-between">
        <div>
            <div class="text-xs text-slate-500 font-mono mb-2">
                {{ $post->published_at?->format('M j, Y') ?? 'Recently published' }}
            </div>

            <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-400 transition-colors tracking-tight leading-snug">
                <a href="{{ route('insights.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h3>

            <p class="mt-2.5 text-sm text-slate-600 leading-relaxed line-clamp-3">
                {{ $post->excerpt }}
            </p>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between">
            <span class="text-xs text-slate-600 font-medium">
                By {{ $post->author->name ?? 'Intoxia Engineering' }}
            </span>
            <a href="{{ route('insights.show', $post->slug) }}" class="text-xs font-mono font-semibold text-blue-400 group-hover:text-cyan-300 inline-flex items-center space-x-1 transition-colors">
                <span>Read Article</span>
                <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</article>
