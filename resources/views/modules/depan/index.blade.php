@extends('layouts.modules.depan')

@section('title', $page['meta']['title'])
@section('meta_description', $page['meta']['description'])

@section('content')
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        @include('modules.depan.partials.header', [
            'brand' => $page['brand'],
            'navigation' => $page['navigation'],
        ])

        <main class="flex-1">
            @include('modules.depan.partials.hero', ['hero' => $page['hero']])
            @include('modules.depan.partials.stats', ['stats' => $page['stats']])
            @include('modules.depan.partials.mission', [
                'mission' => $page['mission'],
                'values' => $page['values'],
            ])
            @include('modules.depan.partials.info-blocks', [
                'prestasi' => $page['prestasi'],
                'informasi' => $page['informasi'],
            ])
            @include('modules.depan.partials.sarpras', ['sarpras' => $page['sarpras']])
        </main>

        @include('modules.depan.partials.footer', ['brand' => $page['brand'], 'footer' => $page['footer']])
    </div>
@endsection
