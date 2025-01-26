@extends('layouts.template')

@section('title', 'Tambah Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="col-xl">
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tambah Barang</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('barang.store') }}" method="post">
                                @csrf

                                <!-- Kode Barang -->
                                <div class="mb-3">
                                    <label for="kode_barang" class="form-label">Kode Barang</label>
                                    <input type="text" name="kode_barang" id="kode_barang"
                                        class="form-control @error('kode_barang') is-invalid @enderror"
                                        value="{{ old('kode_barang') }}" required>
                                    @error('kode_barang')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nama Barang -->
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama_barang" id="nama_barang"
                                        class="form-control @error('nama_barang') is-invalid @enderror"
                                        value="{{ old('nama_barang') }}" required>
                                    @error('nama_barang')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Merk -->
                                <div class="mb-3">
                                    <label for="id_merk" class="form-label">Merk</label>
                                    <select name="id_merk" id="id_merk"
                                        class="form-select @error('id_merk') is-invalid @enderror" required>
                                        <option value="">Pilih Merk</option>
                                        @foreach ($merk as $get)
                                            <option value="{{ $get->id_merk }}">
                                                {{ $get->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_merk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Kategori -->
                                <div class="mb-3">
                                    <label for="id_kategori" class="form-label">Kategori</label>
                                    <select name="id_kategori" id="id_kategori"
                                        class="form-select @error('id_kategori') is-invalid @enderror" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($kategori as $get)
                                            <option value="{{ $get->id_kategori }}">
                                                {{ $get->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_kategori')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Stok -->
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" name="stok" id="stok"
                                        class="form-control @error('stok') is-invalid @enderror"
                                        value="{{ old('stok') }}" required>
                                    @error('stok')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Harga Beli -->
                                <div class="mb-3">
                                    <label for="harga_beli" class="form-label">Harga Beli</label>
                                    <input type="number" step="0.01" name="harga_beli" id="harga_beli"
                                        class="form-control @error('harga_beli') is-invalid @enderror"
                                        value="{{ old('harga_beli') }}" required>
                                    @error('harga_beli')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Harga Jual -->
                                <div class="mb-3">
                                    <label for="harga_jual" class="form-label">Harga Jual</label>
                                    <input type="number" step="0.01" name="harga_jual" id="harga_jual"
                                        class="form-control @error('harga_jual') is-invalid @enderror"
                                        value="{{ old('harga_jual') }}" required>
                                    @error('harga_jual')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/master_barang" class="btn btn-danger">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
