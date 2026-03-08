@extends('layouts.modules.admin')

@section('title', 'SMKN 7 Pontianak - Dashboard Admin')

@section('content')
    <div class="flex min-h-screen">
        <div class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden" id="sidebar-overlay"></div>
        <aside
            class="fixed inset-y-0 left-0 z-50 w-72 bg-secondary text-white transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0 mobile-hidden"
            id="sidebar">
            <div class="flex flex-col h-full">
                <div class="flex items-center gap-3 px-6 py-6 border-b border-white/10">
                    <div class="bg-primary p-1.5 rounded-lg">
                        <span class="material-symbols-outlined text-white text-2xl">school</span>
                    </div>
                    <div>
                        <h1 class="font-bold text-lg leading-tight sidebar-header-text">SMKN 7</h1>
                        <p class="text-xs text-slate-400 sidebar-header-text">SIM Pontianak</p>
                    </div>
                </div>

                <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto sidebar-scroll">
                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white transition-colors"
                        href="{{ route('admin.dashboard') }}">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="font-medium sidebar-text">Dashboard</span>
                    </a>

                    <div class="pt-4">
                        <p class="px-3 text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2 sidebar-section-label">
                            Halaman Depan</p>
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">public</span>
                                    <span class="sidebar-text">Depan</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">Pengumuman</a>
                                <a class="block py-2 hover:text-primary" href="#">Profil Sekolah</a>
                                <a class="block py-2 hover:text-primary" href="#">Visi Misi</a>
                                <a class="block py-2 hover:text-primary" href="#">Jurusan</a>
                            </div>
                        </details>
                    </div>

                    <div class="pt-2">
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">history_edu</span>
                                    <span class="sidebar-text">Akademis</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">Data Jurusan</a>
                                <a class="block py-2 hover:text-primary" href="#">Data Kelas</a>
                                <a class="block py-2 hover:text-primary" href="#">Data Guru</a>
                                <a class="block py-2 hover:text-primary" href="#">Data TU</a>
                                <a class="block py-2 hover:text-primary" href="#">Data Siswa</a>
                                <a class="block py-2 hover:text-primary" href="#">OSIS</a>
                                <a class="block py-2 hover:text-primary" href="#">Kurikulum</a>
                                <a class="block py-2 hover:text-primary" href="#">Jadwal Pelajaran</a>
                            </div>
                        </details>
                    </div>

                    <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 transition-colors"
                        href="#">
                        <span class="material-symbols-outlined text-slate-400">report_problem</span>
                        <span class="sidebar-text">Pengaduan</span>
                    </a>

                    <div class="pt-2">
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">work</span>
                                    <span class="sidebar-text">PKL</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">Data DUDI</a>
                                <a class="block py-2 hover:text-primary" href="#">Jadwal</a>
                                <a class="block py-2 hover:text-primary" href="#">Peserta</a>
                                <a class="block py-2 hover:text-primary" href="#">Monitoring</a>
                            </div>
                        </details>
                    </div>

                    <div class="pt-2">
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">inventory_2</span>
                                    <span class="sidebar-text">Sarana &amp; Prasarana</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">Inventaris</a>
                                <a class="block py-2 hover:text-primary" href="#">Peminjaman</a>
                            </div>
                        </details>
                    </div>

                    <div class="pt-2">
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">analytics</span>
                                    <span class="sidebar-text">Tracer Study</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">Ikhtisar</a>
                                <a class="block py-2 hover:text-primary" href="#">Tracer</a>
                                <a class="block py-2 hover:text-primary" href="#">Daftar Pertanyaan</a>
                            </div>
                        </details>
                    </div>

                    <div class="pt-2">
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">local_library</span>
                                    <span class="sidebar-text">Perpustakaan</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">Buku</a>
                                <a class="block py-2 hover:text-primary" href="#">Peminjaman</a>
                            </div>
                        </details>
                    </div>

                    <div class="pt-2">
                        <details class="group">
                            <summary
                                class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 cursor-pointer list-none">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-slate-400">payments</span>
                                    <span class="sidebar-text">Keuangan</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                                <a class="block py-2 hover:text-primary" href="#">SPP</a>
                                <a class="block py-2 hover:text-primary" href="#">Gaji</a>
                            </div>
                        </details>
                    </div>

                    <div class="pt-4 mt-4 border-t border-white/10">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-slate-400">settings</span>
                            <span class="sidebar-text">Pengaturan</span>
                        </a>
                    </div>
                </nav>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0" id="main-wrapper">
            <header class="sticky top-0 z-40 bg-white border-b border-slate-200 px-6 py-3 flex items-center justify-between">
                <div class="flex items-center gap-4 flex-1">
                    <button class="text-slate-500 p-2 hover:bg-slate-100 rounded-lg transition-colors" id="sidebar-toggle">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <div class="max-w-md w-full relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input
                            class="w-full bg-slate-100 border-none rounded-lg pl-10 pr-4 py-2 focus:ring-2 focus:ring-primary/50 text-sm"
                            placeholder="Cari data, guru, atau siswa..." type="text" />
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="relative" id="notification-container">
                        <button class="relative p-2 text-slate-500 hover:bg-slate-100 rounded-full transition-colors"
                            id="notification-toggle">
                            <span class="material-symbols-outlined">notifications</span>
                            <span
                                class="absolute top-1.5 right-1.5 w-2 h-2 bg-primary rounded-full border-2 border-white"></span>
                        </button>

                        <div class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-slate-100 py-2 hidden z-50 overflow-hidden"
                            id="notification-dropdown">
                            <div class="px-4 py-2 border-b border-slate-100 flex items-center justify-between">
                                <h5 class="font-bold text-slate-900 text-sm">Notifikasi</h5>
                                <span class="text-[10px] bg-primary/10 text-primary px-2 py-0.5 rounded-full font-bold">4
                                    Baru</span>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a class="flex gap-3 px-4 py-3 hover:bg-slate-50 transition-colors" href="#">
                                    <div
                                        class="shrink-0 w-8 h-8 bg-red-50 text-red-600 rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-sm">report_problem</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-800 font-medium">Pengaduan baru dari Kantin</p>
                                        <p class="text-[10px] text-slate-500 mt-1">5 menit yang lalu</p>
                                    </div>
                                </a>
                                <a class="flex gap-3 px-4 py-3 hover:bg-slate-50 transition-colors border-t border-slate-50"
                                    href="#">
                                    <div
                                        class="shrink-0 w-8 h-8 bg-orange-50 text-primary rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-sm">school</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-800 font-medium">Sistem memvalidasi peserta PKL
                                        </p>
                                        <p class="text-[10px] text-slate-500 mt-1">2 jam yang lalu</p>
                                    </div>
                                </a>
                                <a class="flex gap-3 px-4 py-3 hover:bg-slate-50 transition-colors border-t border-slate-50"
                                    href="#">
                                    <div
                                        class="shrink-0 w-8 h-8 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-sm">payments</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-800 font-medium">Pembayaran SPP baru dicatat</p>
                                        <p class="text-[10px] text-slate-500 mt-1">4 jam yang lalu</p>
                                    </div>
                                </a>
                                <a class="flex gap-3 px-4 py-3 hover:bg-slate-50 transition-colors border-t border-slate-50"
                                    href="#">
                                    <div
                                        class="shrink-0 w-8 h-8 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-sm">edit_document</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-800 font-medium">Pembaruan data guru produktif</p>
                                        <p class="text-[10px] text-slate-500 mt-1">1 hari yang lalu</p>
                                    </div>
                                </a>
                            </div>
                            <div class="px-4 py-2 border-t border-slate-100 text-center">
                                <button class="text-[11px] text-primary font-bold hover:underline">Lihat Semua
                                    Notifikasi</button>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="flex items-center gap-3 p-1 rounded-lg hover:bg-slate-100 transition-colors">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-bold text-slate-900">Ahmad Fauzi, S.Kom.</p>
                                <p class="text-[10px] text-slate-500">Super Admin</p>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
                                <img alt="Avatar User" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuABrL4RrUp9NIm1Btnpkqf4FJmu4MH_wR78hUcjJKXe1sqjS_S5lDlqYNZb5YmL07OqiOk8amJlH17loR6hmil1PmsI7FzErmJFWmokXjTMul1bTyBXjn_FLyPKUyl6MLsLt4FOAsYV3CfRV08nQxIQagsBqguXtPcTn4f8teVMly0nmPd-qjFY2JPpd52FsYSqZwz5pfCsVJP-qjmRfvblpOBhBeBzQHzDULC4FYXn9fPTqXVVC_2f11Ei5xA203mYcrXbz8-D7oip" />
                            </div>
                        </button>
                        <div
                            class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-slate-100 py-1 hidden group-hover:block transition-all transform origin-top-right">
                            <a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50"
                                href="#">
                                <span class="material-symbols-outlined text-sm">person</span>
                                Profil Saya
                            </a>
                            <a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50"
                                href="#">
                                <span class="material-symbols-outlined text-sm">settings</span>
                                Pengaturan Akun
                            </a>
                            <hr class="my-1 border-slate-100" />
                            <a class="flex items-center gap-3 px-4 py-2 text-sm text-red-600 hover:bg-red-50"
                                href="#">
                                <span class="material-symbols-outlined text-sm">logout</span>
                                Keluar
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6 space-y-8 overflow-y-auto">
                <div class="flex items-end justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900">Dashboard Utama</h2>
                        <p class="text-slate-500">Selamat datang kembali di sistem manajemen SMKN 7 Pontianak.</p>
                    </div>
                    <div
                        class="text-sm text-slate-500 bg-white px-3 py-1.5 rounded-lg border border-slate-200 shadow-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-base">calendar_today</span>
                        Senin, 20 Mei 2024
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-lg">
                                <span class="material-symbols-outlined">group</span>
                            </div>
                            <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-0.5 rounded-full">+2.4%</span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 text-sm font-medium">Total Siswa</p>
                            <h3 class="text-2xl font-bold text-slate-900 mt-1">1,240</h3>
                        </div>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="p-3 bg-orange-50 text-primary rounded-lg">
                                <span class="material-symbols-outlined">person_pin</span>
                            </div>
                            <span class="text-xs font-bold text-slate-400 bg-slate-50 px-2 py-0.5 rounded-full">Stabil</span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 text-sm font-medium">Total Guru</p>
                            <h3 class="text-2xl font-bold text-slate-900 mt-1">86</h3>
                        </div>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="p-3 bg-purple-50 text-purple-600 rounded-lg">
                                <span class="material-symbols-outlined">campaign</span>
                            </div>
                            <span class="text-xs font-bold text-purple-600 bg-purple-50 px-2 py-0.5 rounded-full">Baru</span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 text-sm font-medium">Pengumuman</p>
                            <h3 class="text-2xl font-bold text-slate-900 mt-1">12</h3>
                        </div>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="p-3 bg-green-50 text-green-600 rounded-lg">
                                <span class="material-symbols-outlined">event_available</span>
                            </div>
                            <span class="text-xs font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded-full">-0.5%</span>
                        </div>
                        <div class="mt-4">
                            <p class="text-slate-500 text-sm font-medium">Kehadiran Hari Ini</p>
                            <h3 class="text-2xl font-bold text-slate-900 mt-1">98.2%</h3>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-6">
                            <h4 class="font-bold text-slate-900">Statistik Kehadiran Mingguan</h4>
                            <select class="text-xs border-slate-200 rounded-lg focus:ring-primary focus:border-primary">
                                <option>Mei 2024</option>
                                <option>April 2024</option>
                            </select>
                        </div>
                        <div class="h-64 flex items-end justify-between gap-4 px-2">
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg relative group h-48">
                                    <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-4/5"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 font-bold uppercase">Sen</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg relative group h-48">
                                    <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-5/6"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 font-bold uppercase">Sel</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg relative group h-48">
                                    <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-3/4"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 font-bold uppercase">Rab</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg relative group h-48">
                                    <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[95%]"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 font-bold uppercase">Kam</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg relative group h-48">
                                    <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-full"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 font-bold uppercase">Jum</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg relative group h-48">
                                    <div class="absolute bottom-0 w-full bg-slate-300 rounded-t-lg h-0"></div>
                                </div>
                                <span class="text-[10px] text-slate-500 font-bold uppercase">Sab</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col">
                        <div class="flex items-center justify-between mb-6">
                            <h4 class="font-bold text-slate-900">Aktivitas Terakhir</h4>
                            <button class="text-xs text-primary font-bold hover:underline">Lihat Semua</button>
                        </div>
                        <div class="flex-1 space-y-6 overflow-y-auto pr-2 sidebar-scroll">
                            <div class="flex gap-4">
                                <div
                                    class="shrink-0 w-8 h-8 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-sm">edit_document</span>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-800"><span class="font-bold">Admin</span> memperbarui
                                        data guru produktif.</p>
                                    <p class="text-xs text-slate-500 mt-1">10 menit yang lalu</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="shrink-0 w-8 h-8 bg-orange-50 text-primary rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-sm">school</span>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-800"><span class="font-bold">Sistem</span> telah
                                        memvalidasi 24 peserta PKL.</p>
                                    <p class="text-xs text-slate-500 mt-1">2 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="shrink-0 w-8 h-8 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-sm">payments</span>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-800"><span class="font-bold">Keuangan</span> mencatat
                                        12 pembayaran SPP baru.</p>
                                    <p class="text-xs text-slate-500 mt-1">4 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="shrink-0 w-8 h-8 bg-red-50 text-red-600 rounded-full flex items-center justify-center">
                                    <span class="material-symbols-outlined text-sm">warning</span>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-800"><span class="font-bold">Laporan</span> pengaduan
                                        baru diterima (Kantin).</p>
                                    <p class="text-xs text-slate-500 mt-1">5 jam yang lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer
                class="bg-white border-t border-slate-200 px-6 py-4 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-2">
                <p>© 2024 SMKN 7 Pontianak. Hak Cipta Dilindungi.</p>
                <div class="flex items-center gap-4">
                    <span>Versi Sistem v2.4.1</span>
                    <a class="hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
                    <a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                </div>
            </footer>
        </div>
    </div>
@endsection
