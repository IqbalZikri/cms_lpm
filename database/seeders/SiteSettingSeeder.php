<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'setting_key' => 'site_name',
                'setting_value' => 'LPM - Lembaga Pemnjamin Mutu'
            ],
            [
                'setting_key' => 'logo_url',
                'setting_value' => null
            ],
            [
                'setting_key' => 'site_description',
                'setting_value' => 'LPM-UCA merupakan lembaga yang bertanggung jawab terhadap pelaksanaan dan pengembangan Sistem Penjaminan Mutu Internal (SPMI) di lingkungan Universitas Cendekia Abditama, berkomitmen untuk terus meningkatkan kualitas pendidikan.'
            ],
            [
                'setting_key' => 'total_personil_lpm',
                'setting_value' => null
            ],
            [
                'setting_key' => 'total_program_studi',
                'setting_value' => null
            ],
            [
                'setting_key' => 'akreditasi_unggul',
                'setting_value' => null
            ],
            [
                'setting_key' => 'akreditasi_baik_sekali',
                'setting_value' => null
            ],
            [
                'setting_key' => 'akreditasi_baik',
                'setting_value' => null
            ],
            [
                'setting_key' => 'layanan_spmi',
                'setting_value' => null
            ],
            [
                'setting_key' => 'status_akreditasi_program_studi',
                'setting_value' => null
            ],
            [
                'setting_key' => 'mitra_akreditasi',
                'setting_value' => null
            ],
            [
                'setting_key' => 'youtube_url',
                'setting_value' => null
            ],
            [
                'setting_key' => 'twitter_url',
                'setting_value' => null
            ],
            [
                'setting_key' => 'facebook_url',
                'setting_value' => null
            ],
            [
                'setting_key' => 'instagram_url',
                'setting_value' => null
            ],
            [
                'setting_key' => 'tiktok_url',
                'setting_value' => null
            ],
            [
                'setting_key' => 'alamat',
                'setting_value' => null
            ],
            [
                'setting_key' => 'email',
                'setting_value' => null
            ],
            [
                'setting_key' => 'jam_operasional',
                'setting_value' => null
            ],
            [
                'setting_key' => 'periode',
                'setting_value' => null
            ],
        ];

        foreach ($settings as $setting) {
            SiteSettings::create([
                'setting_key' => $setting['setting_key'],
                'setting_value' => $setting['setting_value'],
            ]);
        }
    }
}
