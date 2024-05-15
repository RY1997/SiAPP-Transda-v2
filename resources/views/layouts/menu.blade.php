<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('home') ? 'active' : '' }}" href="home">
        <iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Dashboard</span>
    </a>
</li>

<!-- <li class="nav-item">
    <a href="#" class="nav-link">
        <p>Ringkasan TKD</p>
    </a>
</li> -->

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
        <iconify-icon icon="solar:user-plus-rounded-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Akun Pengguna</span>
    </a>
</li>

<li class="nav-small-cap">
    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
    <span class="hide-menu">ADMINISTRASI</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('suratTugas*') ? 'active' : '' }}" href="{{ route('suratTugas.index') }}">
        <iconify-icon icon="solar:notification-unread-lines-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Surat Tugas</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="#">
        <iconify-icon icon="solar:download-twice-square-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Kertas Kerja</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('pelaporans*') ? 'active' : '' }}" href="{{ route('pelaporans.index') }}">
        <iconify-icon icon="solar:sidebar-code-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Pelaporan</span>
    </a>
</li>

@if (Auth::user()->role == 'Admin')
<li class="nav-small-cap">
    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
    <span class="hide-menu">PARAMETER</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('parameterTkds*') ? 'active' : '' }}" href="{{ route('parameterTkds.index') }}">
        <iconify-icon icon="solar:calendar-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Bidang TKD</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('parameterIndikators*') ? 'active' : '' }}" href="{{ route('parameterIndikators.index') }}">
        <iconify-icon icon="solar:calendar-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Indikator Pengujian</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('parameterLaporans*') ? 'active' : '' }}" href="{{ route('parameterLaporans.index') }}">
        <iconify-icon icon="solar:calendar-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Laporan Pengelolaan</span>
    </a>
</li>
@endif

<li class="nav-small-cap">
    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
    <span class="hide-menu">MONITORING</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('monitoringApbds*') ? 'active' : '' }}" href="{{ route('monitoringApbds.index') }}">
        <iconify-icon icon="solar:layers-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Postur APBD</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('monitoringTrens*') || Request::is('monitoringPenyalurans*') || Request::is('monitoringPenggunaans*') ? 'active' : '' }}" href="{{ route('monitoringTrens.index') }}">
        <iconify-icon icon="solar:star-line-duotone" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Pengelolaan TKD</span>
    </a>
</li>

<li class="nav-small-cap">
    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
    <span class="hide-menu">Evaluasi</span>
</li>

@if (session('jenis_tkd') == 'Dana Otonomi Khusus')
<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('kebijakanOtsuses*') ? 'active' : '' }}" href="{{ route('kebijakanOtsuses.index') }}">
        <iconify-icon icon="solar:file-text-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Penetapan Otsus</span>
    </a>
</li>
@endif

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('monitoringTls*') ? 'active' : '' }}" href="{{ route('monitoringTls.index') }}">
        <iconify-icon icon="solar:file-favourite-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Kebijakan Daerah</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('evaluasiRengars*') ? 'active' : '' }}" href="{{ route('evaluasiRengars.index') }}">
        <iconify-icon icon="solar:file-check-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Ren-Gar</span>
    </a>
</li>

@if (session('jenis_tkd') == 'Dana Otonomi Khusus')
<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('rippOtsuses*') ? 'active' : '' }}" href="{{ route('rippOtsuses.index') }}">
        <iconify-icon icon="solar:file-smile-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Sinkron RIPP</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('urusanBersamaOtsuses*') ? 'active' : '' }}" href="{{ route('urusanBersamaOtsuses.index') }}">
        <iconify-icon icon="solar:file-right-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Urusan Bersama</span>
    </a>
</li>
@endif

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('evaluasiKontraks*') ? 'active' : '' }}" href="{{ route('evaluasiKontraks.index') }}">
        <iconify-icon icon="solar:file-left-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Uji Kontrak</span>
    </a>
</li>

@if (session('jenis_tkd') == 'Dana Otonomi Khusus')
<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('silpaOtsuses*') ? 'active' : '' }}" href="{{ route('silpaOtsuses.index') }}">
        <iconify-icon icon="solar:checklist-minimalistic-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Saldo SiLPA</span>
    </a>
</li>
@endif

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('evaluasiIndikators*') ? 'active' : '' }}" href="{{ route('evaluasiIndikators.index') }}">
        <iconify-icon icon="solar:archive-minimalistic-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Efektivitas TKD</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ Request::is('evaluasiLaporans*') ? 'active' : '' }}" href="{{ route('evaluasiLaporans.index') }}">
        <iconify-icon icon="solar:document-add-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Pelaporan TKD</span>
    </a>
</li>

<li class="nav-small-cap">
    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
    <span class="hide-menu">Dokumentasi</span>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="https://drive.google.com/drive/folders/10duSsgmhvra1Nldl8qjpJqCldNsCTqUh?usp=share_link" target="_blank" aria-expanded="false">
        <iconify-icon icon="solar:question-circle-linear" class="aside-icon"></iconify-icon>
        <span class="hide-menu">Petunjuk Teknis</span>
    </a>
</li>