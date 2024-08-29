@extends('dashboard.layouts.main')

@section('container')
    <div class="form-container">
        <h1>Tambah Kategori Buku</h1>
        <form action="{{ route('kategori_buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori_buku.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
