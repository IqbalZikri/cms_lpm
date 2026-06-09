<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tentang';

    protected $fillable = [
        'akreditasi_unggul',
        'auditor_internal',
        'gambar_1',
        'gambar_2',
        'page_explanation'
    ];
}
