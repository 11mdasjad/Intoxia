@props([
    'service'
])

<div class="glass-card rounded-2xl p-6 sm:p-8 flex flex-col justify-between group relative overflow-hidden">
    {{-- Top subtle glow --}}
    <div class="absolute -top-12 -right-12 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl group-hover:bg-blue-500/25 transition-all duration-500 pointer-events-none"></div>

    <div>
        {{-- Icon & Category Badge --}}
        <div class="flex items-center justify-between mb-6">
            <div class="w-12 h-12 rounded-xl bg-blue-600/10 border border-blue-500/20 flex items-center justify-center text-blue-400 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-md">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            @if($service->category)
                <span class="text-[11px] font-mono font-medium px-2.5 py-1 rounded-md bg-white text-slate-600 border border-slate-200">
                    {{ $service->category->name }}
                </span>
            @endif
        </div>

        {{-- Service Title --}}
        <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-400 transition-colors tracking-tight">
            {{ $service->name }}
        </h3>

        {{-- Short Description --}}
        <p class="mt-3 text-sm text-slate-600 leading-relaxed line-clamp-3">
            {{ $service->short_description }}
        </p>

        {{-- Bullet points if any --}}
        @if($service->benefits && is_array($service->benefits))
            <ul class="mt-4 space-y-1.5 text-xs text-slate-700">
                @foreach(array_slice($service->benefits, 0, 3) as $benefit)
                    <li class="flex items-center space-x-2">
                        <svg class="w-3.5 h-3.5 text-cyan-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="truncate">{{ $benefit }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    {{-- Bottom CTA Link --}}
    <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between">
        <a href="{{ route('services.show', $service->slug) }}" class="text-xs font-semibold font-mono text-blue-400 group-hover:text-cyan-300 inline-flex items-center space-x-1.5 transition-colors">
            <span>Explore Architecture</span>
            <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>
</div>
