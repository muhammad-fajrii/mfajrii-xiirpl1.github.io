@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Peminjaman Buku</h2>
    <form action="{{ route('pinjam_buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam:</label>
            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
        </div>
        
        <div class="form-group">
            <label for="nama_buku">Nama Buku:</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" required>
        </div>
        
        <div class="form-group">
            <label for="jumlah_buku">Jumlah Buku:</label>
            <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" required max="99">
        </div>
        
        <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam:</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
