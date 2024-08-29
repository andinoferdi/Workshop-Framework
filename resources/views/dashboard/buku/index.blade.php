@extends('dashboard.layouts.main')

@section('container')
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">
        <i class="ti ti-plus"></i> Tambah Buku
    </a>
    <table class="table-custom">
        <thead>
            <tr>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $item)
                <tr>
                    <td>{{ $item->kode_buku }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pengarang }}</td>
                    <td>{{ $item->kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('buku.edit', $item) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('buku.destroy', $item) }}" method="POST" style="display: inline;">
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
