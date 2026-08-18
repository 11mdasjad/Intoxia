@props([
    'icon' => null,
    'name' => '',
    'class' => 'w-6 h-6',
])

@php
    $key = strtolower(trim(($icon ?: '') . ' ' . ($name ?: '')));
@endphp

@if(str_contains($key, 'globe') || str_contains($key, 'web'))
    {{-- Web Development / Global Platform --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
    </svg>

@elseif(str_contains($key, 'smartphone') || str_contains($key, 'mobile') || str_contains($key, 'app') || str_contains($key, 'flutter') || str_contains($key, 'ios') || str_contains($key, 'android'))
    {{-- Mobile Applications --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
    </svg>

@elseif(str_contains($key, 'brain') || str_contains($key, 'machine-learning') || str_contains($key, 'machine learning') || str_contains($key, 'neural'))
    {{-- AI & Machine Learning / Brain --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h.01M15 9h.01M9 5h6"/>
    </svg>

@elseif(str_contains($key, 'sparkles') || str_contains($key, 'generative') || str_contains($key, 'agent') || str_contains($key, 'llm'))
    {{-- Generative AI & Autonomous Agents --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
    </svg>

@elseif(str_contains($key, 'code') || str_contains($key, 'custom software') || str_contains($key, 'software engineering') || str_contains($key, 'custom-software'))
    {{-- Custom Software / Code Architecture --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
    </svg>

@elseif(str_contains($key, 'cloud') || str_contains($key, 'devops') || str_contains($key, 'infrastructure') || str_contains($key, 'aws'))
    {{-- Cloud Architecture & DevOps --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/>
    </svg>

@elseif(str_contains($key, 'shopping-cart') || str_contains($key, 'ecommerce') || str_contains($key, 'e-commerce') || str_contains($key, 'store'))
    {{-- E-Commerce & Marketplace Platforms --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
    </svg>

@elseif(str_contains($key, 'palette') || str_contains($key, 'design') || str_contains($key, 'ui') || str_contains($key, 'ux'))
    {{-- UI/UX Experience Design --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4 5 5 0 015-5h4a2 2 0 012 2v2a4 4 0 01-4 4h-3zm0 0a4 4 0 004-4v-2m7-9a4 4 0 11-8 0 4 4 0 018 0zm0 0v2a2 2 0 01-2 2h-2"/>
    </svg>

@elseif(str_contains($key, 'server') || str_contains($key, 'backend') || str_contains($key, 'database') || str_contains($key, 'api'))
    {{-- Backend & High-Load API Servers --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
    </svg>

@elseif(str_contains($key, 'search') || str_contains($key, 'seo') || str_contains($key, 'audit'))
    {{-- SEO & Search Performance --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
    </svg>

@elseif(str_contains($key, 'megaphone') || str_contains($key, 'marketing') || str_contains($key, 'growth'))
    {{-- Digital Marketing & Growth Engineering --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
    </svg>

@elseif(str_contains($key, 'award') || str_contains($key, 'qa') || str_contains($key, 'testing') || str_contains($key, 'quality'))
    {{-- Quality Assurance & Security Auditing --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
    </svg>

@elseif(str_contains($key, 'zap') || str_contains($key, 'saas') || str_contains($key, 'speed'))
    {{-- SaaS Multi-Tenant Engineering --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
    </svg>

@elseif(str_contains($key, 'receipt') || str_contains($key, 'erp') || str_contains($key, 'crm') || str_contains($key, 'automation'))
    {{-- ERP & Enterprise Workflow Automation --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
    </svg>

@elseif(str_contains($key, 'layout') || str_contains($key, 'frontend') || str_contains($key, 'design system'))
    {{-- Modern Frontend Architecture & Design Systems --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
    </svg>

@elseif(str_contains($key, 'security') || str_contains($key, 'shield') || str_contains($key, 'lock'))
    {{-- Cybersecurity & Data Protection --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
    </svg>

@else
    {{-- Modern Geometric High-Tech Fallback Glyph --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/>
    </svg>
@endif
