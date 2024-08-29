@extends('dashboard.layouts.main')

@section('container')
    <h1>Daftar Kategori Buku</h1>
    <a href="{{ route('kategori_buku.create') }}" class="btn btn-primary mb-3">
        <i class="ti ti-plus"></i> Tambah Kategori
    </a>
    <table class="table-custom">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori_buku as $kategori)
                <tr>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('kategori_buku.edit', $kategori) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kategori_buku.destroy', $kategori) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
