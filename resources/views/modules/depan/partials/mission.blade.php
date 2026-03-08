<section class="flex flex-col gap-12 px-6 md:px-20 py-20 bg-background-light dark:bg-background-dark/50">
    <div class="flex flex-col gap-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary w-fit">
            <span class="material-symbols-outlined text-sm">verified</span>
            <span class="text-xs font-bold uppercase tracking-widest">{{ $mission['badge'] }}</span>
        </div>
        <h2 class="text-navy-custom dark:text-slate-100 text-4xl md:text-5xl font-black leading-tight">
            {{ $mission['title'] }}</h2>
        <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed max-w-4xl">{{ $mission['description'] }}</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-3xl">
            @foreach ($mission['points'] as $point)
                <div class="flex items-start gap-3">
                    <div class="mt-1 flex items-center justify-center size-5 bg-gold-custom rounded-full">
                        <span class="material-symbols-outlined text-white text-[12px]">check</span>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 font-medium">{{ $point }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($values as $value)
            <article
                class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 p-8 hover:border-primary transition-colors">
                <div class="size-14 flex items-center justify-center rounded-lg bg-navy-custom text-gold-custom">
                    <span class="material-symbols-outlined text-3xl">{{ $value['icon'] }}</span>
                </div>
                <h3 class="text-navy-custom dark:text-white text-xl font-bold">{{ $value['title'] }}</h3>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed">{{ $value['description'] }}</p>
            </article>
        @endforeach
    </div>
</section>
