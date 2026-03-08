<section class="px-6 md:px-20 pb-20" id="sarpras">
    <div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40 p-6">
        <div class="flex items-center justify-between gap-3 mb-6">
            <h2 class="text-2xl font-bold text-navy-custom dark:text-white">{{ $sarpras['title'] }}</h2>
            <a class="inline-flex items-center gap-1 text-primary text-sm font-bold hover:underline"
                href="{{ $sarpras['listUrl'] }}">
                Lihat Semua
                <span class="material-symbols-outlined text-base">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($sarpras['items'] as $item)
                <article class="rounded-lg border border-slate-100 dark:border-slate-700 overflow-hidden">
                    <img alt="{{ $item['title'] }}" class="w-full h-40 object-cover" src="{{ $item['thumbnail'] }}" />
                    <div class="p-4">
                        <h3 class="font-semibold text-slate-800 dark:text-slate-100 leading-snug">{{ $item['title'] }}
                        </h3>
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
</section>
