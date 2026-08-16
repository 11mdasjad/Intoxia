<x-layouts.app 
    title="Service Pricing & Transparent Engagement Models — Intoxia Technologies"
    description="Explore transparent pricing, fixed-price MVP sprints, and dedicated engineering squad rates for custom software, AI systems, and mobile applications."
>
    <div x-data="{ currency: 'INR' }">

        {{-- 1. PAGE HEADER --}}
        <section class="pt-32 pb-16 sm:pt-40 sm:pb-20 border-b border-slate-200/80 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono uppercase tracking-widest font-bold mb-4 shadow-sm">
                    <span>Transparent Engineering Pricing</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-tight font-['Outfit']">
                    Predictable Investments for <br><span class="text-gradient-vibrant">Enterprise-Grade Results.</span>
                </h1>
                <p class="mt-6 text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                    No hidden line items. No surprise change orders. We offer transparent pricing structures tailored for ambitious startups, scaling SaaS companies, and established enterprises.
                </p>

                {{-- Currency Switcher Toggle --}}
                <div class="mt-10 inline-flex items-center p-1.5 bg-white rounded-2xl border border-slate-200/90 shadow-md">
                    <button 
                        @click="currency = 'INR'"
                        :class="currency === 'INR' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/30' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2 rounded-xl text-xs font-mono font-bold transition-all"
                    >
                        🇮🇳 INR (₹ Lakhs)
                    </button>
                    <button 
                        @click="currency = 'USD'"
                        :class="currency === 'USD' ? 'bg-blue-600 text-white shadow-md shadow-blue-600/30' : 'text-slate-600 hover:text-slate-900'"
                        class="px-5 py-2 rounded-xl text-xs font-mono font-bold transition-all"
                    >
                        🌍 USD ($ USD)
                    </button>
                </div>
            </div>
        </section>

        {{-- 2. MAIN ENGAGEMENT TIERS (3 CARDS) --}}
        <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                
                {{-- Tier 1: MVP & Product Launch --}}
                <div class="light-glass-card rounded-3xl p-8 sm:p-10 flex flex-col justify-between border border-slate-200 shadow-sm hover:shadow-xl transition-all">
                    <div>
                        <div class="text-xs font-mono font-bold uppercase tracking-wider text-slate-500 mb-2">Startup & Fast-Track</div>
                        <h3 class="text-2xl font-black text-slate-900 font-['Outfit']">MVP Launchpad</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Ideal for early-stage startups and funded ventures needing a market-ready product in 4 to 6 weeks.
                        </p>

                        <div class="my-8 pb-6 border-b border-slate-100">
                            <div class="flex items-baseline space-x-1">
                                <span class="text-4xl sm:text-5xl font-black text-slate-900 font-['Outfit']" x-show="currency === 'INR'">₹2.5L – 5L</span>
                                <span class="text-4xl sm:text-5xl font-black text-slate-900 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$3,500 – 6,500</span>
                            </div>
                            <span class="text-xs font-mono text-slate-500 mt-1 block">Fixed Price &bull; 4-6 Weeks Delivery</span>
                        </div>

                        <div class="space-y-3 text-xs text-slate-700">
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Full UI/UX interactive Figma prototype</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Core product feature engineering</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Authentication, Database & Payment Gateway</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Cloud server deployment setup</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>30 Days post-launch technical warranty</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6">
                        <a href="{{ route('contact') }}?service=MVP+Launchpad" class="block text-center w-full py-4 rounded-2xl bg-white hover:bg-slate-50 text-slate-900 border border-slate-300 font-bold text-xs shadow-sm hover:shadow-md transition-all">
                            Start MVP Project →
                        </a>
                    </div>
                </div>

                {{-- Tier 2: Enterprise Digital Platform & AI (MOST POPULAR) --}}
                <div class="relative light-glass-card rounded-3xl p-8 sm:p-10 flex flex-col justify-between border-2 border-blue-500 shadow-2xl shadow-blue-500/15 bg-gradient-to-b from-white via-blue-50/20 to-white transform lg:-translate-y-3">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-[11px] font-mono uppercase tracking-widest font-extrabold px-4 py-1.5 rounded-full shadow-md">
                        ★ Most Selected Enterprise Tier
                    </div>

                    <div>
                        <div class="text-xs font-mono font-bold uppercase tracking-wider text-blue-600 mb-2 mt-2">Full Custom Architecture</div>
                        <h3 class="text-2xl font-black text-slate-900 font-['Outfit']">Enterprise Platform & AI</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            Comprehensive custom web, mobile, SaaS, or autonomous AI systems with enterprise security, RAG pipelines, and multi-tenant scaling.
                        </p>

                        <div class="my-8 pb-6 border-b border-slate-200">
                            <div class="flex items-baseline space-x-1">
                                <span class="text-4xl sm:text-5xl font-black text-slate-900 font-['Outfit']" x-show="currency === 'INR'">₹6L – 18L</span>
                                <span class="text-4xl sm:text-5xl font-black text-slate-900 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$8,000 – 24,000</span>
                            </div>
                            <span class="text-xs font-mono text-slate-500 mt-1 block">Milestone Phased &bull; 8-16 Weeks Delivery</span>
                        </div>

                        <div class="space-y-3 text-xs text-slate-700">
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span><strong>Custom Architecture</strong> (Laravel 13, Python AI, Next.js)</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span><strong>AI & Vector Engine:</strong> RAG pipelines & Autonomous Agents</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span><strong>Mobile App:</strong> Cross-platform iOS + Android build</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span><strong>DevOps:</strong> AWS/GCP Docker, CI/CD, Redis caching</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span><strong>60 Days</strong> post-launch SLA warranty & support</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6">
                        <a href="{{ route('contact') }}?service=Enterprise+Platform+%26+AI" class="block text-center w-full py-4 rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-extrabold text-sm shadow-xl shadow-blue-600/30 transition-all hover:scale-105">
                            Request Architecture Scope →
                        </a>
                    </div>
                </div>

                {{-- Tier 3: Dedicated Engineering Squad --}}
                <div class="light-glass-card rounded-3xl p-8 sm:p-10 flex flex-col justify-between border border-slate-200 shadow-sm hover:shadow-xl transition-all">
                    <div>
                        <div class="text-xs font-mono font-bold uppercase tracking-wider text-slate-500 mb-2">Ongoing Retainer & Velocity</div>
                        <h3 class="text-2xl font-black text-slate-900 font-['Outfit']">Dedicated Squad</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                            A dedicated team of senior full-stack architects, frontend engineers, and DevOps specialists integrated into your roadmap.
                        </p>

                        <div class="my-8 pb-6 border-b border-slate-100">
                            <div class="flex items-baseline space-x-1">
                                <span class="text-4xl sm:text-5xl font-black text-slate-900 font-['Outfit']" x-show="currency === 'INR'">₹1.5L – 4L</span>
                                <span class="text-4xl sm:text-5xl font-black text-slate-900 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$2,200 – 5,500</span>
                            </div>
                            <span class="text-xs font-mono text-slate-500 mt-1 block">Per Engineer / Month &bull; Flexible Contract</span>
                        </div>

                        <div class="space-y-3 text-xs text-slate-700">
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>160 Hours dedicated monthly velocity</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Direct Slack/Teams sprint alignment</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Daily standups & bi-weekly release cycles</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Instant talent scaling (scale up or down)</span>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>Principal architect oversight included</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6">
                        <a href="{{ route('contact') }}?service=Dedicated+Engineering+Squad" class="block text-center w-full py-4 rounded-2xl bg-white hover:bg-slate-50 text-slate-900 border border-slate-300 font-bold text-xs shadow-sm hover:shadow-md transition-all">
                            Hire Dedicated Squad →
                        </a>
                    </div>
                </div>

            </div>
        </section>

        {{-- 3. SERVICE-BY-SERVICE PRICING BREAKDOWN MATRIX --}}
        <section class="py-20 bg-white/70 border-t border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <x-section-heading 
                    badge="Detailed Matrix"
                    title="Service-by-Service Investment Ranges"
                    subtitle="Explore standard ballpark ranges across our core engineering competencies. Final cost is estimated via formal Technical Scope Specification."
                />

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- Service 1: Custom Software & SaaS --}}
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-slate-200">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-600 font-bold">
                            💻
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Custom Software & SaaS</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Multi-tenant platforms, complex business logic, billing portals, and API hubs.</p>
                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-xs font-mono text-slate-500 block">Typical Range</span>
                            <span class="text-xl font-black text-blue-600 font-['Outfit']" x-show="currency === 'INR'">₹3.5 Lakh – ₹15 Lakh+</span>
                            <span class="text-xl font-black text-blue-600 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$5,000 – $20,000+</span>
                        </div>
                    </div>

                    {{-- Service 2: Generative AI & Autonomous Agents --}}
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-slate-200">
                        <div class="w-12 h-12 rounded-2xl bg-purple-50 border border-purple-200 flex items-center justify-center text-purple-600 font-bold">
                            🤖
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">AI & Agent Systems</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Vector RAG embeddings, custom agent pipelines, LLM finetuning, and guardrails.</p>
                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-xs font-mono text-slate-500 block">Typical Range</span>
                            <span class="text-xl font-black text-purple-600 font-['Outfit']" x-show="currency === 'INR'">₹4 Lakh – ₹16 Lakh+</span>
                            <span class="text-xl font-black text-purple-600 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$5,500 – $22,000+</span>
                        </div>
                    </div>

                    {{-- Service 3: Enterprise Web Applications --}}
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-slate-200">
                        <div class="w-12 h-12 rounded-2xl bg-cyan-50 border border-cyan-200 flex items-center justify-center text-cyan-600 font-bold">
                            ⚡
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Enterprise Web Apps</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">High-performance Laravel 13, Next.js, and modern single-page corporate platforms.</p>
                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-xs font-mono text-slate-500 block">Typical Range</span>
                            <span class="text-xl font-black text-cyan-600 font-['Outfit']" x-show="currency === 'INR'">₹2.5 Lakh – ₹8 Lakh+</span>
                            <span class="text-xl font-black text-cyan-600 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$3,500 – $10,000+</span>
                        </div>
                    </div>

                    {{-- Service 4: Mobile App Development --}}
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-slate-200">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-center justify-center text-emerald-600 font-bold">
                            📱
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Mobile Applications</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Cross-platform Flutter & React Native or Native iOS (Swift) & Android (Kotlin).</p>
                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-xs font-mono text-slate-500 block">Typical Range</span>
                            <span class="text-xl font-black text-emerald-600 font-['Outfit']" x-show="currency === 'INR'">₹3.5 Lakh – ₹12 Lakh+</span>
                            <span class="text-xl font-black text-emerald-600 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$4,500 – $16,000+</span>
                        </div>
                    </div>

                    {{-- Service 5: Cloud DevOps & Infrastructure --}}
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-slate-200">
                        <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-200 flex items-center justify-center text-amber-600 font-bold">
                            ☁️
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">Cloud & DevOps Setup</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">AWS/GCP architectures, Docker containerization, CI/CD pipelines, and security hardening.</p>
                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-xs font-mono text-slate-500 block">Typical Range</span>
                            <span class="text-xl font-black text-amber-600 font-['Outfit']" x-show="currency === 'INR'">₹1.5 Lakh – ₹5 Lakh+</span>
                            <span class="text-xl font-black text-amber-600 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$2,000 – $7,000+</span>
                        </div>
                    </div>

                    {{-- Service 6: UI/UX & Product Design System --}}
                    <div class="light-glass-card rounded-3xl p-6 sm:p-8 space-y-4 border border-slate-200">
                        <div class="w-12 h-12 rounded-2xl bg-pink-50 border border-pink-200 flex items-center justify-center text-pink-600 font-bold">
                            🎨
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 font-['Outfit']">UI/UX & Design Systems</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Complete design tokens, user journeys, interactive wireframes, and design specs.</p>
                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-xs font-mono text-slate-500 block">Typical Range</span>
                            <span class="text-xl font-black text-pink-600 font-['Outfit']" x-show="currency === 'INR'">₹1.5 Lakh – ₹4.5 Lakh</span>
                            <span class="text-xl font-black text-pink-600 font-['Outfit']" x-show="currency === 'USD'" x-cloak>$2,000 – $6,000</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        {{-- 4. INTERACTIVE PROJECT ESTIMATOR (ALPINE.JS) --}}
        <section 
            class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
            x-data="{
                serviceType: 'web',
                scopeComplexity: 'medium',
                timelineType: 'standard',
                getEstimateINR() {
                    let base = 250000;
                    if (this.serviceType === 'ai') base = 400000;
                    if (this.serviceType === 'mobile') base = 350000;
                    if (this.serviceType === 'saas') base = 450000;

                    let mult = 1.0;
                    if (this.scopeComplexity === 'simple') mult = 0.8;
                    if (this.scopeComplexity === 'enterprise') mult = 1.8;

                    let speed = 1.0;
                    if (this.timelineType === 'rush') speed = 1.25;

                    let low = Math.round((base * mult * speed) / 10000) / 10;
                    let high = Math.round((base * mult * speed * 1.5) / 10000) / 10;
                    return '₹' + low + 'L – ₹' + high + 'L';
                },
                getEstimateUSD() {
                    let base = 3500;
                    if (this.serviceType === 'ai') base = 5500;
                    if (this.serviceType === 'mobile') base = 4500;
                    if (this.serviceType === 'saas') base = 6000;

                    let mult = 1.0;
                    if (this.scopeComplexity === 'simple') mult = 0.8;
                    if (this.scopeComplexity === 'enterprise') mult = 1.8;

                    let speed = 1.0;
                    if (this.timelineType === 'rush') speed = 1.25;

                    let low = Math.round(base * mult * speed);
                    let high = Math.round(base * mult * speed * 1.5);
                    return '$' + low.toLocaleString() + ' – $' + high.toLocaleString();
                }
            }"
        >
            <div class="light-glass-panel rounded-3xl p-8 sm:p-14 border border-slate-200 shadow-2xl">
                <div class="max-w-3xl mb-10">
                    <span class="text-xs font-mono font-bold uppercase tracking-wider text-blue-600">Instant Estimate Calculator</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 font-['Outfit'] mt-1">Configure Your Estimated Scope</h2>
                    <p class="text-sm text-slate-600 mt-2">Select your architectural requirements below to get a ballpark budget and immediate feasibility overview.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                    
                    {{-- Controls Column --}}
                    <div class="lg:col-span-7 space-y-6">
                        
                        {{-- 1. Project Type --}}
                        <div>
                            <label class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">1. Core Service Architecture</label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                <button 
                                    type="button" 
                                    @click="serviceType = 'web'" 
                                    :class="serviceType === 'web' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    Web Platform
                                </button>
                                <button 
                                    type="button" 
                                    @click="serviceType = 'ai'" 
                                    :class="serviceType === 'ai' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    AI & Agents
                                </button>
                                <button 
                                    type="button" 
                                    @click="serviceType = 'mobile'" 
                                    :class="serviceType === 'mobile' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    Mobile App
                                </button>
                                <button 
                                    type="button" 
                                    @click="serviceType = 'saas'" 
                                    :class="serviceType === 'saas' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    SaaS Suite
                                </button>
                            </div>
                        </div>

                        {{-- 2. Complexity --}}
                        <div>
                            <label class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">2. Scope & Technical Complexity</label>
                            <div class="grid grid-cols-3 gap-3">
                                <button 
                                    type="button" 
                                    @click="scopeComplexity = 'simple'" 
                                    :class="scopeComplexity === 'simple' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    Standard MVP
                                </button>
                                <button 
                                    type="button" 
                                    @click="scopeComplexity = 'medium'" 
                                    :class="scopeComplexity === 'medium' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    Advanced Custom
                                </button>
                                <button 
                                    type="button" 
                                    @click="scopeComplexity = 'enterprise'" 
                                    :class="scopeComplexity === 'enterprise' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    High-Scale Enterprise
                                </button>
                            </div>
                        </div>

                        {{-- 3. Timeline --}}
                        <div>
                            <label class="block text-xs font-mono font-bold text-slate-700 uppercase tracking-wider mb-2">3. Speed & Priority SLA</label>
                            <div class="grid grid-cols-2 gap-3">
                                <button 
                                    type="button" 
                                    @click="timelineType = 'standard'" 
                                    :class="timelineType === 'standard' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    Standard (6 – 12 Weeks)
                                </button>
                                <button 
                                    type="button" 
                                    @click="timelineType = 'rush'" 
                                    :class="timelineType === 'rush' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-200'" 
                                    class="p-3.5 rounded-xl border text-xs font-bold text-center transition-all"
                                >
                                    Accelerated Sprint (3 – 5 Weeks)
                                </button>
                            </div>
                        </div>

                    </div>

                    {{-- Dynamic Output Box --}}
                    <div class="lg:col-span-5 bg-gradient-to-br from-slate-900 to-blue-950 text-white rounded-3xl p-8 shadow-2xl relative overflow-hidden">
                        <div class="text-xs font-mono text-cyan-300 uppercase tracking-widest font-bold">Estimated Investment</div>
                        
                        <div class="mt-4 pb-6 border-b border-white/10">
                            <div class="text-3xl sm:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-white to-blue-200 font-['Outfit']" x-show="currency === 'INR'" x-text="getEstimateINR()">
                                ₹3.5L – ₹5.2L
                            </div>
                            <div class="text-3xl sm:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-white to-blue-200 font-['Outfit']" x-show="currency === 'USD'" x-cloak x-text="getEstimateUSD()">
                                $5,000 – $7,500
                            </div>
                            <span class="text-[11px] font-mono text-slate-400 mt-1 block">Subject to exact feature specification & architectural review</span>
                        </div>

                        <div class="space-y-2.5 my-6 text-xs text-slate-300">
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-400 font-bold">✓</span>
                                <span>Includes 100% IP & Source Code Transfer</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-400 font-bold">✓</span>
                                <span>Includes 60-Day Post-Launch SLA Warranty</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-emerald-400 font-bold">✓</span>
                                <span>Standard NDA & Security Compliance</span>
                            </div>
                        </div>

                        <a 
                            :href="'{{ route('contact') }}?service=' + encodeURIComponent(serviceType.toUpperCase() + ' - ' + scopeComplexity.toUpperCase())"
                            class="block text-center w-full py-4 rounded-2xl bg-gradient-to-r from-cyan-400 to-blue-500 hover:from-cyan-300 hover:to-blue-400 text-slate-950 font-black text-sm shadow-xl transition-all hover:scale-105"
                        >
                            Lock In Architecture Estimate →
                        </a>
                    </div>

                </div>
            </div>
        </section>

        {{-- 5. GUARANTEES & STANDARDS --}}
        <section class="py-16 bg-white/80 border-t border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="text-2xl mb-2">📜</div>
                        <h4 class="text-base font-bold text-slate-900 font-['Outfit']">100% Code Ownership</h4>
                        <p class="text-xs text-slate-500 mt-1">All IP, git repositories, databases, and assets belong entirely to your company.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="text-2xl mb-2">🛡️</div>
                        <h4 class="text-base font-bold text-slate-900 font-['Outfit']">60-Day Warranty</h4>
                        <p class="text-xs text-slate-500 mt-1">Comprehensive post-launch bug fixes and performance SLA at zero extra charge.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="text-2xl mb-2">🔒</div>
                        <h4 class="text-base font-bold text-slate-900 font-['Outfit']">Non-Disclosure (NDA)</h4>
                        <p class="text-xs text-slate-500 mt-1">Enterprise confidentiality executed before receiving your proprietary product requirements.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="text-2xl mb-2">⚡</div>
                        <h4 class="text-base font-bold text-slate-900 font-['Outfit']">Milestone-Based Billing</h4>
                        <p class="text-xs text-slate-500 mt-1">Payments linked to tangible deliverables and staging environment sign-offs.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 6. PRICING FAQ --}}
        @if(isset($faqs) && $faqs->count() > 0)
        <section class="py-20 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                badge="Clear Answers"
                title="Frequently Asked Questions"
                subtitle="Common questions about contract terms, billing milestones, and scope management."
            />

            <div class="space-y-4">
                @foreach($faqs as $faq)
                    <div x-data="{ open: false }" class="light-glass-card rounded-2xl p-6 border border-slate-200 shadow-sm">
                        <button 
                            @click="open = !open" 
                            class="flex items-center justify-between w-full text-left font-bold text-slate-900 hover:text-blue-600 transition-colors font-['Outfit'] text-base"
                        >
                            <span>{{ $faq->question }}</span>
                            <svg :class="open ? 'rotate-180 text-blue-600' : 'text-slate-400'" class="w-5 h-5 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-collapse class="mt-4 text-sm text-slate-600 leading-relaxed pt-2 border-t border-slate-100">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        @endif

        {{-- 7. GLOBAL CTA BANNER --}}
        <x-cta-banner />

    </div>
</x-layouts.app>
