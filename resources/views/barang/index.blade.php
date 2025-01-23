@extends('layouts.template')

@section('title', 'Semua Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
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
                                    <td>{{ $get->harga_jual }}</td>
                                    <td>{{ $get->harga_beli }}</td>
                                    <td>{{ $get->kategori->nama ?? '-' }}</td>
                                    <td>{{ $get->stok }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href=""><i
                                                        class="ri-pencil-line me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href=""><i
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
