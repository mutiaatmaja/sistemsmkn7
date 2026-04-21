<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'group' => 'general',
                'key' => 'app_name',
                'label' => 'Nama Aplikasi',
                'value' => 'Sistem SMKN 7',
                'type' => 'text',
                'is_public' => false,
            ],
            [
                'group' => 'general',
                'key' => 'app_timezone',
                'label' => 'Zona Waktu',
                'value' => 'Asia/Jakarta',
                'type' => 'text',
                'is_public' => false,
            ],
            [
                'group' => 'school',
                'key' => 'school_name',
                'label' => 'Nama Sekolah',
                'value' => 'SMKN 7 Pontianak',
                'type' => 'text',
                'is_public' => true,
            ],
            [
                'group' => 'school',
                'key' => 'school_npsn',
                'label' => 'NPSN',
                'value' => '00000000',
                'type' => 'text',
                'is_public' => true,
            ],
            [
                'group' => 'contact',
                'key' => 'school_email',
                'label' => 'Email Sekolah',
                'value' => 'admin@smkn7-pontianak.test',
                'type' => 'email',
                'is_public' => true,
            ],
            [
                'group' => 'contact',
                'key' => 'school_phone',
                'label' => 'Telepon Sekolah',
                'value' => '-',
                'type' => 'text',
                'is_public' => true,
            ],
            [
                'group' => 'contact',
                'key' => 'school_address',
                'label' => 'Alamat Sekolah',
                'value' => 'Pontianak, Kalimantan Barat',
                'type' => 'textarea',
                'is_public' => true,
            ],
            [
                'group' => 'academic',
                'key' => 'academic_year',
                'label' => 'Tahun Ajaran Aktif',
                'value' => '2025/2026',
                'type' => 'text',
                'is_public' => false,
            ],
            [
                'group' => 'homepage',
                'key' => 'homepage_title',
                'label' => 'Judul Halaman Depan',
                'value' => 'SMKN 7 Pontianak',
                'type' => 'text',
                'is_public' => true,
            ],
            [
                'group' => 'homepage',
                'key' => 'homepage_description',
                'label' => 'Deskripsi Halaman Depan',
                'value' => 'Sistem informasi manajemen untuk mendukung aktivitas sekolah secara terintegrasi.',
                'type' => 'textarea',
                'is_public' => true,
            ],
        ];

        foreach ($settings as $setting) {
            Setting::query()->updateOrCreate(
                ['key' => $setting['key']],
                $setting,
            );
        }
    }
}
