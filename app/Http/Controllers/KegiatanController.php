<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatanUtama = Kegiatan::where('berita_utama', 1)->where('status', 'published')->with('user', 'kategori')->first();
        $kegiatan = Kegiatan::where('status', 'published')->with('user', 'kategori')->latest('published_at')->paginate(8);
        $totalKegiatan = $kegiatan->count();
        $kegiatanPopuler = Kegiatan::where('status', 'published')->orderByDesc('views')->take(5)->get();
        $totalKategori = Kategori::withCount('kegiatan')->get();
        return view('kegiatan.index', compact('kegiatan', 'kegiatanUtama', 'totalKegiatan', 'kegiatanPopuler', 'totalKategori'));
    }

    public function show(string $slug)
    {
        // Ambil kegiatan berdasarkan slug
        $kegiatan = Kegiatan::with(['kategori', 'user'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        // Tambah view counter (opsional — pastikan kolom `views` ada)
        $kegiatan->increment('views');

        // Prev & Next dalam kategori yang sama
        $prev = Kegiatan::where('status', 'published')
            ->where('published_at', '<', $kegiatan->published_at)
            ->where('id', '!=', $kegiatan->id)
            ->latest('published_at')
            ->first();

        $next = Kegiatan::where('status', 'published')
            ->where('published_at', '>', $kegiatan->published_at)
            ->where('id', '!=', $kegiatan->id)
            ->oldest('published_at')
            ->first();

        // Kegiatan terkait (kategori sama, maks 3)
        $related = Kegiatan::with(['kategori'])
            ->where('status', 'published')
            ->where('kategori_id', $kegiatan->kategori_id)
            ->where('id', '!=', $kegiatan->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        // Kegiatan lainnya untuk grid bawah (maks 3, berbeda dari related)
        $relatedIds = $related->pluck('id')->push($kegiatan->id);
        $lainnya = Kegiatan::with(['kategori'])
            ->where('status', 'published')
            ->whereNotIn('id', $relatedIds)
            ->latest('published_at')
            ->take(3)
            ->get();

        // Daftar kategori untuk sidebar (dengan jumlah artikel)
        $kategoriList = Kategori::withCount([
            'kegiatan' => fn($q) => $q->where('status', 'published'),
        ])
            ->having('kegiatan_count', '>', 0)
            ->orderByDesc('kegiatan_count')
            ->get();

        return view('kegiatan.show', compact(
            'kegiatan',
            'prev',
            'next',
            'related',
            'lainnya',
            'kategoriList',
        ));
    }
}
