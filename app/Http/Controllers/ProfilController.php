<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use App\Models\StrukturOrganisasi;
use App\Models\Tentang;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentang(){
        $data = Tentang::first();
        $totalProgramStudi = SiteSettings::where('setting_key', 'total_program_studi')->value('setting_value');
        return view('profil.tentang', compact('data', 'totalProgramStudi'));
    }

    public function visiMisi(){
        $data = VisiMisi::first();
        $misi = $data->misi ?? null;
        return view('profil.visi-misi', compact('data'));
    }

    public function strukturOrganisasi(){
        $data = StrukturOrganisasi::first();
        $periode = SiteSettings::where('setting_key', 'periode')->value('setting_value');
        $personil = SiteSettings::where('setting_key', 'total_personil_lpm')->value('setting_value');
        return view('profil.struktur-organisasi', compact('data', 'periode', 'personil'));
    }
}
