<x-layouts.app 
    :title="$industry->seo_title ?? ($industry->name . ' Digital Solutions | Intoxia Technologies')"
    :description="$industry->seo_description ?? $industry->short_description"
    :ogImage="$industry->og_image ? asset('storage/' . $industry->og_image) : null"
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <a href="{{ route('industries.index') }}" class="text-xs font-mono text-blue-600 hover:text-blue-700 font-semibold inline-flex items-center space-x-1 mb-4">
                    <span>← All Industries</span>
                </a>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    {{ $industry->name }} <span class="text-gradient-brand">Solutions</span>
                </h1>

                <p class="mt-6 text-lg sm:text-xl text-slate-700 leading-relaxed">
                    {{ $industry->short_description }}
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="{{ route('contact') }}" class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-xl shadow-blue-600/30">
                        Discuss {{ $industry->name }} Architecture
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Problem & Solution Deep Dive --}}
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-8 space-y-12">
                {{-- Problem Statement --}}
                @if($industry->problem)
                    <div class="p-8 rounded-3xl bg-rose-50/70 border border-rose-200">
                        <div class="text-xs font-mono text-rose-700 uppercase tracking-widest font-bold mb-2">Industry Bottlenecks & Challenges</div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-3">The Problem</h2>
                        <p class="text-slate-700 text-base leading-relaxed">
                            {{ $industry->problem }}
                        </p>
                    </div>
                @endif

                {{-- Intoxia Solution --}}
                @if($industry->solution)
                    <div class="p-8 rounded-3xl bg-blue-50/60 border border-blue-200">
                        <div class="text-xs font-mono text-blue-600 uppercase tracking-widest font-bold mb-2">Intoxia Engineering Framework</div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-3">Our Engineering Solution</h2>
                        <p class="text-slate-700 text-base leading-relaxed">
                            {{ $industry->solution }}
                        </p>
                    </div>
                @endif

                {{-- Potential Products --}}
                @if($industry->potential_products && is_array($industry->potential_products))
                    <div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Custom Systems We Build for {{ $industry->name }}</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($industry->potential_products as $product)
                                <div class="p-5 rounded-2xl bg-white border border-slate-200 flex items-center space-x-3 shadow-sm">
                                    <div class="w-2 h-2 rounded-full bg-blue-600"></div>
                                    <span class="text-sm font-semibold text-slate-900">{{ $product }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-4 space-y-8">
                <div class="glass-panel rounded-3xl p-6 sm:p-8 border border-blue-500/20 space-y-6">
                    <h3 class="text-xl font-bold text-slate-900">Custom {{ $industry->name }} MVP</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Need a compliance-ready application or automation system built for {{ $industry->name }}?
                    </p>

                    <div class="space-y-3 pt-2">
                        <a href="{{ route('contact') }}" class="block text-center w-full py-3.5 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold text-sm shadow-lg shadow-blue-600/30 transition-colors">
                            Schedule Technical Scoping
                        </a>
                    </div>
                </div>

                {{-- Other Industries --}}
                @if($otherIndustries->count() > 0)
                    <div class="p-6 rounded-3xl bg-white border border-slate-200 space-y-4">
                        <h3 class="text-sm font-mono uppercase tracking-widest text-slate-600 font-bold">Other Industries</h3>
                        <div class="space-y-3">
                            @foreach($otherIndustries as $other)
                                <a href="{{ route('industries.show', $other->slug) }}" class="block p-3 rounded-xl bg-white hover:bg-slate-50 text-sm font-semibold text-slate-900 hover:text-blue-600 transition-colors">
                                    {{ $other->name }} →
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
