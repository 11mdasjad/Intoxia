<x-layouts.app 
    title="Our 7-Step Development Process — Intoxia Technologies"
    description="Learn about Intoxia's disciplined 7-step software engineering process: Discover, Strategize, Design, Build, Test, Launch, and Scale."
>
    {{-- Header --}}
    <section class="pt-32 pb-16 sm:pt-40 sm:pb-24 border-b border-slate-200 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-mono uppercase tracking-widest font-bold mb-4 shadow-sm">
                Disciplined Execution
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Our 7-Step <span class="text-gradient-brand">Engineering Process</span>
            </h1>
            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Predictable timelines, zero surprise scope creep, and enterprise-grade software delivery through an agile, sprint-based methodology.
            </p>
        </div>
    </section>

    {{-- 7 Steps Detailed Breakdown --}}
    <section class="py-24 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        @php
            $steps = [
                [
                    'num' => '01',
                    'icon' => 'search',
                    'color' => 'blue',
                    'title' => 'Discover & Requirements Mapping',
                    'objective' => 'Uncover business objectives, operational workflows, target user personas, and technical constraints.',
                    'deliverables' => 'Product Requirements Document (PRD), User Flow Diagrams, Technical Feasibility Report.',
                    'client' => '1-2 interactive workshops with your leadership and domain stakeholders.',
                    'outcome' => 'Complete clarity on project scope and defined success metrics.'
                ],
                [
                    'num' => '02',
                    'icon' => 'architecture',
                    'color' => 'indigo',
                    'title' => 'Strategize & Architecture Planning',
                    'objective' => 'Design the database schemas, API contracts, caching layers, and cloud infrastructure.',
                    'deliverables' => 'Entity Relationship Diagram (ERD), API specifications, System Architecture Blueprint.',
                    'client' => 'Architecture review and security sign-off.',
                    'outcome' => 'A robust technical roadmap ready for modular development.'
                ],
                [
                    'num' => '03',
                    'icon' => 'design',
                    'color' => 'purple',
                    'title' => 'Design & Interactive Prototyping',
                    'objective' => 'Craft a bespoke, high-converting visual identity and responsive Figma design system.',
                    'deliverables' => 'Full Figma UI/UX Components, Interactive Clickable Prototype, Design Tokens.',
                    'client' => 'Iterative feedback on wireframes and high-fidelity mockups.',
                    'outcome' => 'Pixel-perfect, approved design ready for frontend translation.'
                ],
                [
                    'num' => '04',
                    'icon' => 'code',
                    'color' => 'cyan',
                    'title' => 'Build & Sprint Development',
                    'objective' => 'Write clean, test-driven code using modern frameworks, strict typing, and daily CI/CD builds.',
                    'deliverables' => 'Bi-weekly sprint demos, staging environment access, GitHub commit transparency.',
                    'client' => 'Bi-weekly sprint review and staging acceptance testing.',
                    'outcome' => 'Fully functional features tested incrementally.'
                ],
                [
                    'num' => '05',
                    'icon' => 'shield',
                    'color' => 'amber',
                    'title' => 'Test & Security Hardening',
                    'objective' => 'Execute rigorous unit, integration, performance, load, and security vulnerability audits.',
                    'deliverables' => 'QA Test Execution Report, Performance Audit (Core Web Vitals), Penetration Test Summary.',
                    'client' => 'User Acceptance Testing (UAT) sign-off.',
                    'outcome' => 'Bug-free, secure, and lightning-fast software.'
                ],
                [
                    'num' => '06',
                    'icon' => 'rocket',
                    'color' => 'rose',
                    'title' => 'Launch & Production Deployment',
                    'objective' => 'Seamless zero-downtime deployment to production cloud infrastructure with SSL & monitoring.',
                    'deliverables' => 'Live production deployment, automated backup verification, server monitoring dashboards.',
                    'client' => 'Go-live celebration and transition to active production.',
                    'outcome' => 'Your digital product is live and serving real users globally.'
                ],
                [
                    'num' => '07',
                    'icon' => 'scale',
                    'color' => 'emerald',
                    'title' => 'Scale & Continuous SLA Support',
                    'objective' => 'Ongoing proactive monitoring, AI capability additions, performance tuning, and SLA support.',
                    'deliverables' => 'Monthly uptime reports, security patching, new feature sprint squad.',
                    'client' => 'Monthly roadmap alignment and feature prioritization.',
                    'outcome' => 'A technology partner committed to compounding your growth.'
                ],
            ];
        @endphp

        @foreach($steps as $step)
            <div class="glass-panel rounded-3xl p-8 sm:p-10 border border-slate-200 relative overflow-hidden shadow-sm">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200 pb-6 mb-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center font-mono font-extrabold text-lg text-blue-700 shadow-sm shrink-0">
                            {{ $step['num'] }}
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 text-slate-700 flex items-center justify-center shrink-0">
                            @if($step['icon'] === 'search')
                                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            @elseif($step['icon'] === 'architecture')
                                <svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            @elseif($step['icon'] === 'design')
                                <svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 015-5h4a2 2 0 012 2v2a4 4 0 01-4 4h-3zm0 0a4 4 0 004-4v-2m7-9a4 4 0 11-8 0 4 4 0 018 0zm0 0v2a2 2 0 01-2 2h-2"/></svg>
                            @elseif($step['icon'] === 'code')
                                <svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            @elseif($step['icon'] === 'shield')
                                <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            @elseif($step['icon'] === 'rocket')
                                <svg class="w-5 h-5 text-rose-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
                            @elseif($step['icon'] === 'scale')
                                <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            @endif
                        </div>
                        <h2 class="text-2xl font-extrabold text-slate-900">{{ $step['title'] }}</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                    <div>
                        <strong class="text-xs font-mono uppercase tracking-wider text-blue-700 block mb-1">Objective:</strong>
                        <p class="text-slate-700">{{ $step['objective'] }}</p>
                    </div>
                    <div>
                        <strong class="text-xs font-mono uppercase tracking-wider text-blue-700 block mb-1">Key Deliverables:</strong>
                        <p class="text-slate-700">{{ $step['deliverables'] }}</p>
                    </div>
                    <div>
                        <strong class="text-xs font-mono uppercase tracking-wider text-blue-700 block mb-1">Client Involvement:</strong>
                        <p class="text-slate-700">{{ $step['client'] }}</p>
                    </div>
                    <div>
                        <strong class="text-xs font-mono uppercase tracking-wider text-emerald-700 block mb-1">Expected Outcome:</strong>
                        <p class="text-slate-700">{{ $step['outcome'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    {{-- CTA --}}
    <x-cta-banner />
</x-layouts.app>
