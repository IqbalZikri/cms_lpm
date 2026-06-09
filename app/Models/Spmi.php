<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spmi extends Model
{
    use HasFactory;
    
    protected $table = 'spmi';

    protected $fillable = [
        'tentang_spmi',
        'deskripsi_monev',
        'ruang_lingkup_monev',
        'output_monev',
        'deskripsi_ami',
        'tujuan_ami',
        'pelaksanaan_ami',
        'dokumen_spmi'
    ];

    protected $casts = [
        'ruang_lingkup_monev' => 'array',
        'tujuan_ami' => 'array',
        'pelaksanaan_ami' => 'array',
        'dokumen_spmi' => 'array',
    ];
}
