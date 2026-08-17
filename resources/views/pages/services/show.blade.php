<x-layouts.app 
    :title="$service->seo_title ?? ($service->name . ' Services | Intoxia Technologies')"
    :description="$service->seo_description ?? $service->short_description"
    :ogImage="$service->og_image ? asset('storage/' . $service->og_image) : null"
>
    @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Service",
      "serviceType": "{{ $service->name }}",
      "provider": {
        "@@type": "Organization",
        "name": "Intoxia Technologies"
      },
      "description": "{{ $service->short_description }}"
    }
    </script>
    @endpush

    {{-- Hero --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <a href="{{ route('services.index') }}" class="text-xs font-mono text-blue-600 hover:text-blue-700 font-semibold inline-flex items-center space-x-1 mb-4">
                    <span>← All Services</span>
                </a>
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono uppercase tracking-widest font-bold ml-3 shadow-sm">
                    {{ $service->category->name ?? 'Enterprise Service' }}
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mt-2">
                    {{ $service->name }}
                </h1>

                <p class="mt-6 text-lg sm:text-xl text-slate-700 leading-relaxed">
                    {{ $service->short_description }}
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="{{ route('contact') }}" class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-xl shadow-blue-600/30">
                        Consult On {{ $service->name }}
                    </a>
                    <a href="https://wa.me/917011639618?text={{ urlencode('Hello Intoxia Technologies, I want to discuss ' . $service->name) }}" target="_blank" rel="noopener noreferrer" class="px-6 py-4 rounded-xl bg-emerald-50 hover:bg-emerald-100 border border-emerald-300 text-emerald-700 font-semibold text-sm">
                        WhatsApp Fast-Track
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Service Content --}}
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            {{-- Main Text --}}
            <div class="lg:col-span-8 space-y-12">
                <div class="prose prose-slate prose-lg max-w-none text-slate-700 leading-relaxed">
                    {!! $service->description ?? '<p>' . $service->short_description . '</p>' !!}
                </div>

                {{-- Key Benefits --}}
                @if($service->benefits && is_array($service->benefits))
                    <div class="p-8 rounded-3xl bg-white border border-slate-200 shadow-sm">
                        <h2 class="text-2xl font-bold text-slate-900 mb-6">Key Business & Technical Benefits</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($service->benefits as $benefit)
                                <div class="flex items-start space-x-3">
                                    <div class="w-5 h-5 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 mt-0.5 border border-blue-100">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <span class="text-sm text-slate-700 font-medium leading-normal">{{ $benefit }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Technologies & Stack --}}
                @if($service->technologies && is_array($service->technologies))
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">Core Technology Stack</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach($service->technologies as $tech)
                                <span class="px-3.5 py-1.5 rounded-lg bg-blue-50 border border-blue-200 text-blue-700 font-mono text-xs font-semibold">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-4 space-y-8">
                <div class="glass-panel rounded-3xl p-6 sm:p-8 border border-blue-500/20 space-y-6">
                    <h3 class="text-xl font-bold text-slate-900">Start Building</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Ready to begin your {{ $service->name }} engagement? Our technical squad can initiate discovery within 48 hours.
                    </p>

                    <div class="space-y-3 pt-2">
                        <a href="{{ route('contact') }}" class="block text-center w-full py-3.5 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold text-sm shadow-lg shadow-blue-600/30 transition-colors">
                            Request Proposal
                        </a>
                        <a href="tel:+917011639618" class="block text-center w-full py-3 bg-white hover:bg-slate-50 text-slate-700 rounded-xl font-mono text-xs transition-colors">
                            Call +91 70116 39618
                        </a>
                    </div>
                </div>

                {{-- Related Services --}}
                @if($relatedServices->count() > 0)
                    <div class="p-6 rounded-3xl bg-white border border-slate-200 space-y-4">
                        <h3 class="text-sm font-mono uppercase tracking-widest text-slate-600 font-bold">Related Capabilities</h3>
                        <div class="space-y-3">
                            @foreach($relatedServices as $related)
                                <a href="{{ route('services.show', $related->slug) }}" class="block p-3 rounded-xl bg-white hover:bg-slate-50 text-sm font-semibold text-slate-900 hover:text-blue-400 transition-colors">
                                    {{ $related->name }} →
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
