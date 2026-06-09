<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'kategori_id',
        'judul',
        'ringkasan',
        'content',
        'gambar',
        'status',
        'slug',
        'published_at'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
