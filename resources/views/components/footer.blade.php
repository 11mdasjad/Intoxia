@php
    $phone = \App\Models\SiteSetting::get('phone', '+91 70116 39618');
    $email = \App\Models\SiteSetting::get('email', 'contact@intoxiatechnologies.com');
    $address = \App\Models\SiteSetting::get('address', '226 Second Floor, Main Kalindi Kunj Road, Jasola, New Delhi-110025, India');
@endphp

<footer class="bg-white border-t border-slate-200 text-slate-600 pt-16 pb-12 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-200">
            
            {{-- Column 1: Brand & Contact --}}
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="inline-block focus:outline-none hover:opacity-95 transition-opacity">
                    <x-intoxia-logo size="w-11 h-11" />
                </a>

                <p class="text-sm text-slate-500 leading-relaxed max-w-sm">
                    Intoxia Technologies is a modern technology and digital transformation company in New Delhi, India. Engineering enterprise software, autonomous AI systems, and scalable digital platforms.
                </p>

                <div class="space-y-2 pt-2 text-xs font-mono">
                    <div class="flex items-center space-x-2 text-slate-700">
                        <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:{{ str_replace(' ', '', $phone) }}" class="hover:text-blue-600 font-bold transition-colors">{{ $phone }}</a>
                    </div>
                    <div class="flex items-center space-x-2 text-slate-700">
                        <svg class="w-4 h-4 text-indigo-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:{{ $email }}" class="hover:text-blue-600 font-bold transition-colors">{{ $email }}</a>
                    </div>
                    <div class="flex items-start space-x-2 text-slate-500 pt-1">
                        <svg class="w-4 h-4 text-cyan-600 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-xs">{{ $address }}</span>
                    </div>
                </div>
            </div>

            {{-- Column 2: Solutions --}}
            <div class="space-y-3">
                <h4 class="text-xs font-mono font-bold text-slate-900 uppercase tracking-wider">Services</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('services.show', 'custom-software-development') }}" class="hover:text-blue-600 transition-colors">Custom Software</a></li>
                    <li><a href="{{ route('services.show', 'generative-ai-development') }}" class="hover:text-blue-600 transition-colors">Generative AI & LLMs</a></li>
                    <li><a href="{{ route('services.show', 'web-application-development') }}" class="hover:text-blue-600 transition-colors">Enterprise Web Apps</a></li>
                    <li><a href="{{ route('services.show', 'mobile-app-development') }}" class="hover:text-blue-600 transition-colors">iOS & Android Apps</a></li>
                    <li><a href="{{ route('services.show', 'cloud-devops-solutions') }}" class="hover:text-blue-600 transition-colors">Cloud & DevOps</a></li>
                    <li><a href="{{ route('services.show', 'saas-product-engineering') }}" class="hover:text-blue-600 transition-colors">SaaS Engineering</a></li>
                </ul>
            </div>

            {{-- Column 3: Company --}}
            <div class="space-y-3">
                <h4 class="text-xs font-mono font-bold text-slate-900 uppercase tracking-wider">Company</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-blue-600 transition-colors">About Our Firm</a></li>
                    <li><a href="{{ route('pricing') }}" class="hover:text-blue-600 transition-colors">Service Pricing</a></li>
                    <li><a href="{{ route('work.index') }}" class="hover:text-blue-600 transition-colors">Case Studies</a></li>
                    <li><a href="{{ route('process') }}" class="hover:text-blue-600 transition-colors">Engineering Process</a></li>
                    <li><a href="{{ route('technologies') }}" class="hover:text-blue-600 transition-colors">Tech Ecosystem</a></li>
                    <li><a href="{{ route('why-intoxia') }}" class="hover:text-blue-600 transition-colors">Why Intoxia</a></li>
                    <li><a href="{{ route('careers') }}" class="hover:text-blue-600 transition-colors">Careers</a></li>
                </ul>
            </div>

            {{-- Column 4: Resources & Legal --}}
            <div class="space-y-3">
                <h4 class="text-xs font-mono font-bold text-slate-900 uppercase tracking-wider">Resources</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('insights.index') }}" class="hover:text-blue-600 transition-colors">Insights & Articles</a></li>
                    <li><a href="{{ route('faq') }}" class="hover:text-blue-600 transition-colors">Frequently Asked Questions</a></li>
                    <li><a href="{{ route('privacy-policy') }}" class="hover:text-blue-600 transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ route('terms-and-conditions') }}" class="hover:text-blue-600 transition-colors">Terms of Service</a></li>
                    <li><a href="{{ route('cookie-policy') }}" class="hover:text-blue-600 transition-colors">Cookie Policy</a></li>
                    <li><a href="{{ url('/sitemap.xml') }}" class="hover:text-blue-600 transition-colors">XML Sitemap</a></li>
                </ul>
            </div>

        </div>

        {{-- Bottom Copyright Bar --}}
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-slate-500">
            <div>
                &copy; {{ date('Y') }} Intoxia Technologies Private Limited. All rights reserved.
            </div>
            <div class="flex items-center space-x-4">
                <span class="inline-flex items-center space-x-1 text-emerald-600 font-bold">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span>All Systems Operational</span>
                </span>
                <span>&bull;</span>
                <a href="{{ route('contact') }}" class="text-blue-600 font-bold hover:underline">Start a Project</a>
            </div>
        </div>

    </div>
</footer>
