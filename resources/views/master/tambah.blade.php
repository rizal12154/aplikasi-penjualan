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
                            <form action="{{ ('master.store') }}" method="post">
                                @csrf
                                <div class="input-group input-group-merge mb-6">
                                    <span id="nama_barang" class="input-group-text"><i class="ri-user-line"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="nama_barang" value="{{ old('nama_barang') }}"
                                            class="form-control" @error('nama_barang') is-invalid @enderror id="nama_barang"
                                            placeholder="Nama Barang..." aria-describedby="nama_barang" required />
                                        <label for="nama_barang">Nama Barang</label>
                                        @error('nama_barang')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group input-group-merge mb-6">
                                    <span id="stok" class="input-group-text"><i class="ri-building-4-line"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="numeric" value="{{ old('stok') }}" id="stok"
                                            class="form-control" @error('stok') is-invalid @enderror placeholder="Stok"
                                            aria-describedby="stok" required />
                                        <label for="stok">Stok</label>
                                        @error('stok')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group input-group-merge mb-6">
                                    <div class="form-floating form-floating-outline">
                                        <select name="merk_id" id="merk_id" class="select2 form-select"
                                            @error('merk_id') is-invalid @enderror value="{{ old('merk_id') }}"
                                            data-allow-clear="true" required>
                                            <option value="">Pilih Merk</option>
                                            @foreach ($merk as $get)
                                                <option value="{{ $get->merk_id }}">{{ $get->nama }}</option>
                                            @endforeach
                                        </select>
                                        <label for="merk_id">Merk</label>
                                        @error('merk_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                        <div class="form-floating form-floating-outline">
                                            <input type="numeric" value="{{ old('harga_beli') }}" id="harga_beli"
                                                class="form-control" @error('harga_beli') is-invalid @enderror
                                                placeholder="Harga Beli" aria-describedby="harga_beli" required />
                                            <label for="harga_beli">Harga Beli</label>
                                            @error('harga_beli')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group input-group-merge mb-6">
                                    <span id="harga_jual" class="input-group-text"><i class="ri-phone-fill"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="numeric" value="{{ old('harga_jual') }}" id="harga_jual"
                                            class="form-control phone-mask" placeholder="Harga Jual"
                                            @error('harga_jual') is-invalid @enderror aria-describedby="harga_jual"
                                            required />
                                        <label for="harga_jual">Harga Jual</label>
                                        @error('harga_jual')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group input-group-merge mb-6">
                                    <div class="form-floating form-floating-outline">
                                        <select name="kategori_id" id="kategori_id" class="select2 form-select"
                                            @error('kategori_id') is-invalid @enderror value="{{ old('kategori_id') }}"
                                            data-allow-clear="true" required>
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $get)
                                                <option value="{{ $get->kategori_id }}">{{ $get->nama }}</option>
                                            @endforeach
                                        </select>
                                        <label for="kategori_id">Kategori</label>
                                        @error('kategori_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
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
