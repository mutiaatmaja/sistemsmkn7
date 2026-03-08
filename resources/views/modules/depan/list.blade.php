@extends('layouts.modules.depan')

@section('title', $sectionData['title'] . ' - ' . $page['brand']['name'])
@section('meta_description', 'Daftar ' . $sectionData['title'] . ' SMKN 7 Pontianak')

@section('content')
    <main class="max-w-6xl mx-auto px-6 md:px-8 py-10 md:py-14">
        <a class="inline-flex items-center gap-1 text-primary text-sm font-bold hover:underline"
            href="{{ route('depan.index') . '#' . $section }}">
            <span class="material-symbols-outlined text-base">arrow_back</span>
            Kembali ke Beranda
        </a>

        <div class="mt-6 flex items-center justify-between gap-4">
            <h1 class="text-3xl md:text-4xl font-black text-navy-custom dark:text-white">{{ $sectionData['title'] }}</h1>
            <span class="text-sm font-semibold text-slate-500 dark:text-slate-300">{{ $paginatedItems->total() }} item</span>
        </div>

        <section class="mt-8 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach ($paginatedItems as $item)
                <article
                    class="rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40">
                    <img alt="{{ $item['title'] }}" class="w-full h-48 object-cover" src="{{ $item['thumbnail'] }}" />
                    <div class="p-5">
                        <h2 class="text-lg font-bold text-slate-900 dark:text-slate-100 leading-snug">{{ $item['title'] }}
                        </h2>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item['summary'] }}
                        </p>
                        <a class="inline-flex items-center gap-1 text-primary text-sm font-bold mt-4 hover:underline"
                            href="{{ $item['url'] }}">
                            Detail
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </section>

        @if ($paginatedItems->hasPages())
            <div class="mt-8">
                {{ $paginatedItems->onEachSide(1)->links() }}
            </div>
        @endif
    </main>
@endsection
