<header class="border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark sticky top-0 z-50">
    <div class="flex items-center justify-between px-6 md:px-20 py-4">
        <div class="flex items-center gap-4 text-navy-custom dark:text-gold-custom">
            <div class="size-8 flex items-center justify-center bg-navy-custom text-white rounded-lg">
                <span class="material-symbols-outlined text-xl">school</span>
            </div>
            <div>
                <h1 class="text-navy-custom dark:text-slate-100 text-xl font-bold leading-tight">{{ $brand['name'] }}</h1>
                <p class="text-xs text-slate-500 dark:text-slate-400">{{ $brand['tagline'] }}</p>
            </div>
        </div>

        <button id="mobile-menu-toggle" type="button"
            class="md:hidden inline-flex items-center justify-center rounded-lg p-2 text-navy-custom dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800"
            aria-label="Buka menu" aria-controls="mobile-menu" aria-expanded="false">
            <span class="material-symbols-outlined" id="mobile-menu-icon">menu</span>
        </button>

        <div class="hidden md:flex items-center gap-8">
            <nav class="flex items-center gap-6">
                @foreach ($navigation as $item)
                    <a class="text-slate-700 dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                        href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                @endforeach
            </nav>
            <a class="inline-flex min-w-25 items-center justify-center rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-all"
                href="{{ route('admin.dashboard') }}">Masuk</a>
        </div>
    </div>

    <div id="mobile-menu"
        class="md:hidden px-6 border-t border-slate-200 dark:border-slate-800 overflow-hidden max-h-0 opacity-0 invisible -translate-y-1 pb-0 transition-all duration-300 ease-out">
        <nav class="flex flex-col gap-1 pt-3">
            @foreach ($navigation as $item)
                <a class="mobile-menu-link text-slate-700 dark:text-slate-300 text-sm font-semibold py-2 hover:text-primary transition-colors"
                    href="{{ $item['url'] }}">{{ $item['label'] }}</a>
            @endforeach
        </nav>
        <a class="inline-flex min-w-25 items-center justify-center rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-all"
            href="{{ route('admin.dashboard') }}">Masuk</a>
    </div>
</header>
