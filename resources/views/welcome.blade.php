@include('layouts.style')

<div class="px-6 pb-20 pt-6">
    <div class="flex items-center mb-4 justify-between">
        <!-- title -->
        <h1 class="inline-block xl:text-xl text-lg font-semibold leading-6">Selamat Datang</h1>
        {{-- <a href="#"
            class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300 md:visible invisible">
            Button
        </a> --}}
    </div>
    <div class="bg-indigo-600 rounded-lg mb-6">
        <div class="p-6 md:flex justify-between items-center w-full">
            <div class="flex items-center gap-6">
                <img src="assets/images/avatar/avatar-3.jpg" alt="Image" class="rounded-full h-20 w-20" />
                <div class="leading-base">
                    <h3 class="text-white text-lg lg:text-xl">Good afternoon, Jitu Chauhan</h3>
                    <span class="text-white">Here is what’s happening with your projects today:</span>
                </div>
            </div>
            <div class="hidden lg:block">
                <a href="/dashboard"
                    class="btn gap-x-2 bg-white text-gray-800 border-white disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                    Masuk
                </a>
            </div>
        </div>
    </div>

@include('layouts.script')
