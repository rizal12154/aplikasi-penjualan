@extends('layouts.template')

@section('title', 'Master Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('master.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Kategori</th>
                                <th>Jenis</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($master as $get)
                            <tbody>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $get->nama_barang }}</td>
                                    <td>{{ $get->stok }}</td>
                                    <td>{{ $get->harga_beli }}</td>
                                    <td>{{ $get->harga_jual }}</td>
                                    <td>{{ $get->kategori->nama }}</td>
                                    <td>{{ $get->merk->nama }}</td>
                                    <td>
                                        <span
                                            class="badge 
                        {{ $get->status == 'Ada' ? 'badge bg-label-success' : ($get->status == 'Hampir Habis' ? 'badge bg-label-warning' : 'badge bg-label-danger') }}">
                                            {{ $get->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/tambah_master"><i
                                                        class="ri-pencil-line me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="/hapus"><i
                                                        class="ri-delete-bin-7-line me-1"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
