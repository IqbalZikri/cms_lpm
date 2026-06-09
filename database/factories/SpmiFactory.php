<?php

namespace Database\Factories;

use App\Models\Spmi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Spmi>
 */
class SpmiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Spmi::class;

    public function definition(): array
    {
        return [
            'tentang_spmi' => '<p>Sistem Penjaminan Mutu Internal (SPMI) adalah kegiatan sistemik dan terencana yang dilaksanakan secara otonom oleh Universitas Cendekia Abditama untuk memastikan mutu penyelenggaraan pendidikan tinggi di setiap unit kerja dan program studi, berlandaskan regulasi nasional dan nilai-nilai keislaman. </p>',
            'deskripsi_monev' => '<p>Monitoring dan Evaluasi (Monev) adalah proses pemantauan rutin dan pengukuran kemajuan atas pelaksanaan standar mutu di lingkungan Universitas Cendekia Abditama. Kegiatan ini dilakukan untuk mendeteksi sedini mungkin jika terjadi penyimpangan dari standar yang telah ditetapkan (Standar Pendidikan, Penelitian, dan Pengabdian kepada Masyarakat). </p>',
            // 'ruang_lingkup_monev' => [
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            //     [
            //         'nama_ruang_lingkup' => fake()->sentence(3),
            //         'deskripsi_ruang_lingkup' => '<p>' . fake()->paragraph() . '</p>',
            //     ],
            // ],
            'deskripsi_ami' => '<p>Audit Mutu Internal (AMI) adalah pengujian sistematik dan independen untuk memastikan apakah kegiatan dan hasil kegiatan di unit-unit kerja telah sesuai dengan standar SPMI UCA yang ditetapkan. AMI bukan untuk mencari kesalahan personal, melainkan untuk menemukan <strong style="color:var(--primary-light);">ruang perbaikan (room for improvement)</strong> sistem secara menyeluruh.</p>',
        ];
    }
}
