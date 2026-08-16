@php
    $phone = \App\Models\SiteSetting::get('phone', '+91 70116 39618');
    $email = \App\Models\SiteSetting::get('email', 'contact@intoxiatechnologies.com');
@endphp

<section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative rounded-3xl overflow-hidden bg-gradient-to-r from-blue-700 via-indigo-700 to-cyan-600 text-white p-8 sm:p-16 text-center shadow-2xl shadow-blue-500/25">
        
        {{-- Background 3D glowing blur circles --}}
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-cyan-400/30 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-400/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto space-y-6">
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white text-xs font-mono uppercase tracking-widest font-bold">
                <span>Start Your Digital Transformation</span>
            </div>

            <h2 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight font-['Outfit']">
                Have a Complex Technical Project in Mind?
            </h2>

            <p class="text-blue-100 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto">
                Schedule a complimentary engineering review with our principal software architects. We analyze feasibility, timeline, and architectural roadmaps.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 rounded-2xl bg-white text-blue-900 font-extrabold text-base hover:bg-slate-100 transition-all shadow-xl hover:scale-105">
                    Request an Architecture Proposal
                </a>

                <a href="tel:{{ str_replace(' ', '', $phone) }}" class="px-8 py-4 rounded-2xl bg-blue-900/40 hover:bg-blue-900/60 text-white border border-white/30 font-bold text-base transition-all backdrop-blur-md flex items-center space-x-2">
                    <svg class="w-4 h-4 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>Direct Call: {{ $phone }}</span>
                </a>
            </div>

            <div class="pt-4 text-xs font-mono text-blue-200">
                <span>📍 Jasola, New Delhi-110025, India &bull; Serving Global Clients</span>
            </div>
        </div>

    </div>
</section>
