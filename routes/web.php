<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\SpmeController;
use App\Http\Controllers\SpmiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');
Route::get('/profil/tentang', [ProfilController::class, 'tentang'])->name('profil.tentang');
Route::get('/profil/visi-misi', [ProfilController::class, 'visiMisi'])->name('profil.visiMisi');
Route::get('/profil/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('profil.strukturOrganisasi');

Route::get('/spmi', [SpmiController::class, 'index'])->name('spmi.index');

Route::get('/spme', [SpmeController::class, 'index'])->name('spme.index');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

Route::get('/sop', [SopController::class, 'index'])->name('sop.index');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');