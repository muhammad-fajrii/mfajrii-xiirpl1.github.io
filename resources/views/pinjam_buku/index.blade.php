@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Peminjaman Buku</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Jumlah Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peminjaman as $pinjam)
            <tr>
                <td>{{ $pinjam->nama_peminjam }}</td>
                <td>{{ $pinjam->nama_buku }}</td>
                <td>{{ $pinjam->jumlah_buku }}</td>
                <td>{{ $pinjam->tanggal_pinjam }}</td>
                <td>{{ $pinjam->tanggal_kembali ?? '-' }}</td>
                <td>{{ $pinjam->denda ? 'Rp ' . number_format($pinjam->denda, 0, ',', '.') : '-' }}</td>
                <td>
                    <!-- Tautan ke halaman edit_denda.blade.php -->
                    <a href="{{ route('pinjam_buku.editDenda', $pinjam->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <!-- Form untuk menghapus data -->
                    <form action="{{ route('pinjam_buku.destroy', $pinjam->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
