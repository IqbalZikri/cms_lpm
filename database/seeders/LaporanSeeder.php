<?php

namespace Database\Seeders;

use App\Models\Laporan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laporan::create([
            'deskripsi_monev' => 'Dokumen hasil monitoring dan evaluasi pelaksanaan standar mutu di seluruh unit kerja Universitas Cendekia Abditama, mencakup monev pembelajaran, Tridharma, dan kepuasan pemangku kepentingan.',
            'informasi_tambahan_monev' => 'Laporan Monev digunakan sebagai basis data sebelum pelaksanaan Audit Mutu Internal (AMI) dan sebagai bahan pertimbangan dalam Rapat Tinjauan Manajemen (RTM). Untuk akses dokumen tambahan, hubungi info@uca.ac.id',
            'deskripsi_ami' => 'Laporan hasil Audit Mutu Internal yang dilaksanakan secara berkala oleh auditor internal bersertifikat BNSP, mencakup temuan, rekomendasi, dan Permintaan Tindakan Koreksi (PTK).',
            'informasi_tambahan_ami' => 'aporan AMI memuat hasil temuan audit, status kesesuaian terhadap standar SPMI, serta Permintaan Tindakan Koreksi (PTK) yang wajib ditindaklanjuti oleh auditee dalam batas waktu yang telah ditetapkan.',
            'deskripsi_rtm' => 'Dokumentasi Rapat Tinjauan Manajemen yang diselenggarakan pimpinan UMI untuk mengevaluasi efektivitas SPMI secara menyeluruh berdasarkan hasil Monev dan AMI, serta menetapkan kebijakan mutu berikutnya.',
            'informasi_tambahan_rtm' => 'RTM merupakan forum evaluasi tertinggi dalam siklus SPMI. Hasil RTM menjadi dasar penetapan kebijakan mutu, alokasi sumber daya, dan arah pengembangan institusi untuk periode berikutnya.',
            'deskripsi_rtl' => 'Dokumen Rencana Tindak Lanjut yang disusun berdasarkan temuan AMI dan hasil RTM. RTL memuat langkah-langkah perbaikan konkret yang harus dilaksanakan oleh setiap unit kerja untuk menutup ketidaksesuaian yang ditemukan.',
            'informasi_tambahan_rtl' => 'Setiap unit kerja dan program studi wajib menyusun dan melaksanakan RTL dalam jangka waktu yang ditetapkan. Progres RTL dipantau oleh Divisi SPMI dan dilaporkan dalam RTM berikutnya.',
        ]);
    }
}
