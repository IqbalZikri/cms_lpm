<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spme extends Model
{
    protected $table = 'spme';

    protected $fillable = [
        'singkatan_lembaga',
        'nama_lembaga',
        'deskripsi',
        'link',
        'kategori',
        'cakupan_bidang',
        'jenis',
        'status',
    ];

    protected $casts = [
        'kategori' => 'array',
        'cakupan_bidang' => 'array',
    ];
}
