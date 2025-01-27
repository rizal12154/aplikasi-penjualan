@extends('layouts.template')

@section('title', 'Tambah Barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Barang</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('master.store') }}" method="post">
                            @csrf
                            <!-- Nama Barang -->
                            <div class="mb-3">
                                <label for="nama_master" class="form-label">Nama Barang</label>
                                <input type="text" name="nama_master" value="{{ old('nama_master') }}"
                                    class="form-control @error('nama_master') is-invalid @enderror" id="nama_master"
                                    placeholder="Nama Barang..." required>
                                @error('nama_master')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3"
                                    placeholder="Deskripsi Barang...">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Merk -->
                            <div class="mb-3">
                                <label for="id_merk" class="form-label">Merk</label>
                                <select name="id_merk" class="form-select @error('id_merk') is-invalid @enderror"
                                    id="id_merk" required>
                                    <option value="">Pilih Merk</option>
                                    @foreach ($merk as $get)
                                        <option value="{{ $get->id }}"
                                            {{ old('id_merk') == $get->id ? 'selected' : '' }}>
                                            {{ $get->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_merk')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label for="id_kategori" class="form-label">Kategori</label>
                                <select name="id_kategori" class="form-select @error('id_kategori') is-invalid @enderror"
                                    id="id_kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $get)
                                        <option value="{{ $get->id }}"
                                            {{ old('id_kategori') == $get->id ? 'selected' : '' }}>
                                            {{ $get->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select @error('status') is-invalid @enderror"
                                    id="status">
                                    <option value="ada"
                                        {{ old('status', $master->status ?? '') == 'ada' ? 'selected' : '' }}>Ada</option>
                                    <option value="tidak ada"
                                        {{ old('status', $master->status ?? '') == 'tidak ada' ? 'selected' : '' }}>Tidak
                                        Ada</option>
                                </select>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Tombol -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('master.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
