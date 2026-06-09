<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\SiteSettings;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data = SiteSettings::pluck('setting_value', 'setting_key')->toArray();
        $kegiatanTerbaru = Kegiatan::latest()->take(1)->first();
        $kegiatanLama = Kegiatan::latest()->take(5)->where('id', '!=', $kegiatanTerbaru)->get();
        $data['status_akreditasi_program_studi'] = json_decode($data['status_akreditasi_program_studi'], true);
        $data['layanan_spmi'] = json_decode($data['layanan_spmi'], true);
        $data['mitra_akreditasi'] = json_decode($data['mitra_akreditasi'], true);
        return view('beranda', compact('data', 'kegiatanTerbaru', 'kegiatanLama'));
    }
}
