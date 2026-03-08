<section class="px-4 md:px-20 -mt-16 relative z-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-6">
        @foreach ($stats as $item)
            <article
                class="flex flex-col gap-2 rounded-xl p-8 bg-white dark:bg-slate-800 shadow-xl border border-slate-100 dark:border-slate-700">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary text-3xl">{{ $item['icon'] }}</span>
                    <p class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
                        {{ $item['label'] }}</p>
                </div>
                <div class="flex items-end gap-2">
                    <p class="text-navy-custom dark:text-white text-4xl font-black">{{ $item['value'] }}</p>
                    <p class="text-green-600 text-sm font-bold mb-1">{{ $item['note'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
