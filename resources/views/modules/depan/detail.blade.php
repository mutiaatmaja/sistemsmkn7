@extends('layouts.modules.depan')

@section('title', $detail['title'] . ' - ' . $page['brand']['name'])
@section('meta_description', $detail['summary'])

@section('content')
    <main class="max-w-5xl mx-auto px-6 md:px-8 py-10 md:py-14">
        <a class="inline-flex items-center gap-1 text-primary text-sm font-bold hover:underline"
            href="{{ $detail['backUrl'] }}">
            <span class="material-symbols-outlined text-base">arrow_back</span>
            Kembali ke {{ $detail['sectionTitle'] }}
        </a>

        <article
            class="mt-6 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/40">
            <img alt="{{ $detail['title'] }}" class="w-full h-72 md:h-96 object-cover" src="{{ $detail['thumbnail'] }}" />
            <div class="p-6 md:p-8">
                <p class="text-xs uppercase tracking-wider font-bold text-primary">{{ $detail['sectionTitle'] }}</p>
                <h1 class="mt-2 text-3xl md:text-4xl font-black text-navy-custom dark:text-white leading-tight">
                    {{ $detail['title'] }}</h1>
                <p class="mt-4 text-slate-600 dark:text-slate-300 text-lg leading-relaxed">{{ $detail['summary'] }}</p>
                <p class="mt-4 text-slate-700 dark:text-slate-200 leading-relaxed">{{ $detail['content'] }}</p>
            </div>
        </article>
    </main>
@endsection
