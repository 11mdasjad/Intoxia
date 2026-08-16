@props([
    'badge' => null,
    'title' => '',
    'subtitle' => null,
    'align' => 'center',
])

@php
    $alignmentClass = match($align) {
        'left' => 'text-left',
        'right' => 'text-right',
        default => 'text-center mx-auto',
    };
@endphp

<div class="max-w-3xl mb-12 sm:mb-16 {{ $alignmentClass }}">
    @if($badge)
        <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono font-bold tracking-wide uppercase mb-4 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
            <span>{{ $badge }}</span>
        </div>
    @endif

    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-['Outfit']">
        {!! $title !!}
    </h2>

    @if($subtitle)
        <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed font-normal">
            {!! $subtitle !!}
        </p>
    @endif
</div>
