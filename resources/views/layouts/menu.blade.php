<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner justify-content-center">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="{{ route('dashboard.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-home-smile-line"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>

            <!-- Penjualan -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ri-store-3-line"></i>
                    <div data-i18n="Penjualan">Penjualan</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('penjualan.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-customer-service-line"></i>
                            <div data-i18n="Transaksi">Transaksi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('penjualan.pelanggan') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-group-line"></i>
                            <div data-i18n="Data Pelanggan">Data Pelanggan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('penjualan.history') }}" class="menu-link">
                            <i class="menu-icon tf-icons ri-chat-history-line"></i>
                            <div data-i18n="Histori Penjualan">Histori Penjualan</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Barang -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class='menu-icon tf-icons ri-archive-2-line'></i>
                    <div data-i18n="Barang">Barang</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('barang.index') }}" class="menu-link">
                            <i class='menu-icon tf-icons ri-inbox-archive-line'></i>
                            <div data-i18n="Semua Barang">Semua Barang</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('barang.merk.index') }}" class="menu-link">
                            <i class='menu-icon tf-icons ri-inbox-unarchive-line'></i>
                            <div data-i18n="Merk">Merk</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('barang.kategori.index') }}" class="menu-link">
                            <i class='menu-icon tf-icons ri-archive-line'></i>
                            <div data-i18n="Kategori">Kategori</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Laporan -->
            <li class="menu-item">
                <a href="{{ route('laporan.penjualan') }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-article-line"></i>
                    <div data-i18n="Laporan">Laporan</div>
                </a>
            </li>

            <!-- Master Barang -->
            <li class="menu-item">
                <a href="{{ route('master.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-archive-line"></i>
                    <div data-i18n="Master Barang">Master Barang</div>
                </a>
            </li>

            <!-- User -->
            <li class="menu-item">
                <a href="{{ route('user.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ri-group-line"></i>
                    <div data-i18n="List User">List User</div>
                </a>
            </li>
        </ul>
    </div>
</aside>
