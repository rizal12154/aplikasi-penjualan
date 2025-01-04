@extends('layouts.app')

@section('title', 'Dashboard');

@section('content')
    <div class="flex items-center mb-4 justify-between">
        <!-- title -->
        <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Ecommerce</h1>
        <a href="#"
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

    <div class="grid md:grid-cols-1 xl:grid-cols-12 gap-6 mb-6">
        <div class="xl:col-span-8">
            <div class="card h-full">
                <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                    <h4>Revenue</h4>
                    <div class="inline-flex gap-1">
                        <div class="relative">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked />
                            <label
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                for="btnradio1">
                                All
                            </label>
                        </div>
                        <div class="relative">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" />
                            <label
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                for="btnradio2">
                                1M
                            </label>
                        </div>
                        <div class="relative">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" />
                            <label
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                for="btnradio3">
                                6M
                            </label>
                        </div>
                        <div class="relative">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" />
                            <label
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                for="btnradio4">
                                1Y
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body flex flex-col justify-evenly">
                    <div id="revenueChart"></div>
                    <div class="mt-4 px-lg-6">
                        <div class="grid lg:grid-cols-3 bg-gray-100 rounded-lg">
                            <div class="p-4 flex flex-col gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="bg-indigo-600 h-3 w-3 rounded-full"></div>
                                    <div>Current Week</div>
                                </div>
                                <h3>$235,965</h3>
                            </div>
                            <div class="p-4 flex flex-col gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="bg-cyan-600 h-3 w-3 rounded-full"></div>
                                    <div>Past Week</div>
                                </div>
                                <h3>$198,214</h3>
                            </div>
                            <div class="p-4 flex flex-col gap-3">
                                <div class="flex items-center gap-3">
                                    <div>Today's Earning:</div>
                                </div>
                                <h3>$2,562.30</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:col-span-4">
            <div class="card h-full">
                <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                    <h4>Total Sales</h4>
                </div>
                <div class="card-body">
                    <div id="totalSale" class="flex justify-center"></div>
                    <table class="text-left w-full whitespace-nowrap mt-5">
                        <tbody>
                            <tr>
                                <td class="px-3 py-1">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-indigo-600 h-3 w-3 rounded-sm"></div>
                                        <div>Direct</div>
                                    </div>
                                </td>
                                <td class="px-3 py-1 text-right">$1200.42</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-1">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-yellow-600 h-3 w-3 rounded-sm"></div>
                                        <div>Affiliate</div>
                                    </div>
                                </td>

                                <td class="px-3 py-1 text-right">$353.42</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-1">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-red-600 h-3 w-3 rounded-sm"></div>
                                        <div>Sponsored</div>
                                    </div>
                                </td>

                                <td class="px-3 py-1 text-right">$413.31</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-1">
                                    <div class="flex items-center gap-3">
                                        <div class="bg-cyan-600 h-3 w-3 rounded-sm"></div>
                                        <div>E-mail</div>
                                    </div>
                                </td>

                                <td class="px-3 py-1 text-right">$235.72</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mb-6">
        <div class="xl:col-span-4">
            <div class="card h-full">
                <div class="border-b border-gray-300 px-5 py-3">
                    <h4>Revenue by Location</h4>
                </div>
                <div class="card-body flex flex-col justify-evenly">
                    <div id="locationmap" style="width: 100%; height: 250px"></div>
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center">
                                <span>United States</span>
                                <span class="text-gray-800">$22,120</span>
                            </div>
                            <div class="w-full bg-gray-300 h-2 rounded-full">
                                <div class="h-2 bg-indigo-600 rounded-full w-2/5"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center">
                                <span>India</span>
                                <span class="text-gray-800">$12,756</span>
                            </div>
                            <div class="w-full bg-gray-300 h-2 rounded-full">
                                <div class="h-2 bg-green-600 rounded-full w-3/5"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center">
                                <span>United Kingdom</span>
                                <span class="text-gray-800">$8,864</span>
                            </div>
                            <div class="w-full bg-gray-300 h-2 rounded-full">
                                <div class="h-2 bg-cyan-600 rounded-full w-3/5"></div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between items-center">
                                <span>Sweden</span>
                                <span class="text-gray-800">$6,124</span>
                            </div>
                            <div class="w-full bg-gray-300 h-2 rounded-full">
                                <div class="h-2 bg-yellow-600 rounded-full w-3/5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:col-span-8">
            <div class="card h-full">
                <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                    <h4>Best Selling Products</h4>
                    <div class="flex items-center">
                        <div>
                            <span>Sort By:</span>
                        </div>
                        <div class="ml-2">
                            <select
                                class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-1 px-3 disabled:opacity-50 disabled:pointer-events-none">
                                <option selected="">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="Last 7 Days">Last 7 Days</option>
                                <option value="Last 30 Days">Last 30 Days</option>
                                <option value="This Month">This Month</option>
                                <option value="Last Month">Last Month</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="leading-tight">
                    <div class="relative overflow-x-auto">
                        <table class="text-left w-full whitespace-nowrap">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-6 py-3">Image</th>
                                    <th class="px-6 py-3">Product Name</th>
                                    <th class="px-6 py-3">Invoice</th>
                                    <th class="px-6 py-3">QTY</th>

                                    <th class="px-6 py-3">Price</th>
                                    <th class="px-6 py-3">Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-1.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">Apple Watch</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21345</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$968.09</td>
                                    <td class="px-6 py-3">27-08-2023</td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-2.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">Apple Watch Dark</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21344</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$868.09</td>
                                    <td class="px-6 py-3">26-08-2023</td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-3.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">Apple Headphone</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21343</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$1268.09</td>
                                    <td class="px-6 py-3">25-08-2023</td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-4.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">Apple Watch Dark</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21342</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$768.09</td>
                                    <td class="px-6 py-3">25-08-2023</td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-5.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">T-shirt Blue</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21341</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$68.09</td>
                                    <td class="px-6 py-3">24-08-2023</td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-6.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">Apple Watch Dark</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21340</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$678.09</td>
                                    <td class="px-6 py-3">24-08-2023</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3">
                                        <a href="#!"><img src="assets/images/ecommerce/product-7.jpg" alt="Image"
                                                class="h-11 w-auto rounded-lg" /></a>
                                    </td>
                                    <td class="px-6 py-3"><a href="#!">Headphone</a></td>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#21339</a></td>
                                    <td class="px-6 py-3">1</td>
                                    <td class="px-6 py-3" class="text-gray-800">$568.09</td>
                                    <td class="px-6 py-3">22-08-2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mb-6">
        <div class="xl:col-span-6">
            <div class="card h-full">
                <div class="border-b border-gray-300 px-5 py-3">
                    <h4>Recent Orders</h4>
                </div>

                <div class="leading-tight">
                    <div class="relative overflow-x-auto">
                        <table class="text-left w-full whitespace-nowrap">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-6 py-3">Order ID</th>
                                    <th class="px-6 py-3">Customer</th>
                                    <th class="px-6 py-3">Product</th>
                                    <th class="px-6 py-3">Amount</th>
                                    <th class="px-6 py-3">Vendor</th>
                                    <th class="px-6 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0007</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <img src="assets/images/avatar/avatar-8.jpg" alt="Image"
                                                class="h-8 w-auto rounded-full" />
                                            <span>Michell Forge</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Headphone</td>
                                    <td class="text-success">$99.00</td>
                                    <td class="px-6 py-3">DollarSmart</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-green-100 px-2 py-1 text-green-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0006</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <img src="assets/images/avatar/avatar-11.jpg" alt="Image"
                                                class="h-8 w-auto rounded-full" />
                                            <span>Judy Huston</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Beauty Lips</td>
                                    <td class="text-success">$399.00</td>
                                    <td class="px-6 py-3">Snail Bouque</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-green-100 px-2 py-1 text-green-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0005</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <span
                                                class="bg-indigo-600 text-white h-8 w-8 rounded-full flex flex-col items-center justify-center">OT</span>

                                            <span>Olivier Tassi</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Lady Bag</td>
                                    <td class="text-success">$729.00</td>
                                    <td class="px-6 py-3">Cartmax</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-red-100 px-2 py-1 text-red-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Cancel</span>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0004</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <img src="assets/images/avatar/avatar-2.jpg" alt="Image"
                                                class="h-8 w-auto rounded-full" />
                                            <span>Cynth Spur</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Headphone</td>
                                    <td class="text-success">$225.00</td>
                                    <td class="px-6 py-3">DollarSmart</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-yellow-100 px-2 py-1 text-yellow-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Pending</span>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0003</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <span
                                                class="bg-red-600 text-white h-8 w-8 rounded-full flex flex-col items-center justify-center">RJ</span>

                                            <span>Ruby Jackson</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Furniture</td>
                                    <td class="text-success">$639.00</td>
                                    <td class="px-6 py-3">Megaplex</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-green-100 px-2 py-1 text-green-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0002</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Image"
                                                class="h-8 w-auto rounded-full" />
                                            <span>Joshua Galher</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Accessories</td>
                                    <td class="text-success">$89.00</td>
                                    <td class="px-6 py-3">Shopperia</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-green-100 px-2 py-1 text-green-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3"><a href="#!" class="text-indigo-600">#DU0001</a></td>
                                    <td class="px-6 py-3">
                                        <a href="#!" class="flex items-center gap-3">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Image"
                                                class="h-8 w-auto rounded-full" />
                                            <span>Michael Bro</span>
                                        </a>
                                    </td>
                                    <td class="px-6 py-3">Kitchen</td>
                                    <td class="text-success">$29.00</td>
                                    <td class="px-6 py-3">Eccommerce</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="bg-green-100 px-2 py-1 text-green-800 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">Paid</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:col-span-6">
            <div class="card h-full flex flex-col justify-evenly">
                <div class="border-b border-gray-300 px-5 py-3 flex justify-between items-center">
                    <h4>Top Seller</h4>
                    <div>
                        <select
                            class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-1 px-3 disabled:opacity-50 disabled:pointer-events-none">
                            <option selected="">Report</option>
                            <option value="1">Report Download</option>
                            <option value="2">Export</option>
                            <option value="3">Import</option>
                        </select>
                    </div>
                </div>
                <div class="leading-tight">
                    <div class="relative overflow-x-auto">
                        <table class="text-left w-full whitespace-nowrap">
                            <tbody>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-3">
                                            <a href="#!"><img src="assets/images/svg/brand-logo-1.svg"
                                                    alt="Image" /></a>
                                            <div class="leading-tight">
                                                <h5><a href="#!" class="text-inherit">Brilliant Boutique</a></h5>
                                                <small>Bryan M. Flores</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">Beauty Lips</td>
                                    <td class="px-6 py-3">
                                        <div>
                                            <h5>3214</h5>
                                            <small>Stock</small>
                                        </div>
                                    </td>
                                    <td class="text-gray-800">$529511</td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2">
                                            <span>42%</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trending-up text-green-600">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-3">
                                            <a href="#!"><img src="assets/images/svg/brand-logo-2.svg"
                                                    alt="Image" /></a>
                                            <div class="leading-tight">
                                                <h5><a href="#!" class="text-inherit">Cartmax</a></h5>
                                                <small>Mamie Lacasse</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3">Lady Bag</td>
                                    <td class="px-6 py-3">
                                        <div>
                                            <h5>4213</h5>
                                            <small>Stock</small>
                                        </div>
                                    </td>
                                    <td class="text-gray-800">$308719</td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2">
                                            <span>89%</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trending-up text-green-600">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-3">
                                            <a href="#!"><img src="assets/images/svg/brand-logo-3.svg"
                                                    alt="Image" /></a>
                                            <div class="leading-tight">
                                                <h5><a href="#!" class="text-inherit">DollarSmart</a></h5>
                                                <small>Diane Hilbert</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3">Headphone</td>
                                    <td class="px-6 py-3">
                                        <div>
                                            <h5>756</h5>
                                            <small>Stock</small>
                                        </div>
                                    </td>
                                    <td class="text-gray-800">$24859</td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2">
                                            <span>89%</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trending-up text-green-600">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-3">
                                            <a href="#!"><img src="assets/images/svg/brand-logo-4.svg"
                                                    alt="Image" /></a>
                                            <div class="leading-tight">
                                                <h5><a href="#!" class="text-inherit">Megaplex</a></h5>
                                                <small>Charity Parris</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3">Furniture</td>
                                    <td class="px-6 py-3">
                                        <div>
                                            <h5>252</h5>
                                            <small>Stock</small>
                                        </div>
                                    </td>
                                    <td class="text-gray-800">$3204</td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2">
                                            <span>63%</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trending-up text-green-600">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-3">
                                            <a href="#!"><img src="assets/images/svg/brand-logo-5.svg"
                                                    alt="Image" /></a>
                                            <div class="leading-tight">
                                                <h5><a href="#!" class="text-inherit">Shopperia</a></h5>
                                                <small>Maurice Phillips</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3">Accessories</td>
                                    <td class="px-6 py-3">
                                        <div>
                                            <h5>636</h5>
                                            <small>Stock</small>
                                        </div>
                                    </td>
                                    <td class="text-gray-800">$92079</td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2">
                                            <span>55%</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trending-up text-green-600">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-gray-300 border-b">
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-3">
                                            <a href="#!"><img src="assets/images/svg/brand-logo-6.svg"
                                                    alt="Image" /></a>
                                            <div class="leading-tight">
                                                <h5><a href="#!" class="text-inherit">Freshcommerce</a></h5>
                                                <small>Timothy Doss</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-3">Kitchen</td>
                                    <td class="px-6 py-3">
                                        <div>
                                            <h5>522</h5>
                                            <small>Stock</small>
                                        </div>
                                    </td>
                                    <td class="text-gray-800">$3204</td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center gap-2">
                                            <span>67%</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trending-up text-green-600">
                                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                    <polyline points="17 6 23 6 23 12"></polyline>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="px-5 py-3 flex md:flex-row flex-col justify-between items-center gap-3">
                    <span>
                        Showing
                        <span class="text-gray-800">5</span>
                        of
                        <span class="text-gray-800">25</span>
                        Results
                    </span>
                    <!-- pagination start -->
                    <nav class="flex items-center gap-x-1">
                        <button type="button"
                            class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none leading-none">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </span>
                        </button>
                        <div class="flex items-center gap-x-1">
                            <button type="button"
                                class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none leading-none"
                                aria-current="page">
                                1
                            </button>
                            <button type="button"
                                class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none leading-none">
                                2
                            </button>
                            <button type="button"
                                class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none leading-none">
                                3
                            </button>
                        </div>
                        <button type="button"
                            class="min-h-[36px] min-w-[36px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 rounded-md border bg-white border-gray-300 text-gray-800 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none leading-none">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </button>
                    </nav>
                    <!-- pagination end -->
                </div>
            </div>
        </div>
    </div>
@endsection
