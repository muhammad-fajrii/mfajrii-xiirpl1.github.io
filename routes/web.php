<?php

use App\Http\Controllers\PinjamBukuController;

Route::get('/pinjam_buku', [PinjamBukuController::class, 'index'])->name('pinjam_buku.index');
Route::get('/pinjam_buku/create', [PinjamBukuController::class, 'create'])->name('pinjam_buku.create');
Route::post('/pinjam_buku', [PinjamBukuController::class, 'store'])->name('pinjam_buku.store');
Route::delete('/pinjam-buku/{id}', [PinjamBukuController::class, 'destroy'])->name('pinjam_buku.destroy');
Route::get('/pinjam_buku/{peminjaman}/edit-denda', [PinjamBukuController::class, 'editDenda'])->name('pinjam_buku.editDenda');
Route::put('/pinjam_buku/{peminjaman}/update-denda', [PinjamBukuController::class, 'updateDenda'])->name('pinjam_buku.updateDenda');
