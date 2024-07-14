<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('home') ? 'active text-primary' : '' }}" href="/home">
            <i class="ni ni-tv-2"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>

    @if (Auth::user()->role == 'Admin')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('users*') ? 'active text-primary' : '' }}" href="{{ route('users.index') }}">
            <i class="ni ni-single-02"></i>
            <span class="nav-link-text">Pengguna</span>
        </a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link {{ Request::is('users*') ? 'active text-primary' : '' }}" href="{{ route('users.index') }}">
            <i class="ni ni-single-02"></i>
            <span class="nav-link-text">Profil</span>
        </a>
    </li>
    @endif
</ul>

<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">ADMINISTRASI PENUGASAN</span>
</h6>

<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('ppbrs*') ? 'active text-primary' : '' }}" href="{{ route('ppbrs.index') }}">
            <i class="ni ni-pin-3"></i>
            <span class="nav-link-text">Perencanaan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('suratTugas*') ? 'active text-primary' : '' }}" href="{{ route('suratTugas.index') }}">
            <i class="ni ni-pin-3"></i>
            <span class="nav-link-text">Pelaksanaan</span>
        </a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link {{ Request::is('kertasKerja*') ? 'active text-primary' : '' }}" href="{{ route('kertasKerja.index') }}">
            <i class="ni ni-pin-3"></i>
            <span class="nav-link-text">Kertas Kerja</span>
        </a>
    </li> -->

    <li class="nav-item">
        <a class="nav-link {{ Request::is('pelaporans*') ? 'active text-primary' : '' }}" href="{{ route('pelaporans.index') }}">
            <i class="ni ni-pin-3"></i>
            <span class="nav-link-text">Pelaporan</span>
        </a>
    </li>
</ul>

@if (Auth::user()->role == 'Admin')
<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">PARAMETER</span>
</h6>

<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('parameterTkds*') ? 'active text-primary' : '' }}" href="{{ route('parameterTkds.index') }}">
            <i class="ni ni-bullet-list-67"></i>
            <span class="nav-link-text">Bidang TKD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('parameterIndikators*') ? 'active text-primary' : '' }}" href="{{ route('parameterIndikators.index') }}">
            <i class="ni ni-bullet-list-67"></i>
            <span class="nav-link-text">Indikator Efektivitas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('parameterLaporans*') ? 'active text-primary' : '' }}" href="{{ route('parameterLaporans.index') }}">
            <i class="ni ni-bullet-list-67"></i>
            <span class="nav-link-text">Laporan TKD</span>
        </a>
    </li>
</ul>
@endif

<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">MONITORING</span>
</h6>

<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringApbds*') ? 'active text-primary' : '' }}" href="{{ route('monitoringApbds.index') }}">
            <i class="ni ni-planet"></i>
            <span class="nav-link-text">Postur APBD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringTrens*') || Request::is('monitoringPenyalurans*') || Request::is('monitoringPenggunaans*') ? 'active text-primary' : '' }}" href="{{ route('monitoringTrens.index') }}">
            <i class="ni ni-planet"></i>
            <span class="nav-link-text">Pengelolaan TKD</span>
        </a>
    </li>
</ul>

<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">EVALUASI</span>
</h6>

<ul class="navbar-nav mb-md-3">
    @if (session('jenis_tkd') == 'Dana Otonomi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('kebijakanOtsuses*') ? 'active text-primary' : '' }}" href="{{ route('kebijakanOtsuses.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Penetapan Otsus</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringTls*') ? 'active text-primary' : '' }}" href="{{ route('monitoringTls.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Kebijakan Daerah</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiRengars*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiRengars.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Ren-Gar</span>
        </a>
    </li>

    @if (session('jenis_tkd') == 'Dana Otonomi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('rippOtsuses*') ? 'active text-primary' : '' }}" href="{{ route('rippOtsuses.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Sinkron RIPP</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('urusanBersamaOtsuses*') ? 'active text-primary' : '' }}" href="{{ route('urusanBersamaOtsuses.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Urusan Bersama</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiKontraks*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiKontraks.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Uji Kontrak</span>
        </a>
    </li>

    @if (session('jenis_tkd') == 'Dana Otonomi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('silpaOtsuses*') ? 'active text-primary' : '' }}" href="{{ route('silpaOtsuses.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Saldo SILPA</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiIndikators*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiIndikators.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Efektivitas TKD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiLaporans*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiLaporans.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Pelaporan TKD</span>
        </a>
    </li>
</ul>

<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">EVALUASI</span>
</h6>

<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="https://drive.google.com/drive/folders/10duSsgmhvra1Nldl8qjpJqCldNsCTqUh?usp=share_link" target="_blank">
            <i class="ni ni-palette"></i>
            <span class="nav-link-text">Petunjuk Teknis</span>
        </a>
    </li>
</ul>
