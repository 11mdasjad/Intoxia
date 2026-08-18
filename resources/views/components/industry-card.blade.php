@props([
    'industry'
])

<div class="glass-card rounded-2xl p-6 sm:p-8 flex flex-col justify-between group">
    <div>
        {{-- Icon & Identifier --}}
        <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
            <x-industry-icon :icon="$industry->icon" :name="$industry->name" class="w-6 h-6" />
        </div>

        <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors tracking-tight">
            {{ $industry->name }}
        </h3>

        <p class="mt-3 text-sm text-slate-600 leading-relaxed">
            {{ $industry->short_description }}
        </p>

        @if($industry->potential_products && is_array($industry->potential_products))
            <div class="mt-5 pt-4 border-t border-slate-200 space-y-1.5">
                <span class="text-[11px] font-mono text-slate-500 uppercase tracking-wider block">Custom Solutions:</span>
                @foreach(array_slice($industry->potential_products, 0, 3) as $product)
                    <div class="text-xs text-slate-700 flex items-center space-x-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                        <span class="truncate">{{ $product }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between">
        <a href="{{ route('industries.show', $industry->slug) }}" class="text-xs font-mono font-semibold text-blue-600 hover:text-blue-800 inline-flex items-center space-x-1 transition-colors">
            <span>Industry Framework</span>
            <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>
</div>
