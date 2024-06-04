<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="fas fa-hand-holding-water menu-icon"></i>
                <span class="menu-title">Pembayaran Zakat</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('pembayaran.index') }}">
                            </i> Zakat Fitrah</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('maal.index') }}">
                            </i> Zakat Maal</a>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('muzzaki.index') }}">
                <i class="fas fa-user-friends menu-icon"></i>
                <span class="menu-title"> Muzzaki </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('penyaluran.index') }}">
                <i class="fas fa-handshake menu-icon"></i>
                <span class="menu-title"> Penyaluran Zakat </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mustahik.index') }}">
                <i class="fas fa-hand-holding-heart menu-icon"></i>
                <span class="menu-title"> Mustahik </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('donasi.index') }}">
                <i class="fas fa-donate menu-icon"></i>
                <span class="menu-title"> Donasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('zakat.index') }}">
                <i class="fas fa-hand-holding-usd menu-icon"></i>
                <span class="menu-title">Zakat</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('Masjid.index') }}">
                <i class="fas fa-mosque menu-icon"></i>
                <span class="menu-title">Masjid</span>
            </a>
        </li>
    </ul>
</nav>
