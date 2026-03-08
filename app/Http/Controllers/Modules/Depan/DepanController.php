<?php

namespace App\Http\Controllers\Modules\Depan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class DepanController extends Controller
{
    public function index(): View
    {
        $page = $this->buildPageData();

        return view('modules.depan.index', compact('page'));
    }

    public function detail(string $section, string $slug): View
    {
        $page = $this->buildPageData();
        $sectionMap = [
            'prestasi' => $page['prestasi'],
            'informasi' => $page['informasi'],
            'sarpras' => $page['sarpras'],
        ];

        abort_unless(isset($sectionMap[$section]), 404);

        $item = collect($sectionMap[$section]['items'])->firstWhere('slug', $slug);
        abort_unless($item, 404);

        $detail = [
            'section' => $section,
            'sectionTitle' => $sectionMap[$section]['title'],
            'title' => $item['title'],
            'thumbnail' => $item['thumbnail'],
            'summary' => $item['summary'],
            'content' => $item['content'],
            'backUrl' => route('depan.index').'#'.$section,
        ];

        return view('modules.depan.detail', compact('page', 'detail'));
    }

    public function section(Request $request, string $section): View
    {
        $page = $this->buildPageData();
        $sectionMap = [
            'prestasi' => $page['prestasi'],
            'informasi' => $page['informasi'],
            'sarpras' => $page['sarpras'],
        ];

        abort_unless(isset($sectionMap[$section]), 404);

        $sectionData = $sectionMap[$section];

        $items = collect($sectionData['items']);
        $perPage = 6;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        $paginatedItems = new LengthAwarePaginator(
            $items->forPage($currentPage, $perPage)->values(),
            $items->count(),
            $perPage,
            $currentPage,
            [
                'path' => $request->url(),
                'query' => $request->query(),
            ],
        );

        return view('modules.depan.list', compact('page', 'section', 'sectionData', 'paginatedItems'));
    }

