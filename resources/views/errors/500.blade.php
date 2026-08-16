<x-layouts.app title="500 — Server Error | Intoxia Technologies">
    <section class="min-h-[70vh] flex items-center justify-center py-32 text-center px-4">
        <div class="max-w-md space-y-6">
            <div class="text-7xl font-extrabold font-mono text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-amber-400">
                500
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white">System Error</h1>
            <p class="text-slate-400 text-sm leading-relaxed">
                An internal exception occurred. Our monitoring team has been notified.
            </p>
            <div class="pt-4">
                <a href="{{ route('home') }}" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-lg shadow-blue-600/30 transition-colors">
                    Return to Safe Ground
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
