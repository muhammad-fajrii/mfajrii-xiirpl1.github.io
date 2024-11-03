<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Peminjaman Buku</title>
</head>
<body>
    <div>
        <h1>Aplikasi Peminjaman Buku</h1>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        
        <!-- Tombol Tambah Data -->
        <a href="{{ route('pinjam_buku.create') }}">Tambah Data Peminjaman</a>

        <!-- Bagian Konten Dinamis -->
        @yield('content')
    </div>
</body>
</html>