    private function buildPageData(): array
    {
        $page = [
            'meta' => [
                'title' => 'SMKN 7 Pontianak - School Information System',
                'description' => 'Portal resmi SMKN 7 Pontianak untuk informasi sekolah dan akses aplikasi layanan.',
            ],
            'brand' => [
                'name' => 'SMKN 7 Pontianak',
                'tagline' => 'Portal Resmi Sekolah',
            ],
            'navigation' => [
                ['label' => 'Beranda', 'url' => '#beranda'],
                ['label' => 'Profil', 'url' => '#'],
                ['label' => 'Jurusan', 'url' => '#'],
                ['label' => 'Prestasi', 'url' => '#prestasi'],
                ['label' => 'Pengumuman/Informasi', 'url' => '#informasi'],
                ['label' => 'Sarana Prasarana', 'url' => '#sarpras'],
                ['label' => 'Kontak', 'url' => '#'],
            ],
            'hero' => [
                'eyebrow' => 'Selamat Datang di Portal Resmi',
                'title' => 'Memberdayakan Profesional Masa Depan di SMKN 7 Pontianak',
                'description' => 'Pusat kejuruan terkemuka yang didedikasikan untuk keunggulan, inovasi, dan pengembangan keterampilan profesional di Pontianak.',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCRM8j-65ivXLtZShdYcqbJuazw9-roEfd5KWNJWDdA522Fl1L5gi9vQ63hMPWloBqgp6IewKXL3XyR3sjqU9fvP4jmTBBopvevTjlS8ZPm8i9iQAngkY7ctCrRcX9j1Hk1M85IhVLIRat69k6oSzdffV2szeG7IjTPVKSgxPOmwvu-GIkavgz8CAKkXXBJvoHbaqyh6K-Aa8AIxSckqUTRgWJSY1TdyReUBJD1KVAsRHeAnKFbLibky9VUB87_OYnyyknD1hyZgd-z',
                'primaryCta' => ['label' => 'Login ke Dasbor', 'url' => route('admin.dashboard')],
                'secondaryCta' => ['label' => 'Jelajahi Jurusan', 'url' => '#'],
            ],
            'stats' => [
                ['label' => 'Total Siswa', 'value' => '1,200+', 'note' => 'Aktif', 'icon' => 'groups'],
                ['label' => 'Guru Ahli', 'value' => '85', 'note' => 'Tersertifikasi', 'icon' => 'person_book'],
                ['label' => 'Jurusan', 'value' => '7', 'note' => 'Spesialisasi', 'icon' => 'account_tree'],
                ['label' => 'Prestasi', 'value' => '42+', 'note' => 'Tingkat Kota-Internasional', 'icon' => 'military_tech'],
                ['label' => 'DUDI', 'value' => '120+', 'note' => 'Mitra Industri', 'icon' => 'apartment'],
            ],
            'mission' => [
                'badge' => 'Landasan Kami',
                'title' => 'Berkomitmen pada Keunggulan Vokasi',
                'description' => 'Misi kami adalah memberikan pendidikan kejuruan berkualitas tinggi yang mempersiapkan siswa untuk tenaga kerja global melalui pelatihan praktis, pembangunan karakter, dan kolaborasi industri.',
                'points' => [
                    'Laboratorium standar industri',
                    'Dukungan penempatan kerja',
                    'Pengembangan karakter',
                    'Kurikulum digital modern',
                ],
            ],
            'values' => [
                [
                    'title' => 'Integritas',
                    'description' => 'Membangun landasan etika yang kuat dan karakter profesional pada setiap lulusan.',
                    'icon' => 'verified_user',
                ],
                [
                    'title' => 'Penguasaan Keahlian',
                    'description' => 'Pelatihan praktis intensif dengan peralatan modern dan teknologi industri terkini.',
                    'icon' => 'psychology',
                ],
                [
                    'title' => 'Inovasi',
                    'description' => 'Mendorong pemecahan masalah kreatif dan pola pikir kewirausahaan untuk masa depan.',
                    'icon' => 'tips_and_updates',
                ],
            ],
            'prestasi' => [
                'title' => 'Prestasi Sekolah',
                'items' => [
                    [
                        'slug' => 'juara-1-lks-tingkat-provinsi-2026',
                        'thumbnail' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Juara 1 LKS Tingkat Provinsi 2026',
                        'summary' => 'Tim siswa SMKN 7 Pontianak berhasil meraih posisi tertinggi pada ajang LKS tingkat provinsi.',
                        'content' => 'Prestasi ini diraih melalui proses seleksi ketat, pembinaan intensif, dan kolaborasi antara guru pembimbing serta mitra industri. Capaian ini memperkuat komitmen sekolah dalam pendidikan vokasi unggul.',
                    ],
                    [
                        'slug' => 'top-10-sekolah-vokasi-inovatif-nasional',
                        'thumbnail' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Top 10 Sekolah Vokasi Inovatif Nasional',
                        'summary' => 'SMKN 7 Pontianak masuk dalam daftar sekolah vokasi inovatif tingkat nasional tahun ini.',
                        'content' => 'Penilaian didasarkan pada inovasi pembelajaran, digitalisasi layanan sekolah, serta keberhasilan program kolaborasi industri. Pengakuan ini menjadi motivasi untuk terus meningkatkan kualitas layanan pendidikan.',
                    ],
                    [
                        'slug' => 'tim-robotik-raih-medali-emas-regional',
                        'thumbnail' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Tim Robotik Raih Medali Emas Regional',
                        'summary' => 'Tim robotik sekolah memenangkan medali emas pada kompetisi regional kategori inovasi teknologi.',
                        'content' => 'Keberhasilan ini menunjukkan peningkatan kompetensi siswa dalam bidang STEM dan rekayasa sistem. Sekolah akan memperluas program pembinaan robotik agar lebih banyak siswa dapat berprestasi.',
                    ],
                ],
            ],
            'informasi' => [
                'title' => 'Pengumuman & Informasi',
                'items' => [
                    [
                        'slug' => 'jadwal-uts-genap-2026',
                        'thumbnail' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Jadwal Ujian Tengah Semester Genap 2026',
                        'summary' => 'Jadwal UTS semester genap telah diterbitkan untuk seluruh tingkat dan jurusan.',
                        'content' => 'Siswa diharapkan memeriksa jadwal sesuai kelas masing-masing melalui wali kelas atau portal akademik. Pastikan mengikuti ketentuan pelaksanaan ujian yang berlaku.',
                    ],
                    [
                        'slug' => 'pendaftaran-pkl-gelombang-2',
                        'thumbnail' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Pembukaan Pendaftaran PKL Gelombang 2',
                        'summary' => 'Pendaftaran program PKL gelombang kedua resmi dibuka untuk peserta yang memenuhi syarat.',
                        'content' => 'Calon peserta PKL diminta melengkapi berkas administrasi dan mengikuti arahan panitia. Penempatan DUDI akan menyesuaikan kompetensi keahlian siswa.',
                    ],
                    [
                        'slug' => 'info-beasiswa-siswa-berprestasi',
                        'thumbnail' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Info Beasiswa untuk Siswa Berprestasi',
                        'summary' => 'Tersedia program beasiswa untuk siswa berprestasi akademik maupun non-akademik.',
                        'content' => 'Program ini ditujukan untuk mendorong prestasi dan pemerataan akses pendidikan. Siswa dapat berkonsultasi dengan bagian kesiswaan terkait persyaratan dan tahapan seleksi.',
                    ],
                ],
            ],
            'sarpras' => [
                'title' => 'Sarana Prasarana',
                'items' => [
                    [
                        'slug' => 'perpustakaan-digital-fisik',
                        'thumbnail' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Perpustakaan Digital & Fisik',
                        'summary' => 'Fasilitas perpustakaan menyediakan koleksi buku fisik dan akses sumber belajar digital.',
                        'content' => 'Perpustakaan dirancang untuk mendukung budaya literasi dan pembelajaran mandiri. Siswa dapat memanfaatkan ruang baca, katalog digital, dan layanan peminjaman terintegrasi.',
                    ],
                    [
                        'slug' => 'laboratorium-praktik-berstandar-industri',
                        'thumbnail' => 'https://images.unsplash.com/photo-1581091215367-59ab6dcef8e8?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Laboratorium Praktik Berstandar Industri',
                        'summary' => 'Laboratorium praktik dilengkapi perangkat sesuai kebutuhan kompetensi keahlian.',
                        'content' => 'Penguatan fasilitas laboratorium dilakukan secara bertahap melalui kerja sama DUDI. Tujuannya agar siswa terbiasa dengan standar kerja industri sejak di bangku sekolah.',
                    ],
                    [
                        'slug' => 'ruang-kelas-interaktif-smart-display',
                        'thumbnail' => 'https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=1200&q=80',
                        'title' => 'Ruang Kelas Interaktif & Smart Display',
                        'summary' => 'Ruang kelas modern dengan dukungan smart display untuk pembelajaran interaktif.',
                        'content' => 'Penerapan media pembelajaran digital membantu proses belajar lebih kolaboratif dan adaptif. Guru dapat menyajikan materi secara visual dengan interaksi lebih baik bersama siswa.',
                    ],
                ],
            ],
            'footer' => [
                'copyright' => '© '.date('Y').' SMKN 7 Pontianak. Semua hak dilindungi.',
            ],
        ];

        foreach (['prestasi', 'informasi', 'sarpras'] as $section) {
            $page[$section]['listUrl'] = route('depan.section', ['section' => $section]);

            foreach ($page[$section]['items'] as $index => $item) {
                $page[$section]['items'][$index]['url'] = route('depan.detail', [
                    'section' => $section,
                    'slug' => $item['slug'],
                ]);
            }
        }

        return $page;
    }
}
