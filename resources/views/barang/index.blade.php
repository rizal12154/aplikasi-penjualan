@extends('layouts.template')

@section('title', 'Semua Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('barang.update-status') }}" class="btn btn-info mb-3">
                    Perbarui Status Barang
                </a>
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">+ Tambah Barang</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Stok Minimum</th>
                                <th>Stok Maksimum</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $get)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $get->kode_barang }}</td>
                                    <td>{{ $get->nama_barang }}</td>
                                    <td>{{ $get->merk->nama ?? '-' }}</td>
                                    <td>{{ number_format($get->harga_jual, 2) }}</td>
                                    <td>{{ number_format($get->harga_beli, 2) }}</td>
                                    <td>{{ $get->kategori->nama ?? '-' }}</td>
                                    <td>{{ $get->stok }}</td>
                                    <td>{{ $get->stok_minimum }}</td>
                                    <td>{{ $get->stok_maksimum }}</td>
                                    <td>
                                        <span class="badge bg-{{ $get->status_color }}">
                                            {{ $get->status_barang }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('barang.edit', $get->id) }}">
                                                    <i class="ri-pencil-line me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('barang.delete', $get->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit"
                                                        onclick="return confirm('Yakin ingin menghapus barang ini?')">
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
