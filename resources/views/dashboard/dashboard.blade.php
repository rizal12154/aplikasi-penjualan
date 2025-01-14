@extends('layouts.app')

@section('title', 'Dashboard');

@section('content')
    <div class="flex items-center mb-4 justify-between">
        <!-- title -->
        <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Ecommerce</h1>
        <a href="#!"
            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 md:visible invisible">
            Add Product
        </a>
    </div>
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
        <div class="card h-full card-lift">
            <div class="flex flex-col gap-3 card-body">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 font-semibold">Orders</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-cart text-cyan-600">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </span>
                </div>
                <div class="flex items-center leading-normal">
                    <h3 class="font-bold">5,312</h3>
                    <span class="ml-2 flex items-center text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-down">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <polyline points="19 12 12 19 5 12"></polyline>
                        </svg>
                        2.29%
                    </span>
                </div>
                <a href="#!" class="text-indigo-600 font-semibold">View Orders</a>
            </div>
        </div>

        <div class="card h-full card-lift">
            <div class="flex flex-col gap-3 card-body">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 font-semibold">Revenue</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-dollar-sign text-cyan-600">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </span>
                </div>
                <div class="flex items-center leading-normal">
                    <h3 class="font-bold">$8,312</h3>
                    <span class="ml-2 flex items-center text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-up">
                            <line x1="12" y1="19" x2="12" y2="5"></line>
                            <polyline points="5 12 12 5 19 12"></polyline>
                        </svg>
                        2.29%
                    </span>
                </div>
                <a href="#!" class="text-indigo-600 font-semibold">View Earnings</a>
            </div>
        </div>
        <div class="card h-full card-lift">
            <div class="flex flex-col gap-3 card-body">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 font-semibold">Customer</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user text-cyan-600">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                </div>
                <div class="flex items-center leading-normal">
                    <h3 class="font-bold">$15,312</h3>
                    <span class="ml-2 flex items-center text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-up">
                            <line x1="12" y1="19" x2="12" y2="5"></line>
                            <polyline points="5 12 12 5 19 12"></polyline>
                        </svg>
                        5.16%
                    </span>
                </div>
                <a href="#!" class="text-indigo-600 font-semibold">All Customer</a>
            </div>
        </div>

        <div class="card h-full card-lift">
            <div class="flex flex-col gap-3 card-body">
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 font-semibold">Balance</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-credit-card text-cyan-600">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </span>
                </div>
                <div class="flex items-center leading-normal">
                    <h3 class="font-bold">$35.64k</h3>
                </div>
                <a href="#!" class="text-indigo-600 font-semibold">Withdraw Money</a>
            </div>
        </div>
    </div>
@endsection
