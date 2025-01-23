@extends('layouts.template')

@section('title', 'Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6">
            <!-- Gamification Card -->
            <div class="col-md-12 col-xxl-8">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Selamat Datang <span class="fw-bold">John!</span></h4>
                                <p class="mb-0">You have done 68% 😎 more sales today.</p>
                                <p>Check your new badge in your profile.</p>
                                <a href="/kasir" class="btn btn-primary">Transaksi</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                            <div class="card-body pb-0 px-0 pt-2">
                                <img src="assets/img/illustrations/illustration-john-light.png" height="186"
                                    class="scaleX-n1-rtl" alt="View Profile"
                                    data-app-light-img="illustrations/illustration-john-light.png"
                                    data-app-dark-img="illustrations/illustration-john-dark.html">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-lg-6 mb-2 pt-3" id="sortable-cards">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-lg-0 mb-6">
                            <div class="card-body text-center">
                                <h2>
                                    <i class="ri-shopping-cart-2-line text-success ri-24px"></i>
                                </h2>
                                <h4>Semua Barang</h4>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-lg-0 mb-6">
                            <div class="card-body text-center">
                                <h2>
                                    <i class="ri-global-line text-info ri-24px"></i>
                                </h2>
                                <h4>Total Transaksi</h4>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-lg-0 mb-6">
                            <div class="card-body text-center">
                                <h2>
                                    <i class="ri-gift-line text-danger ri-24px"></i>
                                </h2>
                                <h4>Barang Tersedia</h4>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-lg-0 mb-6">
                            <div class="card-body text-center">
                                <h2>
                                    <i class="ri-user-3-line text-primary ri-24px"></i>
                                </h2>
                                <h4>User</h4>
                                {{-- <h5>{{ $user }}</h5> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
