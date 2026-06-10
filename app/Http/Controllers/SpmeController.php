<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use App\Models\Spme;
use Illuminate\Http\Request;

class SpmeController extends Controller
{
    public function index()
    {
        $datas = Spme::get();
        $prodi = SiteSettings::where('setting_key', 'total_program_studi')->value('setting_value');
        return view('spme', compact('datas', 'prodi'));
    }
}
