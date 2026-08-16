@props([
    'project'
])

@php
    $imageSrc = asset('images/hero-3d-visual.jpg');
    if (!empty($project->image)) {
        if (str_starts_with($project->image, 'http') || str_starts_with($project->image, 'images/')) {
            $imageSrc = asset($project->image);
        } else {
            $imageSrc = asset('storage/' . $project->image);
        }
    }
@endphp

<div class="light-glass-card rounded-3xl overflow-hidden group flex flex-col justify-between border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300">
    
    {{-- Project Visual / Thumbnail --}}
    <div class="relative h-60 bg-slate-100 overflow-hidden">
        <img 
            src="{{ $imageSrc }}" 
            alt="{{ $project->title }}" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        >

        {{-- Category Badge --}}
        @if($project->category)
            <div class="absolute top-3.5 left-3.5">
                <span class="px-3 py-1 rounded-xl text-xs font-mono font-bold bg-white/95 backdrop-blur-md text-blue-600 border border-slate-200/80 shadow-sm">
                    {{ $project->category->name }}
                </span>
            </div>
        @endif
    </div>

    {{-- Content --}}
    <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between space-y-4">
        <div>
            <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors tracking-tight font-['Outfit']">
                {{ $project->title }}
            </h3>
            
            <p class="mt-2 text-sm text-slate-600 line-clamp-2 leading-relaxed font-normal">
                {{ $project->short_description }}
            </p>

            {{-- Tech Tags --}}
            @if($project->technologies && $project->technologies->count() > 0)
                <div class="mt-4 flex flex-wrap gap-1.5">
                    @foreach($project->technologies->take(4) as $tech)
                        <span class="text-[11px] font-mono font-semibold px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 border border-slate-200">
                            {{ $tech->name }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
            <a href="{{ route('work.show', $project->caseStudy->slug ?? $project->slug) }}" class="text-xs font-mono font-bold text-blue-600 group-hover:text-indigo-600 inline-flex items-center space-x-1.5 transition-colors">
                <span>View Case Study</span>
                <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</div>
