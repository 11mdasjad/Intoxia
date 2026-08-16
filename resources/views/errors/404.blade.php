<x-layouts.app title="404 — Page Not Found | Intoxia Technologies">
    <section class="min-h-[70vh] flex items-center justify-center py-32 text-center px-4">
        <div class="max-w-md space-y-6">
            <div class="text-7xl font-extrabold font-mono text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400">
                404
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white">Resource Not Found</h1>
            <p class="text-slate-400 text-sm leading-relaxed">
                The architecture endpoint or page you requested does not exist or has been relocated.
            </p>
            <div class="pt-4 flex items-center justify-center space-x-4">
                <a href="{{ route('home') }}" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-lg shadow-blue-600/30 transition-colors">
                    Back to Homepage
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-white/5 hover:bg-white/10 text-slate-300 text-sm font-semibold border border-white/10 transition-colors">
                    Contact Support
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
