@extends('layouts.template')

@section('title', 'History Penjualan')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive">
                @livewire('history-penjualan')
            </div>
        </div>
    </div>
@endsection