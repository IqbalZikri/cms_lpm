<?php

namespace App\Http\Controllers;

use App\Models\Spmi;
use Illuminate\Http\Request;

class SpmiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Spmi::first();
        // dd($data->pelaksanaan_ami);
        return view('spmi', compact('data'));
    }
}
