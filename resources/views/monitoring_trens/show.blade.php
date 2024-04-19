@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Monitoring Tren {{ session('jenis_tkd') }}</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Monitoring Tren {{ session('jenis_tkd') }}</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <a href="{{ route('monitoringTrens.index') }}" class="btn btn-danger d-flex align-items-center gap-1 fs-3 py-2 px-9">
            <i class="ti ti-arrow-left fs-4"></i>
            Kembali
        </a>
    </div>
</div>

<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Tahun Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('tahun', 'Tahun') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" class="form-control" value="{{ $pemda->tahun }}" readonly disabled />
                </div>

                <!-- Nama Pemda Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" class="form-control" value="{{ $pemda->nama_pemda }}" readonly disabled />
                </div>

                <!-- Nama Pemda Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" class="form-control" value="{{ session('jenis_tkd') }}" readonly disabled />
                </div>

                <div class="col-sm-12 mb-3">
                    <h5>A. Alokasi Transfer ke Daerah</h5>
                </div>
                <div class="col-sm-12 mb-3">
                    @include('monitoring_trens.table_alokasi')
                </div>
                <div class="col-sm-12 mb-3">
                    <h5>B. Penyaluran Transfer ke Daerah</h5>
                </div>
                <!-- <div class="col-sm-3 mb-2">
                    <a class="btn btn-primary float-right" href="{{ url('monitoringPenyalurans/'.$pemda->id.'/'.$pemda->tahun.'/create') }}">
                        + Penyaluran
                    </a>
                </div> -->
                <div class="col-sm-12 mb-3">
                    @include('monitoring_trens.table_penyaluran')
                    @if ($monitoringPenyalurans->sum('penyaluran_tkd') > $monitoringAlokasis->sum('alokasi_tkd'))
                    <p class="text-danger">Catatan : Jumlah Penyaluran melebihi Jumlah Alokasi. Silahkan periksa kembali.</p>
                    @endif
                </div>
                <div class="col-sm-12 mb-3">
                    <h5>C. Penggunaan Transfer ke Daerah</h5>
                </div>
                <!-- <div class="col-sm-3 mb-2">
                    <a class="btn btn-primary float-right" href="{{ url('monitoringPenggunaans/'.$pemda->id.'/'.$pemda->tahun.'/create') }}">
                        + Penggunaan
                    </a>
                </div> -->
                <div class="col-sm-12 mb-3">
                    @include('monitoring_trens.table_penggunaan')
                    @if ($monitoringPenggunaans->sum('realisasi_tkd') > $monitoringPenyalurans->sum('panyaluran_tkd'))
                    <p class="text-danger">Catatan : Jumlah Penggunaan melebihi Jumlah Penyaluran. Silahkan periksa kembali.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection