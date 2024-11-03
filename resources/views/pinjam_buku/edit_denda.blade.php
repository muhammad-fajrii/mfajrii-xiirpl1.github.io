@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Peminjaman</h2>
    
    <form action="{{ route('pinjam_buku.updateDenda', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="tanggal_kembali">Tanggal Kembali:</label>
            <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali', $peminjaman->tanggal_kembali) }}">
        </div>

        <div>
            <label for="denda">Denda (Rp):</label>
            <input type="number" name="denda" id="denda" value="{{ old('denda', $peminjaman->denda) }}" min="0">
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="Terlambat" {{ (old('status', $peminjaman->status) == 'Terlambat') ? 'selected' : '' }}>Terlambat</option>
                <option value="Hilang" {{ (old('status', $peminjaman->status) == 'Hilang') ? 'selected' : '' }}>Hilang</option>
            </select>
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
