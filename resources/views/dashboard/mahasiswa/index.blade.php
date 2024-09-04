@extends('dashboard.layouts.main')

@section('container')
    <h1>Daftar Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">
        <i class="ti ti-plus"></i> Tambah Mahasiswa
    </a>
    <table class="table-custom">
        <thead class="text-dark fs-4">
            <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">NIM</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Email</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Alamat</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Aksi</h6>
                    </th>
                </tr>
            </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td class="border-bottom-0">{{ $mahasiswa->nama }}</td>
                    <td class="border-bottom-0">{{ $mahasiswa->nim }}</td>
                    <td class="border-bottom-0">{{ $mahasiswa->email }}</td>
                    <td class="border-bottom-0">{{ $mahasiswa->alamat }}</td>
                    <td class="border-bottom-0">
                        <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST" style="display: inline;">
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
