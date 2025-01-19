@extends('layouts.template')

@section('title', 'Tambah Kategori')

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
                            <form>
                                <div class="input-group input-group-merge mb-6">
                                    <span id="nama_kategori" class="input-group-text"><i class="ri-user-line"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="nama_kategori" value="{{ old('nama_kategori') }}"
                                            class="form-control" @error('nama_kategori') is-invalid @enderror id="nama_kategori"
                                            placeholder="Nama kategori..." aria-describedby="nama_kategori" required />
                                        <label for="nama_kategori">Nama Kategori</label>
                                        @error('nama_kategori')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/kategori" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
