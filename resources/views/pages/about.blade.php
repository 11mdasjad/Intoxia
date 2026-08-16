<x-layouts.app 
    title="About Intoxia Technologies — IT & Digital Transformation"
    description="Learn how Intoxia Technologies helps businesses scale through custom software engineering, AI agent architectures, and enterprise cloud solutions."
>
    {{-- Header Section --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-mono uppercase tracking-widest font-semibold mb-4">
                    About Our Firm
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Engineering Digital Excellence for <span class="text-gradient-brand">Ambitious Enterprises.</span>
                </h1>
                <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                    Headquartered in New Delhi, Intoxia Technologies is an IT & Digital Transformation company built by engineers for businesses that demand reliability, speed, and cutting-edge AI capability.
                </p>
            </div>
        </div>
    </section>

    {{-- Mission & Core Pillars --}}
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6 space-y-6">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Bridging Technical Mastery With Commercial Reality
                </h2>
                <p class="text-slate-700 text-base leading-relaxed">
                    Too many technology projects fail not because of bad code, but because of poor product strategy and disconnect from business objectives. At Intoxia, our product architects analyze your operational bottlenecks, customer acquisition flows, and scalability targets before recommending an architecture.
                </p>
                <p class="text-slate-700 text-base leading-relaxed">
                    Whether we are training custom generative AI models, deploying a multi-tenant Laravel SaaS, or engineering a high-load e-commerce engine, every decision is optimized for performance, security, and long-term ownership.
                </p>
            </div>

            <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-lg bg-blue-600/20 text-blue-400 flex items-center justify-center font-bold font-mono mb-3">01</div>
                    <h3 class="text-lg font-bold text-slate-900">Full Transparency</h3>
                    <p class="text-xs text-slate-600 mt-2">Zero hidden fees, weekly code reviews on GitHub, and direct access to senior architects.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold font-mono mb-3">02</div>
                    <h3 class="text-lg font-bold text-slate-900">Production Quality</h3>
                    <p class="text-xs text-slate-600 mt-2">Strict automated test suites, CI/CD pipelines, and zero-compromise security posture.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center font-bold font-mono mb-3">03</div>
                    <h3 class="text-lg font-bold text-slate-900">Modern AI Focus</h3>
                    <p class="text-xs text-slate-600 mt-2">Integrating LLMs, RAG, and computer vision to deliver tangible competitive advantages.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-200">
                    <div class="w-10 h-10 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold font-mono mb-3">04</div>
                    <h3 class="text-lg font-bold text-slate-900">Lifelong Support</h3>
                    <p class="text-xs text-slate-600 mt-2">We provide ongoing SLA monitoring, proactive updates, and continuous optimization.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Company Stats --}}
    @if($stats->count() > 0)
    <section class="py-16 bg-[#05070a] border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($stats as $stat)
                    <x-stat-card :stat="$stat" />
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Location & Office Information --}}
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-panel rounded-3xl p-8 sm:p-12 border border-blue-500/20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-xs font-mono text-cyan-400 uppercase tracking-widest font-semibold">Delivery Center & Operations</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-2">Headquartered in New Delhi, India</h2>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                        Operating from our technology center in South Delhi (Jasola), we deliver digital products for clients across India, the United States, UAE, Singapore, and Europe.
                    </p>
                    <div class="mt-6 space-y-2 text-sm text-slate-700 font-mono">
                        <div>📍 226 Second Floor, Main Kalindi Kunj Road, Jasola, New Delhi-110025</div>
                        <div>📞 +91 70116 39618</div>
                        <div>✉️ contact@intoxiatechnologies.com</div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('contact') }}" class="px-8 py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-xl shadow-blue-600/30">
                        Schedule a Visit or Virtual Meeting
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Global CTA --}}
    <x-cta-banner />
</x-layouts.app>
