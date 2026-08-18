@props([
    'icon' => null,
    'name' => '',
    'class' => 'w-6 h-6',
])

@php
    $key = strtolower(trim(($icon ?: '') . ' ' . ($name ?: '')));
@endphp

@if(str_contains($key, 'heart-pulse') || str_contains($key, 'healthcare') || str_contains($key, 'health') || str_contains($key, 'medical') || str_contains($key, 'pharma'))
    {{-- Healthcare & Life Sciences --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0zM12 9v6m-3-3h6"/>
    </svg>

@elseif(str_contains($key, 'graduation-cap') || str_contains($key, 'education') || str_contains($key, 'edtech') || str_contains($key, 'learning') || str_contains($key, 'academy'))
    {{-- Education & EdTech --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5"/>
    </svg>

@elseif(str_contains($key, 'landmark') || str_contains($key, 'fintech') || str_contains($key, 'finance') || str_contains($key, 'banking') || str_contains($key, 'payment'))
    {{-- Banking, FinTech & Wealth --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
    </svg>

@elseif(str_contains($key, 'shopping-bag') || str_contains($key, 'ecommerce') || str_contains($key, 'retail') || str_contains($key, 'd2c'))
    {{-- Retail, E-Commerce & D2C Brands --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
    </svg>

@elseif(str_contains($key, 'building') || str_contains($key, 'real estate') || str_contains($key, 'proptech') || str_contains($key, 'property'))
    {{-- Real Estate & PropTech --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
    </svg>

@elseif(str_contains($key, 'plane') || str_contains($key, 'travel') || str_contains($key, 'tourism') || str_contains($key, 'hospitality'))
    {{-- Travel, Airlines & Tourism --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>

@elseif(str_contains($key, 'utensils') || str_contains($key, 'restaurant') || str_contains($key, 'food') || str_contains($key, 'dining'))
    {{-- Food, Restaurants & Quick Commerce --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253M7 9h.01M17 9h.01"/>
    </svg>

@elseif(str_contains($key, 'factory') || str_contains($key, 'manufacturing') || str_contains($key, 'industrial') || str_contains($key, 'iot'))
    {{-- Manufacturing, Industry 4.0 & IoT --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V9l6 3V9l6 3V5l4 2v12a2 2 0 01-2 2zM9 17h6M9 13h6"/>
    </svg>

@elseif(str_contains($key, 'truck') || str_contains($key, 'logistics') || str_contains($key, 'supply chain') || str_contains($key, 'freight') || str_contains($key, 'fleet'))
    {{-- Logistics, Supply Chain & Fleet Management --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8h4l3 3v5a1 1 0 01-1 1h-2"/>
    </svg>

@elseif(str_contains($key, 'leaf') || str_contains($key, 'agriculture') || str_contains($key, 'agtech') || str_contains($key, 'farming') || str_contains($key, 'clean energy'))
    {{-- Agriculture, AgTech & Clean Energy --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
    </svg>

@elseif(str_contains($key, 'briefcase') || str_contains($key, 'professional services') || str_contains($key, 'legal') || str_contains($key, 'consulting'))
    {{-- Professional Services & Legal --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </svg>

@elseif(str_contains($key, 'rocket') || str_contains($key, 'aerospace') || str_contains($key, 'defense') || str_contains($key, 'space') || str_contains($key, 'high-growth'))
    {{-- Aerospace, Defense & Deep Tech --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/>
    </svg>

@else
    {{-- Default Distinct Industry Blueprint Icon --}}
    <svg class="{{ $class }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
    </svg>
@endif
