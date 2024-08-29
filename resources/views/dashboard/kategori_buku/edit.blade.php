@extends('dashboard.layouts.main')

@section('container')
    <div class="form-container">
        <h1>Edit Kategori Buku</h1>
        <form action="{{ route('kategori_buku.update', $kategori_buku) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori_buku->nama_kategori }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('kategori_buku.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
