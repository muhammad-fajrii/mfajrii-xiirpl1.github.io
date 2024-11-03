<?php

namespace App\Http\Controllers;

use App\Models\PinjamBuku;
use Illuminate\Http\Request;

class PinjamBukuController extends Controller
{
    public function index()
    {
        $peminjaman = PinjamBuku::all();
        return view('pinjam_buku.index', compact('peminjaman'));
    }

    public function create()
    {
        return view('pinjam_buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'required|integer|max:99',
            'tanggal_pinjam' => 'required|date',
        ]);

        PinjamBuku::create([
            'nama_peminjam' => $request->nama_peminjam,
            'nama_buku' => $request->nama_buku,
            'jumlah_buku' => $request->jumlah_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
        ]);

        return redirect()->route('pinjam_buku.index');
    }

    public function editDenda(PinjamBuku $peminjaman)
    {
        // Menampilkan form untuk mengedit tanggal_kembali dan denda secara manual
        return view('pinjam_buku.edit_denda', compact('peminjaman'));
    }

    public function updateDenda(PinjamBuku $peminjaman, Request $request)
    {
        $request->validate([
            'tanggal_kembali' => 'nullable|date',
            'denda' => 'nullable|integer|min:0',
        ]);

        // Menyimpan tanggal_kembali dan denda yang diinputkan secara manual oleh pengguna
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->denda = $request->denda;
        $peminjaman->save();

        return redirect()->route('pinjam_buku.index');
    }

    public function destroy($id)
    {
        // Mencari peminjaman berdasarkan ID
        $peminjaman = PinjamBuku::findOrFail($id);
        
        // Menghapus peminjaman
        $peminjaman->delete();

        // Mengalihkan kembali ke halaman daftar dengan pesan sukses
        return redirect()->route('pinjam_buku.index');
    }
}
