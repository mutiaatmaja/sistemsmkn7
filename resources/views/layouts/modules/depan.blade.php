<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="@yield('meta_description', 'Portal resmi SMKN 7 Pontianak')" name="description" />
    <title>@yield('title', 'SMKN 7 Pontianak')</title>
    @vite(['resources/modules/depan/depan.css', 'resources/modules/depan/depan.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @stack('head')
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
    @yield('content')
</body>

</html>
