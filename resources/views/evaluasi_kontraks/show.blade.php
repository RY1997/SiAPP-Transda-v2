@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Pelaksanaan Kontrak {{ session('jenis_tkd') }}</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Pelaksanaan Kontrak {{ session('jenis_tkd') }}</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <a href="{{ route('evaluasiKontraks.index') }}" class="btn btn-danger d-flex align-items-center gap-1 fs-3 py-2 px-9">
            <i class="ti ti-arrow-left fs-4"></i>
            Kembali
        </a>
        <a class="btn btn-success d-flex align-items-center gap-1 fs-3 py-2 px-9 mx-1" href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$tahun.'/create') }}">
            <i class="ti ti-plus fs-4"></i>
            Tambah
        </a>
    </div>
</div>

<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Nama Pemda Field -->
                <div class="col-sm-4 mb-3">
                    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
                </div>
                <div class="col-sm-8 mb-3">
                    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control mb-1" readonly disabled>
                </div>

                <!-- Tahun Field -->
                <div class="col-sm-4 mb-3">
                    {!! Form::label('tahun', 'Tahun') !!}
                </div>
                <div class="col-sm-8 mb-3">
                    <input type="text" class="form-control" name="tahun" id="tahun" value="{{ $tahun }}" readonly disabled />
                </div>

                <!-- Jenis Tkd Field -->
                <div class="col-sm-4 mb-3">
                    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
                </div>
                <div class="col-sm-8 mb-3">
                    <input type="text" class="form-control" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly disabled />
                </div>
                <div class="col-sm-12 mb-3">
                    @include('evaluasi_kontraks.show_table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection