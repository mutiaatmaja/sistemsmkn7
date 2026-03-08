<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                        "navy-custom": "#002147",
                        "gold-custom": "#D4AF37"
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <title>SMKN 7 Pontianak - School Information System</title>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <!-- Navigation Bar -->
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-6 md:px-20 py-4 bg-white dark:bg-background-dark sticky top-0 z-50">
                <div class="flex items-center gap-4 text-navy-custom dark:text-gold-custom">
                    <div class="size-8 flex items-center justify-center bg-navy-custom text-white rounded-lg">
                        <span class="material-symbols-outlined text-xl">school</span>
                    </div>
                    <h2 class="text-navy-custom dark:text-slate-100 text-xl font-bold leading-tight tracking-tight">SMKN
                        7 Pontianak</h2>
                </div>
                <div class="hidden md:flex flex-1 justify-end gap-10">
                    <nav class="flex items-center gap-8">
                        <a class="text-slate-700 dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="#">Beranda</a>
                        <a class="text-slate-700 dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="#">Profil</a>
                        <a class="text-slate-700 dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="#">Jurusan</a>
                        <a class="text-slate-700 dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                            href="#">Kontak</a>
                    </nav>
                    <button
                        class="flex min-w-[100px] cursor-pointer items-center justify-center rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all">
                        <span>Masuk</span>
                    </button>
                </div>
                <!-- Mobile Menu Icon (Visual Only) -->
                <div class="md:hidden">
                    <span class="material-symbols-outlined text-navy-custom dark:text-slate-100">menu</span>
                </div>
            </header>
            <main class="flex-1">
                <!-- Hero Section -->
                <div class="px-4 md:px-20 py-8">
                    <div class="relative overflow-hidden rounded-xl bg-navy-custom">
                        <div class="flex min-h-[520px] flex-col gap-6 bg-cover bg-center bg-no-repeat items-center justify-center p-8 text-center"
                            data-alt="Modern high school building campus architecture view"
                            style='background-image: linear-gradient(rgba(0, 33, 71, 0.75) 0%, rgba(0, 33, 71, 0.9) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRM8j-65ivXLtZShdYcqbJuazw9-roEfd5KWNJWDdA522Fl1L5gi9vQ63hMPWloBqgp6IewKXL3XyR3sjqU9fvP4jmTBBopvevTjlS8ZPm8i9iQAngkY7ctCrRcX9j1Hk1M85IhVLIRat69k6oSzdffV2szeG7IjTPVKSgxPOmwvu-GIkavgz8CAKkXXBJvoHbaqyh6K-Aa8AIxSckqUTRgWJSY1TdyReUBJD1KVAsRHeAnKFbLibky9VUB87_OYnyyknD1hyZgd-z");'>
                            <div class="max-w-3xl flex flex-col gap-4">
                                <span class="text-gold-custom font-bold tracking-widest uppercase text-sm">Selamat
                                    Datang di Portal Resmi</span>
                                <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight">
                                    Memberdayakan Profesional Masa Depan di SMKN 7 Pontianak</h1>
                                <p class="text-slate-200 text-lg md:text-xl font-normal leading-relaxed">Pusat kejuruan
                                    terkemuka yang didedikasikan untuk keunggulan, inovasi, dan pengembangan
                                    keterampilan profesional di Pontianak.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4 mt-4">
                                <button
                                    class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-base font-bold shadow-xl hover:scale-105 transition-transform">
                                    <span>Login ke Dasbor</span>
                                </button>
                                <button
                                    class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-white/10 text-white border border-white/20 text-base font-bold backdrop-blur-sm hover:bg-white/20 transition-all">
                                    <span>Jelajahi Jurusan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Section -->
                <div class="px-4 md:px-20 -mt-16 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div
                            class="flex flex-col gap-2 rounded-xl p-8 bg-white dark:bg-slate-800 shadow-xl border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all duration-300">
                            <div class="flex items-center gap-3 hover:shadow-2xl transition-all duration-300">
                                <span class="material-symbols-outlined text-primary text-3xl">groups</span>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
                                    Total Siswa</p>
                            </div>
                            <div class="flex items-end gap-2 hover:shadow-2xl transition-all duration-300">
                                <p class="text-navy-custom dark:text-white text-4xl font-black">1,200+</p>
                                <p class="text-green-600 text-sm font-bold mb-1">Tersertifikasi</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col gap-2 rounded-xl p-8 bg-white dark:bg-slate-800 shadow-xl border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all duration-300">
                            <div class="flex items-center gap-3 hover:shadow-2xl transition-all duration-300">
                                <span class="material-symbols-outlined text-primary text-3xl">person_book</span>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
                                    Guru Ahli</p>
                            </div>
                            <div class="flex items-end gap-2 hover:shadow-2xl transition-all duration-300">
                                <p class="text-navy-custom dark:text-white text-4xl font-black">85</p>
                                <p class="text-green-600 text-sm font-bold mb-1">Tersertifikasi</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col gap-2 rounded-xl p-8 bg-white dark:bg-slate-800 shadow-xl border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all duration-300">
                            <div class="flex items-center gap-3 hover:shadow-2xl transition-all duration-300">
                                <span class="material-symbols-outlined text-primary text-3xl">account_tree</span>
                                <p
                                    class="text-slate-500 dark:text-slate-400 text-sm font-bold uppercase tracking-wider">
                                    Jurusan Kejuruan</p>
                            </div>
                            <div class="flex items-end gap-2 hover:shadow-2xl transition-all duration-300">
                                <p class="text-navy-custom dark:text-white text-4xl font-black">7</p>
                                <p class="text-slate-400 text-sm font-bold mb-1">Spesialisasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mission Section -->
                <div class="flex flex-col gap-12 px-6 md:px-20 py-20 bg-background-light dark:bg-background-dark/50">
                    <div class="flex flex-col md:flex-row items-center gap-12">
                        <div class="flex flex-col gap-6 flex-1">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary w-fit">
                                <span class="material-symbols-outlined text-sm">verified</span>
                                <span class="text-xs font-bold uppercase tracking-widest">Landasan Kami</span>
                            </div>
                            <h2
                                class="text-navy-custom dark:text-slate-100 text-4xl md:text-5xl font-black leading-tight">
                                Berkomitmen pada Keunggulan Vokasi</h2>
                            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">Misi kami adalah
                                memberikan pendidikan kejuruan berkualitas tinggi yang mempersiapkan siswa untuk tenaga
                                kerja global melalui pelatihan praktis yang ketat, pembangunan karakter, dan kolaborasi
                                industri.</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-start gap-3">
                                    <div
                                        class="mt-1 flex items-center justify-center size-5 bg-gold-custom rounded-full">
                                        <span class="material-symbols-outlined text-white text-[12px]">check</span>
                                    </div>
                                    <p class="text-slate-700 dark:text-slate-300 font-medium">Laboratorium standar
                                        industri</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="mt-1 flex items-center justify-center size-5 bg-gold-custom rounded-full">
                                        <span class="material-symbols-outlined text-white text-[12px]">check</span>
                                    </div>
                                    <p class="text-slate-700 dark:text-slate-300 font-medium">Dukungan penempatan kerja
                                    </p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="mt-1 flex items-center justify-center size-5 bg-gold-custom rounded-full">
                                        <span class="material-symbols-outlined text-white text-[12px]">check</span>
                                    </div>
                                    <p class="text-slate-700 dark:text-slate-300 font-medium">Pengembangan karakter</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div
                                        class="mt-1 flex items-center justify-center size-5 bg-gold-custom rounded-full">
                                        <span class="material-symbols-outlined text-white text-[12px]">check</span>
                                    </div>
                                    <p class="text-slate-700 dark:text-slate-300 font-medium">Kurikulum digital modern
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 w-full relative">
                            <div class="absolute -top-4 -left-4 size-32 bg-gold-custom/20 rounded-xl -z-10"></div>
                            <div class="absolute -bottom-4 -right-4 size-32 bg-navy-custom/20 rounded-xl -z-10"></div>
                            <img alt="Students learning in a modern workshop"
                                class="rounded-2xl shadow-2xl w-full h-[400px] object-cover"
                                data-alt="Students engaged in technical classroom training session"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAo5E8cu_TRWEbVl11mL6P1VrTVmf-m2j01g34U35jBkNxC7zA47ezA8l_aZ3UdOyWof2KTJPiYSr2kSbId1sNSEsajPtgeyAq7FFArB3EiPkU53iIOd5mgpYTFFgvuMVt020FaUrbSbTsD8-tVjeGBnDhzBw3X4npSJyqEfvit2J8R8x-uQ9y-OrCNb6ql9c8g-MbBtNXwVq5kMg9CcGSbydnTt2QkU4u8G6gUKOi9eoG1n07WHt1RPd_YFjWDy_K1xLY3_PUUWKW" />
                        </div>
                    </div>
                    <!-- Core Values Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 p-8 hover:border-primary transition-colors group hover:-translate-y-1 transition-transform duration-300">
                            <div
                                class="size-14 flex items-center justify-center rounded-lg bg-navy-custom text-gold-custom group-hover:bg-primary group-hover:text-white transition-colors hover:-translate-y-1 transition-transform duration-300">
                                <span class="material-symbols-outlined text-3xl">verified_user</span>
                            </div>
                            <h3 class="text-navy-custom dark:text-white text-xl font-bold">Integritas</h3>
                            <p class="text-slate-500 dark:text-slate-400 leading-relaxed">Membangun landasan etika yang
                                kuat dan karakter profesional pada setiap lulusan.</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 p-8 hover:border-primary transition-colors group hover:-translate-y-1 transition-transform duration-300">
                            <div
                                class="size-14 flex items-center justify-center rounded-lg bg-navy-custom text-gold-custom group-hover:bg-primary group-hover:text-white transition-colors hover:-translate-y-1 transition-transform duration-300">
                                <span class="material-symbols-outlined text-3xl">psychology</span>
                            </div>
                            <h3 class="text-navy-custom dark:text-white text-xl font-bold">Penguasaan Keahlian</h3>
                            <p class="text-slate-500 dark:text-slate-400 leading-relaxed">Pelatihan praktis intensif
                                dengan peralatan modern dan teknologi industri terkini.</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 p-8 hover:border-primary transition-colors group hover:-translate-y-1 transition-transform duration-300">
                            <div
                                class="size-14 flex items-center justify-center rounded-lg bg-navy-custom text-gold-custom group-hover:bg-primary group-hover:text-white transition-colors hover:-translate-y-1 transition-transform duration-300">
                                <span class="material-symbols-outlined text-3xl">tips_and_updates</span>
                            </div>
                            <h3 class="text-navy-custom dark:text-white text-xl font-bold">Inovasi</h3>
                            <p class="text-slate-500 dark:text-slate-400 leading-relaxed">Mendorong pemecahan masalah
                                kreatif dan pola pikir kewirausahaan untuk masa depan.</p>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer -->
            <footer class="bg-navy-custom text-white py-16 px-6 md:px-20">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                    <div class="col-span-1 md:col-span-2 flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="size-10 flex items-center justify-center bg-gold-custom text-navy-custom rounded-lg">
                                <span class="material-symbols-outlined text-2xl font-bold">school</span>
                            </div>
                            <h2 class="text-2xl font-bold tracking-tight">SMKN 7 Pontianak</h2>
                        </div>
                        <p class="text-slate-300 max-w-sm mt-4">Merintis keunggulan dalam pendidikan kejuruan sejak
                            awal. Membentuk generasi penerus bakat profesional di Pontianak.</p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <h4 class="text-gold-custom font-bold uppercase tracking-widest text-sm">Tautan Cepat</h4>
                        <nav class="flex flex-col gap-3">
                            <a class="text-slate-300 hover:text-white transition-colors" href="#">Profil
                                Sekolah</a>
                            <a class="text-slate-300 hover:text-white transition-colors" href="#">Kalender
                                Akademik</a>
                            <a class="text-slate-300 hover:text-white transition-colors" href="#">Galeri
                                Siswa</a>
                            <a class="text-slate-300 hover:text-white transition-colors" href="#">Berita
                                Terkini</a>
                        </nav>
                    </div>
                    <div class="flex flex-col gap-6">
                        <h4 class="text-gold-custom font-bold uppercase tracking-widest text-sm">Tautan Cepat</h4>
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                                <span>Jl. Tanjung Raya II, Pontianak</span>
                            </div>
                            <div class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary">mail</span>
                                <span>info@smkn7pontianak.sch.id</span>
                            </div>
                            <div class="flex items-center gap-3 text-slate-300">
                                <span class="material-symbols-outlined text-primary">call</span>
                                <span>+62 (561) 123-4567</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-400 text-sm">
                    <p>© 2024 SMKN 7 Pontianak. Hak cipta dilindungi undang-undang.</p>
                    <div class="flex gap-8">
                        <a class="hover:text-white" href="#">Kebijakan Privasi</a>
                        <a class="hover:text-white" href="#">Ketentuan Layanan</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
