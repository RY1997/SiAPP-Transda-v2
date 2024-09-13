<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('home') ? 'active text-primary' : '' }}" href="/home">
            <i class="ri-dashboard-line"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>

    @if (Auth::user()->role == 'Admin')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('users*') ? 'active text-primary' : '' }}" href="{{ route('users.index') }}">
            <i class="ri-user-follow-line"></i>
            <span class="nav-link-text">Pengguna</span>
        </a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link {{ Request::is('users*') ? 'active text-primary' : '' }}" href="{{ route('users.index') }}">
            <i class="ri-user-follow-line"></i>
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
            <i class="ri-road-map-line"></i>
            <span class="nav-link-text">Perencanaan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('suratTugas*') ? 'active text-primary' : '' }}" href="{{ route('suratTugas.index') }}">
            <i class="ri-file-add-line"></i>
            <span class="nav-link-text">Pelaksanaan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('pelaporans*') ? 'active text-primary' : '' }}" href="{{ route('pelaporans.index') }}">
            <i class="ri-file-upload-line"></i>
            <span class="nav-link-text">Pelaporan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('kertasKerja*') ? 'active text-primary' : '' }}" href="{{ route('kertasKerja.index') }}">
            <i class="ri-file-chart-line"></i>
            <span class="nav-link-text">Progres dan Hasil</span>
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
            <i class="ri-settings-line"></i>
            <span class="nav-link-text">Bidang TKD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('parameterIndikators*') ? 'active text-primary' : '' }}" href="{{ route('parameterIndikators.index') }}">
            <i class="ri-settings-3-line"></i>
            <span class="nav-link-text">Indikator Makro</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('parameterLaporans*') ? 'active text-primary' : '' }}" href="{{ route('parameterLaporans.index') }}">
            <i class="ri-settings-6-line"></i>
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
            <i class="ri-bank-line"></i>
            <span class="nav-link-text">Postur APBD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringDataUmumTkds*') ? 'active text-primary' : '' }}" href="{{ route('monitoringDataUmumTkds.index') }}">
            <i class="ri-bank-line"></i>
            <span class="nav-link-text">Data Umum TKD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringTrens*') || Request::is('monitoringPenyalurans*') || Request::is('monitoringPenggunaans*') ? 'active text-primary' : '' }}" href="{{ route('monitoringTrens.index') }}">
            <i class="ri-links-line"></i>
            <span class="nav-link-text">Pengelolaan TKD</span>
        </a>
    </li>

    @if (session('jenis_tkd') == 'Dana Alokasi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringHibahs*') ? 'active text-primary' : '' }}" href="{{ route('monitoringHibahs.index') }}">
            <i class="ri-shake-hands-line"></i>
            <span class="nav-link-text">Pendanaan Hibah</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringIndikatorMakros*') ? 'active text-primary' : '' }}" href="{{ route('monitoringIndikatorMakros.index') }}">
            <i class="ri-star-smile-line"></i>
            <span class="nav-link-text">Capaian Indikator Makro</span>
        </a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringPps*') ? 'active text-primary' : '' }}" href="{{ route('monitoringPps.index') }}">
            <i class="ri-star-smile-line"></i>
            <span class="nav-link-text">Kinerja Layanan Publik</span>
        </a>
    </li> -->

    @if (session('jenis_tkd') == 'Dana Alokasi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('monitoringImmediateOutcomes*') ? 'active text-primary' : '' }}" href="{{ route('monitoringImmediateOutcomes.index') }}">
            <i class="ri-bard-line"></i>
            <span class="nav-link-text">Immediate Outcome</span>
        </a>
    </li>
    @endif
</ul>

<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">EVALUASI KEGIATAN</span>
</h6>

<ul class="navbar-nav mb-md-3">
    <!-- @if (session('jenis_tkd') == 'Dana Otonomi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('kebijakanOtsuses*') ? 'active text-primary' : '' }}" href="{{ route('kebijakanOtsuses.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Penetapan Otsus</span>
        </a>
    </li>
    @endif

    @if (session('jenis_tkd') == 'Dana Otonomi Khusus')
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
    @endif -->

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiDataUmumTkds*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiDataUmumTkds.index') }}">
            <i class="ri-bank-line"></i>
            <span class="nav-link-text">Data Umum TKD</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiTrens*') || Request::is('evaluasiPenyalurans*') || Request::is('evaluasiPenggunaans*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiTrens.index') }}">
            <i class="ri-links-line"></i>
            <span class="nav-link-text">Pengelolaan TKD</span>
        </a>
    </li>

    @if (session('jenis_tkd') == 'Dana Alokasi Umum')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiKebutuhans*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiKebutuhans.index') }}">
            <i class="ri-expand-width-line"></i>
            <span class="nav-link-text">Kebutuhan & Pendanaan</span>
        </a>
    </li>
    @endif

    @if (session('jenis_tkd') == 'Dana Bagi Hasil')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiPrioritas*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiPrioritas.index') }}">
            <i class="ri-sort-desc"></i>
            <span class="nav-link-text">Prioritas Penggunaan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiKebijakanAlokasis*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiKebijakanAlokasis.index') }}">
            <i class="ri-file-download-line"></i>
            <span class="nav-link-text">Kebijakan Alokasi</span>
        </a>
    </li>
    @endif

    @if (session('jenis_tkd') == 'Dana Alokasi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiKeberlanjutans*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiKeberlanjutans.index') }}">
            <i class="ri-contract-right-line"></i>
            <span class="nav-link-text">Keberlanjutan Kegiatan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiSisaDaks*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiSisaDaks.index') }}">
            <i class="ri-coin-line"></i>
            <span class="nav-link-text">Sisa Dana DAK</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiImmediateOutcomes*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiImmediateOutcomes.index') }}">
            <i class="ri-bard-line"></i>
            <span class="nav-link-text">Capaian IO</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiKontraks*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiKontraks.index') }}">
            <i class="ri-building-line"></i>
            <span class="nav-link-text">Pekerjaan Fisik</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiNonfisiks*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiNonfisiks.index') }}">
            <i class="ri-team-line"></i>
            <span class="nav-link-text">Kegiatan Non Fisik</span>
        </a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiIndikators*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiIndikators.index') }}">
            <i class="ri-file-chart-line"></i>
            <span class="nav-link-text">Efektivitas TKD</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('evaluasiLaporans*') ? 'active text-primary' : '' }}" href="{{ route('evaluasiLaporans.index') }}">
            <i class="ri-file-chart-2-line"></i>
            <span class="nav-link-text">Pelaporan TKD</span>
        </a>
    </li> -->

    <!-- @if (session('jenis_tkd') == 'Dana Otonomi Khusus')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('silpaOtsuses*') ? 'active text-primary' : '' }}" href="{{ route('silpaOtsuses.index') }}">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Saldo SILPA</span>
        </a>
    </li>
    @endif -->
</ul>

<hr class="my-3">

<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">PANDUAN PENGAWASAN</span>
</h6>

<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="http://bit.ly/TKD2024New" target="_blank">
            <i class="ri-question-line"></i>
            <span class="nav-link-text">Petunjuk Teknis</span>
        </a>
    </li>
</ul>

