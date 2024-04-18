<li class="nav-item">
    <a href="#" class="nav-link">
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <p>Ringkasan TKD</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Pengguna</p>
    </a>
</li>

<li class="nav-header" style="color: #007bff; font-weight: bold;">ADMINISTRASI</li>

<li class="nav-item">
    <a href="{{ route('suratTugas.index') }}" class="nav-link {{ Request::is('suratTugas*') ? 'active' : '' }}">
        <p>Surat Tugas</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pelaporans.index') }}" class="nav-link {{ Request::is('pelaporans*') ? 'active' : '' }}">
        <p>Pelaporan</p>
    </a>
</li>

@if (Auth::user()->role == 'Admin')
    <li class="nav-header" style="color: #007bff; font-weight: bold;">PARAMETER</li>

    <li class="nav-item">
        <a href="{{ route('parameterTkds.index') }}"
            class="nav-link {{ Request::is('parameterTkds*') ? 'active' : '' }}">
            <p>Bidang TKD</p>
        </a>
    </li>


    <li class="nav-item">
        <a href="{{ route('parameterIndikators.index') }}"
            class="nav-link {{ Request::is('parameterIndikators*') ? 'active' : '' }}">
            <p>Indikator Pengujian</p>
        </a>
    </li>


    <li class="nav-item">
        <a href="{{ route('parameterLaporans.index') }}"
            class="nav-link {{ Request::is('parameterLaporans*') ? 'active' : '' }}">
            <p>Laporan Pengelolaan</p>
        </a>
    </li>
@endif


<li class="nav-header" style="color: #007bff; font-weight: bold;">MONITORING</li>


<li class="nav-item">
    <a href="{{ route('monitoringApbds.index') }}"
        class="nav-link {{ Request::is('monitoringApbds*') ? 'active' : '' }}">
        <p>Postur APBD</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('monitoringTrens.index') }}"
        class="nav-link {{ Request::is('monitoringTrens*') || Request::is('monitoringPenyalurans*') || Request::is('monitoringPenggunaans*') ? 'active' : '' }}">
        <p>Pengelolaan TKD
            <!-- <span class="badge badge-danger right">!</span> -->
        </p>
    </a>
</li>


<!-- <li class="nav-item">
    <a href="{{ route('monitoringAlokasis.index') }}"
       class="nav-link {{ Request::is('monitoringAlokasis*') ? 'active' : '' }}">
        <p>Monitoring Alokasis</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('monitoringPenyalurans.index') }}"
       class="nav-link {{ Request::is('monitoringPenyalurans*') ? 'active' : '' }}">
        <p>Monitoring Penyalurans</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('monitoringPenggunaans.index') }}"
       class="nav-link {{ Request::is('monitoringPenggunaans*') ? 'active' : '' }}">
        <p>Monitoring Penggunaans</p>
    </a>
</li> -->



<li class="nav-header" style="color: #007bff; font-weight: bold;">EVALUASI</li>

<li class="nav-item">
    <a href="{{ route('kebijakanOtsuses.index') }}"
        class="nav-link {{ Request::is('kebijakanOtsuses*') ? 'active' : '' }}">
        <p>Kebijakan</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('monitoringTls.index') }}" class="nav-link {{ Request::is('monitoringTls*') ? 'active' : '' }}">
        <p>Jakda
            <!-- <span class="badge badge-danger right">!</span> -->
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('evaluasiRengars.index') }}"
        class="nav-link {{ Request::is('evaluasiRengars*') ? 'active' : '' }}">
        <p>Perencanaan dan Penganggaran</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rippOtsuses.index') }}" class="nav-link {{ Request::is('rippOtsuses*') ? 'active' : '' }}">
        <p>Sinkronisasi RIPP</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('urusanBersamaOtsuses.index') }}"
        class="nav-link {{ Request::is('urusanBersamaOtsuses*') ? 'active' : '' }}">
        <p>Urusan Bersama</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('evaluasiKontraks.index') }}"
        class="nav-link {{ Request::is('evaluasiKontraks*') ? 'active' : '' }}">
        <p>Pelaksanaan (Uji Petik)</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('silpaOtsuses.index') }}" class="nav-link {{ Request::is('silpaOtsuses*') ? 'active' : '' }}">
        <p>SiLPA</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('evaluasiIndikators.index') }}"
        class="nav-link {{ Request::is('evaluasiIndikators*') ? 'active' : '' }}">
        <p>Efektivitas Pelaksanaan</p>
    </a>
</li>


<li class="nav-item mb-5">
    <a href="{{ route('evaluasiLaporans.index') }}"
        class="nav-link {{ Request::is('evaluasiLaporans*') ? 'active' : '' }}">
        <p>Pelaporan TKD</p>
    </a>
</li>
