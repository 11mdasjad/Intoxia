@props([
    'stat'
])

<div 
    x-data="statCounter('{{ $stat->value }}', '{{ $stat->suffix ?? '' }}')"
    class="glass-panel rounded-2xl p-6 sm:p-8 text-center relative overflow-hidden group hover:border-blue-500/40 transition-colors"
>
    <div class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-300 font-mono tracking-tight">
        <span x-text="current">0</span><span x-text="suffix">{{ $stat->suffix }}</span>
    </div>
    <div class="mt-2 text-sm sm:text-base font-semibold text-slate-900 tracking-tight">
        {{ $stat->label }}
    </div>
</div>
