<x-layouts.app title="403 — Unauthorized | Intoxia Technologies">
    <section class="min-h-[70vh] flex items-center justify-center py-32 text-center px-4">
        <div class="max-w-md space-y-6">
            <div class="text-7xl font-extrabold font-mono text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-red-400">
                403
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white">Access Prohibited</h1>
            <p class="text-slate-400 text-sm leading-relaxed">
                You do not possess the required permissions to access this administrative gateway.
            </p>
            <div class="pt-4">
                <a href="{{ route('home') }}" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-lg shadow-blue-600/30 transition-colors">
                    Back to Home
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
