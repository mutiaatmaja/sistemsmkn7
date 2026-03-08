<header
    class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 px-6 md:px-20 py-4 bg-white dark:bg-background-dark sticky top-0 z-50">
    <div class="flex items-center gap-4 text-navy-custom dark:text-gold-custom">
        <div class="size-8 flex items-center justify-center bg-navy-custom text-white rounded-lg">
            <span class="material-symbols-outlined text-xl">school</span>
        </div>
        <div>
            <h1 class="text-navy-custom dark:text-slate-100 text-xl font-bold leading-tight">{{ $brand['name'] }}</h1>
            <p class="text-xs text-slate-500 dark:text-slate-400">{{ $brand['tagline'] }}</p>
        </div>
    </div>

    <div class="hidden md:flex items-center gap-8">
        <nav class="flex items-center gap-6">
            @foreach ($navigation as $item)
                <a class="text-slate-700 dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                    href="{{ $item['url'] }}">{{ $item['label'] }}</a>
            @endforeach
        </nav>
        <a class="inline-flex min-w-[100px] items-center justify-center rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-all"
            href="{{ route('admin.dashboard') }}">Masuk</a>
    </div>
</header>
