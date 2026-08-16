@props([
    'testimonial'
])

<div class="glass-card rounded-2xl p-6 sm:p-8 flex flex-col justify-between relative">
    {{-- Quote Icon Watermark --}}
    <div class="text-blue-500/10 font-serif text-6xl leading-none absolute top-4 right-6 pointer-events-none select-none">“</div>

    <div>
        {{-- Stars --}}
        <div class="flex items-center space-x-1 text-amber-400 mb-4">
            @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
            @endfor
        </div>

        <p class="text-sm text-slate-700 leading-relaxed italic">
            "{{ $testimonial->testimonial }}"
        </p>
    </div>

    <div class="mt-6 pt-4 border-t border-slate-200 flex items-center space-x-3">
        @if($testimonial->photo)
            <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="{{ $testimonial->name }}" class="w-10 h-10 rounded-full object-cover border border-blue-500/30">
        @else
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-600 to-cyan-500 flex items-center justify-center text-white font-bold text-sm">
                {{ substr($testimonial->name, 0, 1) }}
            </div>
        @endif
        <div>
            <div class="text-sm font-bold text-slate-900">{{ $testimonial->name }}</div>
            <div class="text-xs text-slate-600">{{ $testimonial->role }}@if($testimonial->company), {{ $testimonial->company }}@endif</div>
        </div>
    </div>
</div>
