@extends('layouts.template')

@section('title', 'Kasir')

@livewire('search-barang')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Tabel Transaksi -->
        @livewire('transaksis')
    </div>
@endsection
