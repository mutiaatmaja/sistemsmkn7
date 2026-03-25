<header class="sticky top-0 z-40 bg-white border-b border-slate-200 px-6 py-3 flex items-center justify-between">
    <div class="flex items-center gap-4 flex-1">
        <button class="text-slate-500 p-2 hover:bg-slate-100 rounded-lg transition-colors" id="sidebar-toggle">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <div class="max-w-md w-full relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
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
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-primary rounded-full border-2 border-white"></span>
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
                <a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" href="#">
                    <span class="material-symbols-outlined text-sm">person</span>
                    Profil Saya
                </a>
                <a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" href="#">
                    <span class="material-symbols-outlined text-sm">settings</span>
                    Pengaturan Akun
                </a>
                <hr class="my-1 border-slate-100" />
                <a class="flex items-center gap-3 px-4 py-2 text-sm text-red-600 hover:bg-red-50" href="#">
                    <span class="material-symbols-outlined text-sm">logout</span>
                    Keluar
                </a>
            </div>
        </div>
    </div>
</header>
