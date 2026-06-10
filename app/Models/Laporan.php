<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $fillable = [
        'deskripsi_monev',
        'dokumen_monev',
        'informasi_tambahan_monev',
        'deskripsi_ami',
        'dokumen_ami',
        'informasi_tambahan_ami',
        'deskripsi_rtm',
        'dokumen_rtm',
        'informasi_tambahan_rtm',
        'deskripsi_rtl',
        'dokumen_rtl',
        'informasi_tambahan_rtl',
    ];

    protected $casts = [
        'dokumen_monev' => 'array',
        'dokumen_ami' => 'array',
        'dokumen_rtm' => 'array',
        'dokumen_rtl' => 'array',
    ];
}
