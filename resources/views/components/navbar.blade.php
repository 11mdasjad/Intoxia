@php
    $phone = \App\Models\SiteSetting::get('phone', '+91 70116 39618');
    $currentRoute = request()->route() ? request()->route()->getName() : '';
@endphp

<header 
    :class="scrolled ? 'bg-white/90 backdrop-blur-xl border-b border-slate-200/90 shadow-lg shadow-blue-500/5 py-3' : 'bg-transparent border-b border-transparent py-4 sm:py-5'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-out"
>
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-3 xl:gap-6">
            
            {{-- Official Brand Logo --}}
            <a href="{{ route('home') }}" class="group focus:outline-none hover:opacity-95 transition-opacity shrink-0">
                <x-intoxia-logo size="w-9 h-9 sm:w-10 sm:h-10" />
            </a>

            {{-- Desktop Navigation (Single-line, non-wrapping) --}}
            <nav class="hidden lg:flex items-center space-x-0.5 xl:space-x-1 bg-white/80 backdrop-blur-md px-3 xl:px-4 py-1.5 rounded-2xl border border-slate-200/80 shadow-sm shrink-0">
                <a href="{{ route('about') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('about') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    About
                </a>
                
                <a href="{{ route('services.index') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('services.*') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Services
                </a>

                <a href="{{ route('industries.index') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('industries.*') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Industries
                </a>

                <a href="{{ route('work.index') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('work.*') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Work
                </a>

                <a href="{{ route('technologies') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('technologies') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Tech Stack
                </a>

                <a href="{{ route('process') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('process') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Process
                </a>

                <a href="{{ route('pricing') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('pricing') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Pricing
                </a>

                <a href="{{ route('insights.index') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('insights.*') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Insights
                </a>

                <a href="{{ route('contact') }}" class="px-2.5 xl:px-3 py-1.5 text-xs xl:text-sm font-semibold rounded-xl whitespace-nowrap transition-all {{ request()->routeIs('contact') ? 'text-blue-600 bg-blue-50' : 'text-slate-700 hover:text-blue-600 hover:bg-slate-50' }}">
                    Contact
                </a>
            </nav>

            {{-- Header Actions (Single-line, non-wrapping) --}}
            <div class="hidden lg:flex items-center space-x-2.5 xl:space-x-3 shrink-0">
                <a href="tel:{{ str_replace(' ', '', $phone) }}" class="text-xs font-mono font-bold text-slate-700 hover:text-blue-600 transition-colors flex items-center gap-1.5 bg-white/90 border border-slate-200 px-3 py-2.5 rounded-xl shadow-sm whitespace-nowrap">
                    <svg class="w-3.5 h-3.5 text-blue-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>{{ $phone }}</span>
                </a>

                <a href="{{ route('contact') }}" class="relative group inline-flex items-center justify-center p-0.5 text-xs font-bold overflow-hidden rounded-xl shadow-md shadow-blue-600/20 hover:shadow-blue-600/35 transition-all shrink-0 whitespace-nowrap">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500"></span>
                    <span class="relative px-4 xl:px-5 py-2.5 bg-blue-600 text-white rounded-[10px] group-hover:bg-opacity-0 transition-all font-bold flex items-center space-x-1.5">
                        <span>Start a Project</span>
                        <svg class="w-3.5 h-3.5 text-cyan-200 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </span>
                </a>
            </div>

            {{-- Mobile Menu Hamburger --}}
            <div class="flex lg:hidden items-center space-x-2.5">
                <a href="{{ route('contact') }}" class="text-xs bg-blue-600 text-white px-3 py-2 rounded-xl font-bold shadow-md shadow-blue-600/30 whitespace-nowrap">
                    Enquire
                </a>

                <button 
                    @click="toggleMobile()" 
                    type="button" 
                    class="p-2 text-slate-700 hover:text-slate-900 rounded-xl bg-white border border-slate-200 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    aria-label="Toggle Navigation"
                >
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    {{-- Mobile Navigation Drawer --}}
    <div 
        x-show="mobileOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden bg-white/98 border-b border-slate-200 px-4 pt-4 pb-8 space-y-2 shadow-2xl backdrop-blur-2xl"
    >
        <div class="flex flex-col space-y-1">
            <a @click="toggleMobile()" href="{{ route('about') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                About Intoxia
            </a>
            <a @click="toggleMobile()" href="{{ route('services.index') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('services.*') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Services & AI Solutions
            </a>
            <a @click="toggleMobile()" href="{{ route('industries.index') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('industries.*') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Industries We Serve
            </a>
            <a @click="toggleMobile()" href="{{ route('work.index') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('work.*') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Portfolio & Case Studies
            </a>
            <a @click="toggleMobile()" href="{{ route('technologies') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('technologies') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Technology Ecosystem
            </a>
            <a @click="toggleMobile()" href="{{ route('process') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('process') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Our Process
            </a>
            <a @click="toggleMobile()" href="{{ route('pricing') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('pricing') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Service Pricing
            </a>
            <a @click="toggleMobile()" href="{{ route('why-intoxia') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('why-intoxia') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Why Choose Intoxia
            </a>
            <a @click="toggleMobile()" href="{{ route('insights.index') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('insights.*') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Insights & Blog
            </a>
            <a @click="toggleMobile()" href="{{ route('contact') }}" class="px-4 py-3 rounded-xl text-base font-semibold {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : 'text-slate-800 hover:bg-slate-50' }}">
                Contact Us
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-slate-200 space-y-3">
            <a href="tel:{{ str_replace(' ', '', $phone) }}" class="flex items-center space-x-2 text-sm text-slate-700 px-4 font-mono font-bold">
                <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>{{ $phone }}</span>
            </a>
            <a @click="toggleMobile()" href="{{ route('contact') }}" class="block text-center w-full py-3.5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-blue-600/30">
                Start a Project
            </a>
        </div>
    </div>
</header>
