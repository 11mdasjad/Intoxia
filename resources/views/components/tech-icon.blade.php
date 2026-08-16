@props(['name' => '', 'size' => 'w-8 h-8'])

@php
    $n = strtolower(trim($name));
@endphp

@if(str_contains($n, 'javascript') || $n === 'js')
    {{-- JavaScript --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#F7DF1E"/>
        <path d="M6 17.5V7h2.5v7.5c0 1.2-.5 1.8-1.5 1.8-.4 0-.8-.1-1-.3v1.5z" fill="transparent"/>
        <path d="M7 16.5c.5.3 1.1.5 1.7.5 1 0 1.6-.5 1.6-1.5v-6h2.2v6.1c0 2.2-1.3 3.4-3.6 3.4-1 0-1.8-.2-2.3-.5l.4-2zm6.8-.2c.6.4 1.4.7 2.2.7 1 0 1.6-.5 1.6-1.2 0-.8-.6-1.1-1.7-1.6-1.6-.7-2.6-1.6-2.6-3 0-1.7 1.4-3 3.5-3 1 0 1.7.2 2.2.5l-.6 1.8c-.4-.2-1-.4-1.6-.4-1 0-1.4.5-1.4 1.1 0 .7.6 1 1.7 1.5 1.7.7 2.7 1.6 2.7 3.1 0 1.8-1.4 3.1-3.8 3.1-1.1 0-2.1-.3-2.7-.8l.8-1.9z" fill="#000000"/>
    </svg>

@elseif(str_contains($n, 'typescript') || $n === 'ts')
    {{-- TypeScript --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#3178C6"/>
        <path d="M12.5 10.5h-5V8.5h12.5v2h-5v10h-2.5v-10zm2 7.5c.6.4 1.4.7 2.2.7 1 0 1.5-.5 1.5-1.1 0-.8-.6-1.1-1.7-1.6-1.5-.7-2.5-1.5-2.5-2.9 0-1.7 1.3-2.9 3.4-2.9 1 0 1.7.2 2.2.5l-.6 1.8c-.4-.2-1-.4-1.6-.4-.9 0-1.4.4-1.4 1 0 .7.5 1 1.6 1.5 1.7.7 2.6 1.6 2.6 3 0 1.8-1.4 3-3.7 3-1.1 0-2.1-.3-2.7-.8l.7-1.8z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'react native') || str_contains($n, 'react'))
    {{-- React --}}
    <svg class="{{ $size }}" viewBox="-11.5 -10.23174 23 20.46348">
        <circle cx="0" cy="0" r="2.05" fill="#61DAFB"/>
        <g stroke="#61DAFB" stroke-width="1" fill="none">
            <ellipse rx="11" ry="4.2"/>
            <ellipse rx="11" ry="4.2" transform="rotate(60)"/>
            <ellipse rx="11" ry="4.2" transform="rotate(120)"/>
        </g>
    </svg>

@elseif(str_contains($n, 'next'))
    {{-- Next.js --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <circle cx="12" cy="12" r="12" fill="#000000"/>
        <path d="M15.5 8h2v8h-2V8zm-7 0h2.2l5.8 8.5h-2.3L8.5 8z" fill="#FFFFFF"/>
        <path d="M8.5 8h2v8h-2V8z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'vue'))
    {{-- Vue.js --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M12 18.5L2 3.5h4.5L12 12.5l5.5-9H22L12 18.5z" fill="#41B883"/>
        <path d="M12 14L5.5 3.5h3.5L12 8.5l3-5H18.5L12 14z" fill="#35495E"/>
    </svg>

@elseif(str_contains($n, 'tailwind'))
    {{-- Tailwind CSS --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.335 6.182 14.975 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.335 13.382 8.975 12 6.001 12z" fill="#06B6D4"/>
    </svg>

@elseif(str_contains($n, 'alpine'))
    {{-- Alpine.js --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M17.5 17.5L23 12l-5.5-5.5L12 12l5.5 5.5z" fill="#77C1D2"/>
        <path d="M6.5 17.5L1 12l5.5-5.5L12 12 6.5 17.5z" fill="#2D3748"/>
    </svg>

@elseif(str_contains($n, 'laravel'))
    {{-- Laravel --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M21.5 6.2L13.7 1.7c-.5-.3-1.1-.3-1.6 0L4.3 6.2c-.5.3-.8.8-.8 1.4v9c0 .6.3 1.1.8 1.4l7.8 4.5c.5.3 1.1.3 1.6 0l7.8-4.5c.5-.3.8-.8.8-1.4v-9c0-.6-.3-1.1-.8-1.4z" fill="#FF2D20"/>
        <path d="M12 4.5l6 3.5v7l-6 3.5-6-3.5v-7l6-3.5z" fill="#FFFFFF"/>
        <path d="M12 7l4 2.3v4.6L12 16.2 8 13.9V9.3L12 7z" fill="#FF2D20"/>
    </svg>

@elseif(str_contains($n, 'php'))
    {{-- PHP --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <ellipse cx="12" cy="12" rx="11" ry="7" fill="#777BB4"/>
        <path d="M6 14.5V9.5h2.5c1.2 0 2 .6 2 1.6s-.8 1.6-2 1.6H7.5v1.8H6zm1.5-3.3h1c.5 0 .8-.2.8-.6s-.3-.6-.8-.6h-1v1.2zm6 3.3V9.5h1.5v2h2.5v-2h1.5v5h-1.5v-2h-2.5v2H13.5zm5.5 0V9.5h2.5c1.2 0 2 .6 2 1.6s-.8 1.6-2 1.6H20.5v1.8H19zm1.5-3.3h1c.5 0 .8-.2.8-.6s-.3-.6-.8-.6h-1v1.2z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'node'))
    {{-- Node.js --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M12 2l9 5.2v10.4L12 23 3 17.6V7.2L12 2z" fill="#5FA04E"/>
        <path d="M12 4.5L18.5 8.2v7.5L12 19.5 5.5 15.7V8.2L12 4.5z" fill="#333333"/>
        <path d="M11.5 8.5v7h1.5v-7h-1.5z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'python'))
    {{-- Python --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M11.9 2c-3.1 0-5 .7-5 2.5v2h5v.8H4.6C2.6 7.3 2 8.7 2 11.2c0 2.2.7 3.5 2.4 3.5h1.4v-1.8c0-1.8 1.5-3.3 3.3-3.3h5.1c1.5 0 2.8-1.2 2.8-2.8V4.8C17 2.8 15 2 11.9 2zm-1.7 1.5c.5 0 .9.4.9.9s-.4.9-.9.9-.9-.4-.9-.9.4-.9.9-.9z" fill="#3776AB"/>
        <path d="M12.1 22c3.1 0 5-.7 5-2.5v-2h-5v-.8h7.3c2 0 2.6-1.4 2.6-3.9 0-2.2-.7-3.5-2.4-3.5h-1.4v1.8c0 1.8-1.5 3.3-3.3 3.3H9.8c-1.5 0-2.8 1.2-2.8 2.8v2.1c0 2 2 2.8 5.1 2.8zm1.7-1.5c-.5 0-.9-.4-.9-.9s.4-.9.9-.9.9.4.9.9-.4.9-.9.9z" fill="#FFD438"/>
    </svg>

@elseif(str_contains($n, 'flutter'))
    {{-- Flutter --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M13.5 2L3 12.5l3.2 3.2L19.9 2h-6.4z" fill="#02569B"/>
        <path d="M13.5 12.5l-4.8 4.8 4.8 4.7h6.4l-8-8 1.6-1.5z" fill="#0175C2"/>
        <path d="M8.7 17.3l3.2 3.2 1.6-1.6-3.2-3.2-1.6 1.6z" fill="#29B6F6"/>
    </svg>

@elseif(str_contains($n, 'swift') || str_contains($n, 'ios'))
    {{-- Swift --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="5" fill="#F05138"/>
        <path d="M18.8 16.5c-.3.4-2.8 3.5-7.3 3.5-4.8 0-8-3.7-8-8.2 0-3.3 1.9-6.3 4.8-7.8-.5 1.5-.4 3.2.5 4.5 1.2 1.7 3.3 2.5 5.3 2.1-1.3 1.1-2.9 1.8-4.7 1.8 3.5 1.8 7.7.8 9.4-4.1.2 2.7-.8 5.6-2.5 7.4 1-.4 1.9-1 2.5-1.9v2.7z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'kotlin') || str_contains($n, 'android'))
    {{-- Kotlin / Android --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#7F52FF"/>
        <path d="M20 20H4V4h16l-8 8 8 8z" fill="#C757BC"/>
        <path d="M4 4h8l-8 8V4z" fill="#0095D5"/>
    </svg>

@elseif(str_contains($n, 'postgres'))
    {{-- PostgreSQL --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#336791"/>
        <path d="M12 4c-4.4 0-8 3.6-8 8 0 3.3 2 6.1 4.9 7.3.3.1.6 0 .7-.3v-2.1c-.8.2-1.5.3-2.1.3-1.8 0-2.8-1-2.8-2.6 0-1.8 1.3-3.2 3.6-3.2h.7v-.5c0-1.5-.8-2.3-2.2-2.3-.9 0-1.8.3-2.5.8L3.7 8c.9-.7 2.2-1.1 3.6-1.1 2.5 0 4 1.3 4 3.7v5.5c0 .3.2.5.5.5.2 0 .4-.1.5-.2l.6-.6v2c0 .3.3.5.6.5h.3c3.8 0 6.9-3.1 6.9-6.9 0-4.4-3.6-7.9-8-7.9h-.3z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'mysql'))
    {{-- MySQL --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#00758F"/>
        <path d="M6 15c.5.5 1.5.8 2.5.8 1.5 0 2.5-.7 2.5-2V9H9.5v4.5c0 .5-.3.8-.8.8s-.8-.3-.8-.8V9H6v6zm6.5 0c.5.5 1.5.8 2.5.8 1.5 0 2.5-.7 2.5-2V9h-1.5v4.5c0 .5-.3.8-.8.8s-.8-.3-.8-.8V9h-1.9v6z" fill="#F29111"/>
    </svg>

@elseif(str_contains($n, 'redis'))
    {{-- Redis --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M21 7.5L12 3 3 7.5 12 12l9-4.5z" fill="#DC382D"/>
        <path d="M3 7.5v9L12 21v-9L3 7.5z" fill="#A41E11"/>
        <path d="M21 7.5v9L12 21v-9l9-4.5z" fill="#BD2C00"/>
    </svg>

@elseif(str_contains($n, 'docker'))
    {{-- Docker --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M4 11h2.5v2.5H4V11zm3.5 0H10v2.5H7.5V11zm3.5 0h2.5v2.5H11V11zm3.5 0h2.5v2.5H14.5V11zm-7-3.5H10V10H7.5V7.5zm3.5 0h2.5V10H11V7.5zm3.5 0h2.5V10H14.5V7.5zm-3.5-3.5h2.5V6H11V4z" fill="#2496ED"/>
        <path d="M22.5 12.5c-.4-.3-1.4-.4-2.1 0-.3-.9-1.1-1.5-2-1.5h-1.9v3.5h5.5c.3-.6.5-1.3.5-2z" fill="#2496ED"/>
        <path d="M2 13.5c.8 4.2 4.4 7.5 8.8 7.5 5.5 0 10-4.5 10-10 0-.4 0-.7-.1-1.1-1.1.8-2.6.9-3.9.1l-.8-.5H1.5c.1 1.4.3 2.7.5 4z" fill="#2496ED"/>
    </svg>

@elseif(str_contains($n, 'aws') || str_contains($n, 'amazon'))
    {{-- AWS --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#232F3E"/>
        <path d="M6.5 14.5c2.5 2 7 2.5 11 0 .5-.3 1.1.2.7.7-4.5 3-10 2.5-12.5-.2-.3-.3.3-.8.8-.5z" fill="#FF9900"/>
        <path d="M18.2 13.8c-.3-.4-1.8-.2-2.5-.1-.2 0-.3-.2-.1-.3.8-.6 2.1-.4 2.8.2.3.3.1.7-.2.2z" fill="#FF9900"/>
        <path d="M7 11.5L8.5 7h1.8l1.5 4.5h-1.2l-.3-1h-1.8l-.3 1H7zm1.7-2.2h1.2L9.3 8l-.6 1.3z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'kubernetes'))
    {{-- Kubernetes --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#326CE5"/>
        <path d="M12 4l7 4v8l-7 4-7-4V8l7-4z" fill="#FFFFFF"/>
        <circle cx="12" cy="12" r="3" fill="#326CE5"/>
    </svg>

@elseif(str_contains($n, 'openai') || str_contains($n, 'chatgpt') || str_contains($n, 'llm'))
    {{-- OpenAI --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#10A37F"/>
        <circle cx="12" cy="12" r="6" stroke="#FFFFFF" stroke-width="2" fill="none"/>
        <path d="M12 6v12M6 12h12" stroke="#FFFFFF" stroke-width="2"/>
    </svg>

@elseif(str_contains($n, 'pytorch') || str_contains($n, 'torch'))
    {{-- PyTorch --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#EE4C2C"/>
        <path d="M14 6l-4 4 4 4" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <circle cx="15" cy="7" r="1.5" fill="#FF6F00"/>
    </svg>

@elseif(str_contains($n, 'pinecone') || str_contains($n, 'vector'))
    {{-- Pinecone / Vector DB --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#000000"/>
        <path d="M12 4l6 4v8l-6 4-6-4V8l6-4z" fill="#00D26A"/>
        <path d="M12 8l3 2v4l-3 2-3-2v-4l3-2z" fill="#FFFFFF"/>
    </svg>

@elseif(str_contains($n, 'langchain'))
    {{-- LangChain --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#1C3C3C"/>
        <circle cx="8" cy="12" r="3" stroke="#2DE370" stroke-width="2"/>
        <circle cx="16" cy="12" r="3" stroke="#2DE370" stroke-width="2"/>
        <path d="M11 12h2" stroke="#2DE370" stroke-width="2"/>
    </svg>

@elseif(str_contains($n, 'graphql'))
    {{-- GraphQL --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <rect width="24" height="24" rx="4" fill="#E10098"/>
        <circle cx="12" cy="5" r="2" fill="#FFFFFF"/>
        <circle cx="5" cy="17" r="2" fill="#FFFFFF"/>
        <circle cx="19" cy="17" r="2" fill="#FFFFFF"/>
        <path d="M12 7l-6 8h12l-6-8z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
    </svg>

@elseif(str_contains($n, 'flutter') || str_contains($n, 'dart'))
    {{-- Dart --}}
    <svg class="{{ $size }}" viewBox="0 0 24 24" fill="none">
        <path d="M4 4h9l7 7-7 7H4l7-7-7-7z" fill="#0175C2"/>
    </svg>

@else
    {{-- Default High-Tech Brand Glyph --}}
    <div class="{{ $size }} rounded-xl bg-gradient-to-tr from-blue-600 via-indigo-600 to-cyan-500 p-0.5 flex items-center justify-center shadow-md">
        <div class="w-full h-full bg-white rounded-[10px] flex items-center justify-center font-mono font-black text-xs text-blue-600">
            {{ strtoupper(substr($name, 0, 2)) }}
        </div>
    </div>
@endif
