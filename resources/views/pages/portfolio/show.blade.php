<x-layouts.app 
    :title="$project->title . ' — Intoxia Technologies'"
    :description="$project->short_description"
>
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <a href="{{ route('work.index') }}" class="text-xs font-mono text-blue-600 hover:text-blue-700 font-semibold inline-flex items-center space-x-1 mb-4">
                    <span>← All Projects</span>
                </a>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">{{ $project->title }}</h1>
                <p class="mt-4 text-lg text-slate-700">{{ $project->short_description }}</p>
            </div>
        </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-slate max-w-none text-slate-700">
            {!! $project->description !!}
        </div>
    </section>

    <x-cta-banner />
</x-layouts.app>
