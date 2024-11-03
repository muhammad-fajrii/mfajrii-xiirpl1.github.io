<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
    use HasFactory;

    protected $table = 'pinjam_buku'; // Nama tabel di database

    protected $fillable = [
        'nama_peminjam',
        'nama_buku',
        'jumlah_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda',
    ];
}
