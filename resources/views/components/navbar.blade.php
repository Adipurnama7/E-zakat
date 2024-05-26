<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pembayaran.index') }}">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"> Pembayaran Zakat </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('muzzaki.index') }}">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"> Muzzaki </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('penyaluran.index') }}">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"> Penyaluran Zakat </span>
            </a>
        </li>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Mustahik</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Aktif </a></li>
                </ul>
            </div>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Tidak aktif </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('donasi.index') }}">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title"> Donasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/zakat">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Zakat</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('Masjid.index') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Masjid</span>
            </a>
        </li>
    </ul>
</nav>
