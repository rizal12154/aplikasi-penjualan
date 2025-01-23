@extends('layouts.template')

@section('title', 'Kasir')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Informasi Nota</div>
                    <div class="card-body">
                        <p><strong>No. Nota:</strong> <span id="nota">#{{ uniqid() }}</span></p>
                        <p><strong>Tanggal:</strong> <span id="tanggal">{{ date('Y-m-d H:i:s') }}</span></p>
                        <p><strong>Kasir:</strong> {{ auth()->user()->name }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Informasi Pelanggan</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="pelanggan" class="form-label">Pelanggan</label>
                            <select id="pelanggan" class="form-select">
                                <option value="0">-- Umum --</option>
                                <option value="1">Pelanggan 1</option>
                                <option value="2">Pelanggan 2</option>
                            </select>
                        </div>
                        <p><strong>Telp / HP:</strong> <span id="telp">-</span></p>
                        <p><strong>Alamat:</strong> <span id="alamat">-</span></p>
                        <p><strong>Info Lain:</strong> <span id="info-lain">-</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Transaksi</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="barang-list">
                        <tr>
                            <td>1</td>
                            <td>
                                <input type="text" class="form-control kode-barang" placeholder="Kode / Nama Barang"
                                    data-id="" oninput="searchBarang(this)">
                                <ul class="dropdown-menu d-none" id="dropdown-list"></ul>
                            </td>
                            <td class="nama-barang"></td>
                            <td class="harga">0</td>
                            <td><input type="number" class="form-control qty" min="1" value="1"
                                    oninput="updateSubtotal(this)"></td>
                            <td class="sub-total">0</td>
                            <td><button class="btn btn-danger btn-sm delete-row" onclick="removeRow(this)">X</button></td>
                        </tr>
                    </tbody>
                </table>
                <button id="add-row" class="btn btn-primary mb-3 mt-3" onclick="addRow()">Baris Baru (F7)</button>
                <div>
                    <textarea id="catatan" class="form-control mb-3" placeholder="Catatan Transaksi (jika ada)"></textarea>
                    <p><strong>Total: Rp.</strong> <span id="total">0</span></p>
                </div>
                <div class="d-flex gap-3">
                    <button class="btn btn-success" onclick="printNota()">Cetak (F9)</button>
                    <form id="transaksi-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="btn btn-primary" onclick="saveTransaction()">Simpan Transaksi
                            (F10)</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
