@extends('layouts.template')

@section('title', 'Semua Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-4">Filter</h5>
                <div class="d-flex justify-content-between align-items-center row gap-5 gx-6 gap-md-0">
                    <div class="col-md-4 product_status"></div>
                    <div class="col-md-4 product_category"></div>
                    <div class="col-md-4 product_stock"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-products table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Barang</th>
                            <th>produk</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Merk</th>
                            <th>Harga</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
