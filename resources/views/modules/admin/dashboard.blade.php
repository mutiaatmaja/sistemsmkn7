@extends('layouts.modules.admin')

@section('title', 'SMKN 7 Pontianak - Dashboard Admin')

@section('admin_content')
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
                    <div class="shrink-0 w-8 h-8 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">edit_document</span>
                    </div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Admin</span> memperbarui data guru
                            produktif.</p>
                        <p class="text-xs text-slate-500 mt-1">10 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="shrink-0 w-8 h-8 bg-orange-50 text-primary rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">school</span>
                    </div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Sistem</span> telah memvalidasi 24 peserta
                            PKL.</p>
                        <p class="text-xs text-slate-500 mt-1">2 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="shrink-0 w-8 h-8 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">payments</span>
                    </div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Keuangan</span> mencatat 12 pembayaran SPP
                            baru.</p>
                        <p class="text-xs text-slate-500 mt-1">4 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="shrink-0 w-8 h-8 bg-red-50 text-red-600 rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">warning</span>
                    </div>
                    <div>
                        <p class="text-sm text-slate-800"><span class="font-bold">Laporan</span> pengaduan baru diterima
                            (Kantin).</p>
                        <p class="text-xs text-slate-500 mt-1">5 jam yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
