@extends('layouts.template')

@section('title', 'Tambah Pelanggan')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="col-xl">
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tambah Kategori</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('penjualan.store-pelanggan') }}" method="post">
                                @csrf
                                <div class="input-group input-group-merge mb-6">
                                    <span id="nama" class="input-group-text"></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="nama" value="{{ old('nama') }}"
                                            class="form-control" @error('nama') is-invalid @enderror id="nama"
                                            placeholder="Nama Pelanggan..." aria-describedby="nama" required />
                                        <label for="nama">Nama Pelanggan</label>
                                        @error('nama')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-group input-group-merge mb-6">
                                    <span id="kontak" class="input-group-text"></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="number" name="kontak" value="{{ old('kontak') }}"
                                            class="form-control" @error('kontak') is-invalid @enderror id="kontak"
                                            placeholder="Kontak" aria-describedby="kontak" required />
                                        <label for="nama">Kontak</label>
                                        @error('kontak')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="input-group input-group-merge mb-6">
                                    <span id="alamat" class="input-group-text"></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="alamat" value="{{ old('alamat') }}"
                                            class="form-control" @error('alamat') is-invalid @enderror id="alamat"
                                            placeholder="Alamat" aria-describedby="alamat" required />
                                        <label for="nama">Alamat</label>
                                        @error('alamat')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('penjualan.pelanggan') }}" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
