<!doctype html>
<html lang="en">

<head>
    @include('layouts.style')
    <title>@yield('title')</title>
</head>

<body>
    <main>
        <!-- start the project -->
        <!-- app layout -->
        <div id="app-layout" class="overflow-x-hidden flex">
            <!-- start navbar -->
            @include('layouts.sidebar')
            <!--end of navbar-->

            <!-- app layout content -->
            <div id="app-layout-content"
                class="relative min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
                <!-- start navbar -->
                @include('layouts.navbar')
                <!-- end of navbar -->

                <div class="pb-20">
                    @yield('content')
                </div>
                @include('layouts.footer')
            </div>
        </div>
        <!-- end of project -->
    </main>

    @include('layouts.script')
</body>

</html>
