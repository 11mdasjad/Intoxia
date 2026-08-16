<x-layouts.app 
    title="Client Reviews & Testimonials — Intoxia Technologies"
    description="Read reviews and verified feedback from CTOs, product managers, and enterprise leaders who partner with Intoxia Technologies."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-mono uppercase tracking-widest font-semibold mb-4">
                Client Trust
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Reviews & <span class="text-gradient-brand">Client Feedback</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Hear directly from business leaders on how our engineering team delivered on speed, quality, and commercial objectives.
            </p>
        </div>
    </section>

    {{-- Testimonials Grid --}}
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials as $testimonial)
                <x-testimonial-card :testimonial="$testimonial" />
            @empty
                <div class="col-span-full text-center py-16 text-slate-500 font-mono text-sm">
                    Verified client testimonials are updated regularly through our administrative portal.
                </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $testimonials->links() }}
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
