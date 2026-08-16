@props([
    'size' => 'w-10 h-10',
    'showText' => true,
    'textColor' => 'text-slate-900',
    'subtextColor' => 'text-blue-600'
])

<div class="flex items-center space-x-3">
    {{-- Intoxia Official Emblem SVG --}}
    <div class="{{ $size }} shrink-0 relative flex items-center justify-center">
        <svg class="w-full h-full drop-shadow-md" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="intoxiaGrad" x1="20" y1="20" x2="180" y2="180" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#0284c7"/>
                    <stop offset="50%" stop-color="#0277bd"/>
                    <stop offset="100%" stop-color="#0369a1"/>
                </linearGradient>
                <filter id="intoxiaShadow" x="-10%" y="-10%" width="130%" height="130%">
                    <feDropShadow dx="2" dy="4" stdDeviation="4" flood-opacity="0.25" flood-color="#000000"/>
                </filter>
            </defs>
            
            {{-- Circular Base with 3D depth --}}
            <circle cx="100" cy="100" r="90" fill="url(#intoxiaGrad)" filter="url(#intoxiaShadow)"/>
            
            {{-- 3D Edge Bevel --}}
            <path d="M165 45 C190 75 190 135 155 170 C130 195 70 195 40 170 C100 200 170 170 180 100 C185 65 165 45 165 45 Z" fill="#01579b" opacity="0.4"/>

            {{-- Top Dot of 'i' --}}
            <circle cx="106" cy="48" r="16" fill="#FFFFFF"/>
            
            {{-- Stylized 'i' Stem with inner shadow curve --}}
            <path d="M78 86 C86 85 96 82 108 76 L118 78 L118 190 C110 190 98 185 98 175 L98 94 C88 98 82 100 75 100 L75 88 Z" fill="#01579b" opacity="0.3"/>
            <path d="M76 84 C85 83 95 80 106 74 C112 71 118 75 118 82 L118 190 C118 190 98 190 98 190 L98 92 C88 95 82 96 76 96 Z" fill="#FFFFFF"/>
        </svg>
    </div>

    @if($showText)
        <div class="flex flex-col">
            <span class="text-xl font-black tracking-tight {{ $textColor }} font-['Outfit'] leading-none">
                INTOXIA
            </span>
            <span class="text-[9px] font-extrabold tracking-[0.22em] {{ $subtextColor }} uppercase font-mono mt-1">
                TECHNOLOGIES
            </span>
        </div>
    @endif
</div>
