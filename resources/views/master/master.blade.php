@extends('layouts.template')

@section('title', 'Master Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('master.create') }}" class="btn btn-primary mb-3">Tambah</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Master</th>
                                <th>Nama Master</th>
                                <th>Kategori</th>
                                <th>Merk</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($master as $get)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $get->kode_master }}</td>
                                    <td>{{ $get->nama_master }}</td>
                                    <td>{{ $get->kategori->nama ?? '-' }}</td>
                                    <td>{{ $get->merk->nama ?? '-' }}</td>
                                    <td>{{ $get->deskripsi ?? '-' }}</td>
                                    <td>
                                        <!-- Menampilkan status -->
                                        @if ($get->status == 'tidak ada')
                                            <span class="badge bg-danger">Tidak Ada</span>
                                        @elseif ($get->status == 'hampir habis')
                                            <span class="badge bg-warning">Hampir Habis</span>
                                        @else
                                            <span class="badge bg-success">{{ ucfirst($get->status) }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('master.edit', $get->id_master) }}">
                                                    <i class="ri-pencil-line me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('master.delete', $get->id_master) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit"
                                                        onclick="return confirm('Yakin ingin menghapus master barang ini?')">
                                                        <i class="ri-delete-bin-7-line me-1"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
