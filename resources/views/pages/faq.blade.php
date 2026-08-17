<x-layouts.app 
    title="Frequently Asked Questions (FAQ) — Intoxia Technologies"
    description="Find answers to common questions regarding Intoxia's software engineering engagements, pricing models, NDA policies, and delivery timelines."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono uppercase tracking-widest font-bold mb-4 shadow-sm">
                Knowledge Base
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Frequently Asked <span class="text-gradient-brand">Questions</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                Everything you need to know about partnering with Intoxia Technologies.
            </p>
        </div>
    </section>

    {{-- FAQs by Category --}}
    <section class="py-24 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        @foreach($faqs as $category => $items)
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-slate-900 border-b border-slate-200 pb-4 font-mono">
                    {{ $category }} Questions
                </h2>

                <div class="space-y-4">
                    @foreach($items as $faq)
                        <div 
                            x-data="{ open: false }" 
                            class="glass-panel rounded-2xl border border-slate-200 overflow-hidden"
                        >
                            <button 
                                @click="open = !open" 
                                class="w-full p-6 text-left flex items-center justify-between focus:outline-none"
                            >
                                <span class="text-base font-bold text-slate-900 pr-4">{{ $faq->question }}</span>
                                <span class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-slate-600 shrink-0 font-mono text-sm">
                                    <span x-show="!open">+</span>
                                    <span x-show="open" x-cloak>−</span>
                                </span>
                            </button>

                            <div 
                                x-show="open" 
                                x-cloak 
                                x-transition
                                class="px-6 pb-6 text-sm text-slate-700 leading-relaxed border-t border-slate-200 pt-4"
                            >
                                {{ $faq->answer }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
