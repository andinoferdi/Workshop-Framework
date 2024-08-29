@extends('dashboard.layouts.main')

@section('container')
    <div class="form-container">
        <h1>Edit Buku</h1>
        <form action="{{ route('buku.update', $buku) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_buku">Kode Buku</label>
                <input type="text" name="kode_buku" id="kode_buku" value="{{ $buku->kode_buku }}" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $buku->judul }}" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" id="pengarang" value="{{ $buku->pengarang }}" required>
            </div>
            <div class="form-group">
                <label for="kategori_buku_id">Kategori</label>
                <select name="kategori_buku_id" id="kategori_buku_id" required>
                    @foreach ($kategori_buku as $kategori)
                        <option value="{{ $kategori->id }}"
                            {{ $kategori->id == $buku->kategori_buku_id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
