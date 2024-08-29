@extends('dashboard.layouts.main')

@section('container')
    <div class="form-container">
        <h1>Tambah Buku</h1>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_buku">Kode Buku</label>
                <input type="text" name="kode_buku" id="kode_buku" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" id="pengarang" required>
            </div>
            <div class="form-group">
                <label for="kategori_buku_id">Kategori</label>
                <div class="custom-select" style="width:100%;">
                    <select name="kategori_buku_id" id="kategori_buku_id" required>
                        @foreach ($kategori_buku as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
