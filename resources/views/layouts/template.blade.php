<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('') }}assets/" data-template="horizontal-menu-template" data-style="light">

<head>
    <!-- Style -->
    @include('layouts.style')
    @livewireStyles
    <title>@yield('title')</title>
</head>

<body>

    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">

            <!-- Navbar -->
            @include('layouts.header')
            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    @include('layouts.menu')
                    <!-- / Menu -->
                    <!-- Content -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Success!</strong>{{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif
                    @yield('content')
                    <!--/ Content -->

                    <!-- Footer -->
                    @include('layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>
            <!--/ Layout container -->
        </div>
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <div class="drag-target"></div>

    <!-- Core JS -->
    @livewireScripts
    @include('layouts.script')


</body>

</html>
