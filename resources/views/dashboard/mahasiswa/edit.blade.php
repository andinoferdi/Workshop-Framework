@extends('dashboard.layouts.main')

@section('container')
    <div class="form-container">
        <h1>Edit Mahasiswa</h1>
        <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $mahasiswa->email }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" required>{{ $mahasiswa->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
