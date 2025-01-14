<nav class="navbar-vertical navbar">
    <div id="myScrollableElement" class="h-screen" data-simplebar>
        <!-- brand logo -->
        <a class="navbar-brand" href="javascriptvoid:0">
            {{-- <img src="assets/images/brand/logo/logo.svg" alt="" /> --}}
        </a>

        <!-- navbar nav -->
        <ul class="navbar-nav flex-col" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i data-feather="home" class="w-4 h-4 mr-2"></i>
                    Dashboard
                </a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navEcommerce"
                    aria-expanded="false" aria-controls="navPages">
                    <i data-feather="shopping-bag" class="w-4 h-4 mr-2"></i>
                    Penjualan
                </a>
                <div id="navEcommerce" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/transaksi">Riwayat Penjualan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pelanggan">Data Pelanggan</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navEmail"
                    aria-expanded="false" aria-controls="navEmail">
                    <i data-feather="shopping-cart" class="w-4 h-4 mr-2"></i>
                    Barang
                </a>

                <div id="navEmail" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-col">
                        <li class="nav-item">
                            <a class="nav-link" href="mail.html">Semua Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mail-details.html">Merk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mail-draft.html">Kategori</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Nav item -->
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/laporan" data-bs-target="#navinvoice" aria-expanded="false"
                    aria-controls="navinvoice">
                    <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                    Laporan
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-target="#navblog" aria-expanded="false"
                    aria-controls="navblog">
                    <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                    Stok Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#!" data-bs-target="#navprofilePages" aria-expanded="false"
                    aria-controls="navprofilePages">
                    <i data-feather="user" class="w-4 h-4 mr-2"></i>
                    Operator System
                </a>
            </li>
        </ul>
    </div>
</nav>
