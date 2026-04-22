<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? 'Perpustakaan - SMKN 7 Pontianak' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @stack('head')
    @livewireStyles()
</head>

<body class="min-h-screen bg-slate-50 font-display text-slate-900 antialiased">
    <header class="border-b border-cyan-200 bg-cyan-600 px-6 py-4 text-white">
        <h1 class="text-lg font-semibold">Modul Perpustakaan</h1>
    </header>

    <main class="mx-auto max-w-5xl p-6">
        {{ $slot }}
    </main>

    @livewireScripts()
</body>

</html>
