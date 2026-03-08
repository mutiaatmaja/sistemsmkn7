<section class="px-6 md:px-20 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40 p-6"
            id="prestasi">
            <div class="flex items-center justify-between gap-3 mb-6">
                <h2 class="text-2xl font-bold text-navy-custom dark:text-white">{{ $prestasi['title'] }}</h2>
                <a class="inline-flex items-center gap-1 text-primary text-sm font-bold hover:underline" href="{{ $prestasi['listUrl'] }}">
                    Lihat Semua
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                </a>
            </div>
            <div class="space-y-4">
                @foreach ($prestasi['items'] as $item)
                    <article class="flex gap-4 rounded-lg border border-slate-100 dark:border-slate-700 p-3">
                        <img alt="{{ $item['title'] }}" class="w-24 h-20 object-cover rounded-md"
                            src="{{ $item['thumbnail'] }}" />
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800 dark:text-slate-100 leading-snug">
                                {{ $item['title'] }}</h3>
                            <a class="inline-flex items-center gap-1 text-primary text-sm font-bold mt-2 hover:underline"
                                href="{{ $item['url'] }}">
                                Detail
                                <span class="material-symbols-outlined text-base">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40 p-6"
            id="informasi">
            <div class="flex items-center justify-between gap-3 mb-6">
                <h2 class="text-2xl font-bold text-navy-custom dark:text-white">{{ $informasi['title'] }}</h2>
                <a class="inline-flex items-center gap-1 text-primary text-sm font-bold hover:underline" href="{{ $informasi['listUrl'] }}">
                    Lihat Semua
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                </a>
            </div>
            <div class="space-y-4">
                @foreach ($informasi['items'] as $item)
                    <article class="flex gap-4 rounded-lg border border-slate-100 dark:border-slate-700 p-3">
                        <img alt="{{ $item['title'] }}" class="w-24 h-20 object-cover rounded-md"
                            src="{{ $item['thumbnail'] }}" />
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800 dark:text-slate-100 leading-snug">
                                {{ $item['title'] }}</h3>
                            <a class="inline-flex items-center gap-1 text-primary text-sm font-bold mt-2 hover:underline"
                                href="{{ $item['url'] }}">
                                Detail
                                <span class="material-symbols-outlined text-base">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
