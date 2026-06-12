<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'kategori_id',
        'user_id',
        'judul',
        'ringkasan',
        'content',
        'gambar',
        'status',
        'slug',
        'views',
        'berita_utama',
        'published_at'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'published_at' => 'date'
    ];
}
