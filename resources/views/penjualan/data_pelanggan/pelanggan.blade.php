@extends('layouts.template')

@section('title', 'Data Pelanggan')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Data pelanggan</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('penjualan.tambah-pelanggan') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggan as $get)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $get->nama }}</td>
                                    <td>{{ $get->kontak }}</td>
                                    <td>{{ $get->alamat }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('penjualan.edit-pelanggan', $get->id) }}">
                                                    <i class="ri-pencil-line me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('penjualan.delete-pelanggan', $get->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit"
                                                        onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">
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
