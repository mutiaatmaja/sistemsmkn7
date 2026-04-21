@php
    $isDashboard = request()->routeIs('admin.dashboard');
    $isSettings = request()->routeIs('admin.settings', 'pengaturan.*');
    $isDepanOpen = request()->routeIs('depan.*');
    $isAkademisOpen = request()->routeIs('akademis.*');
    $isPengaduan = request()->routeIs('pengaduan.*');
    $isPklOpen = request()->routeIs('pkl.*');
    $isSarprasOpen = request()->routeIs('sarpras.*');
    $isTracerOpen = request()->routeIs('tracer-study.*');
    $isPerpustakaanOpen = request()->routeIs('perpustakaan.*');
    $isBpOpen = request()->routeIs('bp.*', 'bimbingan.*');
@endphp

<div class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden" id="sidebar-overlay"></div>
<aside
    class="fixed inset-y-0 left-0 z-50 w-72 overflow-hidden bg-secondary text-white transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0 lg:shrink-0 mobile-hidden"
    id="sidebar">
    <div class="flex flex-col h-full min-h-0">
        <div class="flex items-center gap-3 px-6 py-6 border-b border-white/10">
            <div class="bg-primary p-1.5 rounded-lg">
                <span class="material-symbols-outlined text-white text-2xl">school</span>
            </div>
            <div>
                <h1 class="font-bold text-lg leading-tight sidebar-header-text">SMKN 7</h1>
                <p class="text-xs text-slate-400 sidebar-header-text">SIM Pontianak</p>
            </div>
        </div>

        <nav class="flex-1 min-h-0 px-4 py-6 space-y-1 overflow-y-auto sidebar-scroll">
            <a wire:navigate
                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg @if ($isDashboard) active @endif"
                href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined sidebar-icon">dashboard</span>
                <span class="font-medium sidebar-text">Dashboard</span>
            </a>

            <div class="pt-4">
                <p
                    class="px-3 text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2 sidebar-section-label">
                    Halaman Depan</p>
                <details class="group sidebar-group @if ($isDepanOpen) open @endif"
                    @if ($isDepanOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">public</span>
                            <span class="sidebar-text">Depan</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Pengumuman</a>
                        <a class="sidebar-sublink" href="#">Profil Sekolah</a>
                        <a class="sidebar-sublink" href="#">Visi Misi</a>
                        <a class="sidebar-sublink" href="#">Jurusan</a>
                        <a class="sidebar-sublink" href="#">Prestasi</a>
                    </div>
                </details>
            </div>

            <div class="pt-2">
                <details class="group sidebar-group @if ($isAkademisOpen) open @endif"
                    @if ($isAkademisOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">history_edu</span>
                            <span class="sidebar-text">Akademis</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Data Jurusan</a>
                        <a class="sidebar-sublink" href="#">Data Kelas</a>
                        <a class="sidebar-sublink" href="#">Data Guru</a>
                        <a class="sidebar-sublink" href="#">Data TU</a>
                        <a class="sidebar-sublink" href="#">Data Siswa</a>
                        <a class="sidebar-sublink" href="#">OSIS</a>
                        <a class="sidebar-sublink" href="#">Kurikulum</a>
                        <a class="sidebar-sublink" href="#">Jadwal Pelajaran</a>
                    </div>
                </details>
            </div>

            <a wire:navigate
                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg @if ($isPengaduan) active @endif"
                href="{{ route('pengaduan.index') }}">
                <span class="material-symbols-outlined sidebar-icon">report_problem</span>
                <span class="sidebar-text">Pengaduan</span>
            </a>

            <div class="pt-2">
                <details class="group sidebar-group @if ($isPklOpen) open @endif"
                    @if ($isPklOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">work</span>
                            <span class="sidebar-text">PKL</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Data DUDI</a>
                        <a class="sidebar-sublink" href="#">Jadwal</a>
                        <a class="sidebar-sublink" href="#">Peserta</a>
                        <a class="sidebar-sublink" href="#">Monitoring</a>
                    </div>
                </details>
            </div>

            <div class="pt-2">
                <details class="group sidebar-group @if ($isSarprasOpen) open @endif"
                    @if ($isSarprasOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">inventory_2</span>
                            <span class="sidebar-text">Sarana &amp; Prasarana</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Inventaris</a>
                        <a class="sidebar-sublink" href="#">Peminjaman</a>
                    </div>
                </details>
            </div>

            <div class="pt-2">
                <details class="group sidebar-group @if ($isTracerOpen) open @endif"
                    @if ($isTracerOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">analytics</span>
                            <span class="sidebar-text">Tracer Study</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Ikhtisar</a>
                        <a class="sidebar-sublink" href="#">Tracer</a>
                        <a class="sidebar-sublink" href="#">Daftar Pertanyaan</a>
                    </div>
                </details>
            </div>

            <div class="pt-2">
                <details class="group sidebar-group @if ($isPerpustakaanOpen) open @endif"
                    @if ($isPerpustakaanOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">local_library</span>
                            <span class="sidebar-text">Perpustakaan</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Buku</a>
                        <a class="sidebar-sublink" href="#">Peminjaman</a>
                    </div>
                </details>
            </div>

            <div class="pt-2">
                <details class="group sidebar-group @if ($isBpOpen) open @endif"
                    @if ($isBpOpen) open @endif>
                    <summary
                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg cursor-pointer list-none">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined sidebar-icon">gavel</span>
                            <span class="sidebar-text">Bimbingan Siswa</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="pl-11 pr-3 py-1 space-y-1 text-sm text-slate-400">
                        <a class="sidebar-sublink" href="#">Undangan Konsultasi</a>
                        <a class="sidebar-sublink" href="#">Pendampingan Siswa</a>
                        <a class="sidebar-sublink" href="#">Tindak Lanjut (SP)</a>
                        <a class="sidebar-sublink" href="#">Catatan Pembinaan</a>
                        <a class="sidebar-sublink" href="#">Laporan Bimbingan</a>
                    </div>
                </details>
            </div>

            {{-- <div class="pt-2">
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
            </div> --}}

            <div class="pt-4 mt-4 border-t border-white/10">
                <a wire:navigate
                    class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg @if ($isSettings) active @endif"
                    href="{{ route('admin.settings') }}">
                    <span class="material-symbols-outlined sidebar-icon">settings</span>
                    <span class="sidebar-text">Pengaturan</span>
                </a>
            </div>
        </nav>
    </div>
</aside>
