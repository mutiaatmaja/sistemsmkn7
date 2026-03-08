<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="@yield('meta_description', 'Dashboard admin SMKN 7 Pontianak')" name="description" />
    <title>@yield('title', 'SMKN 7 Pontianak - Dashboard Admin')</title>
    @vite(['resources/modules/admin/admin.css', 'resources/modules/admin/admin.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    @stack('head')
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased font-display">
    @yield('content')
</body>

</html>
