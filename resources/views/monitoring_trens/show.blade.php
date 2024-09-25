@extends('layouts.app')

@push('page_title')
Pengelolaan TKD
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('monitoringTrens.index') }}">Pengelolaan TKD</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pemda->nama_pemda }} {{ $pemda->tahun }}</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
        <a href="{{ route('monitoringTrens.index') }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('flash::message')
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
                    @if ($monitoringPenggunaans->sum('realisasi_tkd') > $monitoringPenyalurans->sum('penyaluran_tkd'))
                    <p class="text-danger">Catatan : Jumlah Penggunaan melebihi Jumlah Penyaluran. Silahkan periksa kembali.</p>
                    @endif
                </div>
                @if ($monitoringAlokasi->jenis_tkd == 'Dana Alokasi Khusus')
                <div class="col-sm-12 mb-3">
                    <h5>D. Sisa Dana Transfer ke Daerah</h5>
                </div>
                <div class="col-sm-12 mb-3">
                    @include('monitoring_trens.table_sisa_dana')
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection