<?php

namespace Database\Seeders;

use App\Models\Spmi;
use App\Models\Tentang;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);

        Tentang::create([
            'page_explanation' => '<p style="font-size:15px;line-height:1.8;color:var(--neutral-600);margin-bottom:14px;">
                Lembaga Penjaminan Mutu (LPM) Universitas Cendekia Abditama merupakan unsur pelaksana akademik yang bertanggung jawab langsung kepada Rektor dalam bidang penjaminan mutu pendidikan tinggi secara menyeluruh.
            </p>
            <p style="font-size:15px;line-height:1.8;color:var(--neutral-600);margin-bottom:14px;">
                LPM bertugas merencanakan, melaksanakan, mengendalikan, dan mengembangkan Sistem Penjaminan Mutu Internal (SPMI) di seluruh unit kerja dan program studi.
            </p>
            <p style="font-size:15px;line-height:1.8;color:var(--neutral-600);margin-bottom:28px;">
                Dengan komitmen penuh terhadap peningkatan kualitas yang berkelanjutan.
            </p>'
        ]);

        Spmi::factory()->create();

        $this->call([
            SiteSettingSeeder::class
        ]);
    }
}
