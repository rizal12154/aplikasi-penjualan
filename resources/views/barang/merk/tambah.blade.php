@extends('layouts.template')

@section('title', 'Tambah Merk')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl">
                <div class="col-xl">
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tambah Merk</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ 'tambah.merk' }}" method="post">
                                @csrf
                                <div class="input-group input-group-merge mb-6">
                                    <span id="nama_merk" class="input-group-text"><i class="ri-user-line"></i></span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="nama_merk" value="{{ old('nama_merk') }}"
                                            class="form-control" @error('nama_merk') is-invalid @enderror id="nama_merk"
                                            placeholder="Nama merk..." aria-describedby="nama_merk" required />
                                        <label for="nama_merk">Nama Merk</label>
                                        @error('nama_merk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ 'merk' }}" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
