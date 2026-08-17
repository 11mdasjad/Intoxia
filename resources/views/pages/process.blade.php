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
                    'title' => 'Discover & Requirements Mapping',
                    'objective' => 'Uncover business objectives, operational workflows, target user personas, and technical constraints.',
                    'deliverables' => 'Product Requirements Document (PRD), User Flow Diagrams, Technical Feasibility Report.',
                    'client' => '1-2 interactive workshops with your leadership and domain stakeholders.',
                    'outcome' => 'Complete clarity on project scope and defined success metrics.'
                ],
                [
                    'num' => '02',
                    'title' => 'Strategize & Architecture Planning',
                    'objective' => 'Design the database schemas, API contracts, caching layers, and cloud infrastructure.',
                    'deliverables' => 'Entity Relationship Diagram (ERD), API specifications, System Architecture Blueprint.',
                    'client' => 'Architecture review and security sign-off.',
                    'outcome' => 'A robust technical roadmap ready for modular development.'
                ],
                [
                    'num' => '03',
                    'title' => 'Design & Interactive Prototyping',
                    'objective' => 'Craft a bespoke, high-converting visual identity and responsive Figma design system.',
                    'deliverables' => 'Full Figma UI/UX Components, Interactive Clickable Prototype, Design Tokens.',
                    'client' => 'Iterative feedback on wireframes and high-fidelity mockups.',
                    'outcome' => 'Pixel-perfect, approved design ready for frontend translation.'
                ],
                [
                    'num' => '04',
                    'title' => 'Build & Sprint Development',
                    'objective' => 'Write clean, test-driven code using modern frameworks, strict typing, and daily CI/CD builds.',
                    'deliverables' => 'Bi-weekly sprint demos, staging environment access, GitHub commit transparency.',
                    'client' => 'Bi-weekly sprint review and staging acceptance testing.',
                    'outcome' => 'Fully functional features tested incrementally.'
                ],
                [
                    'num' => '05',
                    'title' => 'Test & Security Hardening',
                    'objective' => 'Execute rigorous unit, integration, performance, load, and security vulnerability audits.',
                    'deliverables' => 'QA Test Execution Report, Performance Audit (Core Web Vitals), Penetration Test Summary.',
                    'client' => 'User Acceptance Testing (UAT) sign-off.',
                    'outcome' => 'Bug-free, secure, and lightning-fast software.'
                ],
                [
                    'num' => '06',
                    'title' => 'Launch & Production Deployment',
                    'objective' => 'Seamless zero-downtime deployment to production cloud infrastructure with SSL & monitoring.',
                    'deliverables' => 'Live production deployment, automated backup verification, server monitoring dashboards.',
                    'client' => 'Go-live celebration and transition to active production.',
                    'outcome' => 'Your digital product is live and serving real users globally.'
                ],
                [
                    'num' => '07',
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
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-200 flex items-center justify-center font-mono font-extrabold text-lg text-blue-700 shadow-sm">
                            {{ $step['num'] }}
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
