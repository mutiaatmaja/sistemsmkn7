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
                <p
                    class="px-3 text-[10px] font-bold uppercase tracking-wider text-slate-500 mb-2 sidebar-section-label">
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

            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-white/5 transition-colors" href="#">
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
