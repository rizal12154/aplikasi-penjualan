@extends('layouts.template')

@section('title', 'Transaksi')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
                    @livewire('data-transaksi')
                </div>
            </div>
        </div>
    </div>
@endsection
