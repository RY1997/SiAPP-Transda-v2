@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Monitoring Alokasi Details</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-default float-right" href="{{ route('monitoringTrens.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Tahun Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('tahun', 'Tahun') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" class="form-control" value="{{ $pemda->tahun }}" readonly />
                </div>

                <!-- Nama Pemda Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" class="form-control" value="{{ $pemda->nama_pemda }}" readonly />
                </div>

                <!-- Nama Pemda Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" class="form-control" value="{{ session('jenis_tkd') }}" readonly />
                </div>

                <div class="col-sm-12 mb-2">
                    <h5>A. Alokasi Transfer ke Daerah</h5>
                </div>
                <div class="col-sm-12 mb-2">
                    @include('monitoring_trens.table_alokasi')
                </div>
                <div class="col-sm-8 mb-2">
                    <h5>B. Penyaluran Transfer ke Daerah</h5>
                </div>
                <!-- <div class="col-sm-4 mb-2">
                    <a class="btn btn-primary float-right" href="{{ url('monitoringPenyalurans/'.$pemda->id.'/'.$pemda->tahun.'/create') }}">
                        + Penyaluran
                    </a>
                </div> -->
                <div class="col-sm-12 mb-2">
                    @include('monitoring_trens.table_penyaluran')
                </div>
                <div class="col-sm-8 mb-2">
                    <h5>C. Penggunaan Transfer ke Daerah</h5>
                </div>
                <!-- <div class="col-sm-4 mb-2">
                    <a class="btn btn-primary float-right" href="{{ url('monitoringPenggunaans/'.$pemda->id.'/'.$pemda->tahun.'/create') }}">
                        + Penggunaan
                    </a>
                </div> -->
                <div class="col-sm-12 mb-2">
                    @include('monitoring_trens.table_penggunaan')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection