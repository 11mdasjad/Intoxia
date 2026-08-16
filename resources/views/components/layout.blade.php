<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $defaultTitle = 'Intoxia Technologies — IT & Digital Transformation Company';
        $defaultDesc = 'Intoxia Technologies builds intelligent digital products, AI-powered solutions, scalable custom software, and high-performing web & mobile experiences for ambitious businesses.';
        $pageTitle = isset($title) ? $title . ' | Intoxia Technologies' : \App\Models\SiteSetting::get('seo_title', $defaultTitle);
        $pageDesc = $description ?? \App\Models\SiteSetting::get('seo_description', $defaultDesc);
        $pageOgImage = $ogImage ?? asset('images/hero-3d-visual.jpg');
        $canonicalUrl = $canonical ?? url()->current();
        $gaId = \App\Models\SiteSetting::get('google_analytics_id');
    @endphp

    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDesc }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDesc }}">
    <meta property="og:image" content="{{ $pageOgImage }}">
    <meta property="og:site_name" content="Intoxia Technologies">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDesc }}">
    <meta name="twitter:image" content="{{ $pageOgImage }}">

    {{-- Google Fonts: Outfit & Plus Jakarta Sans & JetBrains Mono --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Organization",
      "name": "Intoxia Technologies",
      "url": "{{ config('app.url', 'https://www.intoxiatechnologies.com') }}",
      "logo": "{{ asset('images/hero-3d-visual.jpg') }}",
      "description": "Enterprise IT, Custom Software Development, AI Solutions & Digital Transformation Company.",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "226 Second Floor, Main Kalindi Kunj Road, Jasola",
        "addressLocality": "New Delhi",
        "postalCode": "110025",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "+91-7011639618",
        "contactType": "customer service"
      }
    }
    </script>

    @stack('schema')

    @if(!empty($gaId))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $gaId }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '{{ $gaId }}');
    </script>
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8fafc] text-slate-900 antialiased selection:bg-blue-600 selection:text-white min-h-screen flex flex-col justify-between relative" x-data="navHandler">

    {{-- Vibrant Colorful Background Ambient Meshes & 3D Lighting --}}
    <div class="fixed inset-0 vibrant-mesh-bg opacity-70 pointer-events-none -z-20"></div>
    <div class="fixed inset-0 light-grid-pattern opacity-50 pointer-events-none -z-10"></div>
    
    {{-- Floating Decorative 3D Ambient Blur Spheres --}}
    <div class="fixed top-12 left-10 w-96 h-96 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 rounded-full blur-3xl pointer-events-none -z-10 animate-pulse-slow"></div>
    <div class="fixed top-1/3 right-10 w-[450px] h-[450px] bg-gradient-to-br from-purple-400/20 via-pink-400/15 to-indigo-400/20 rounded-full blur-3xl pointer-events-none -z-10 animate-pulse-slow" style="animation-delay: 2s;"></div>

    <x-navbar />

    @if(session('success'))
        <div class="max-w-4xl mx-auto px-4 mt-24 mb-4" x-data="{ show: true }" x-show="show">
            <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-300 text-emerald-900 flex items-center justify-between shadow-lg shadow-emerald-500/10">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6 text-emerald-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-semibold">{{ session('success') }}</span>
                </div>
                <button @click="show = false" class="text-emerald-600 hover:text-emerald-800">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-4xl mx-auto px-4 mt-24 mb-4" x-data="{ show: true }" x-show="show">
            <div class="p-4 rounded-2xl bg-red-50 border border-red-300 text-red-900 flex items-center justify-between shadow-lg shadow-red-500/10">
                <div class="flex items-center space-x-3">
                    <svg class="w-6 h-6 text-red-600 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-semibold">{{ session('error') }}</span>
                </div>
                <button @click="show = false" class="text-red-600 hover:text-red-800">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    @endif

    <main class="flex-grow">
        @isset($slot)
            {{ $slot }}
        @else
            @yield('content')
        @endisset
    </main>

    <x-footer />
    <x-whatsapp-cta />

    @stack('scripts')
</body>
</html>
