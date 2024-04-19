@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Perencanaan dan Penganggaran {{ session('jenis_tkd') }}</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Perencanaan dan Penganggaran {{ session('jenis_tkd') }}</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <a href="{{ route('evaluasiRengars.index') }}" class="btn btn-danger d-flex align-items-center gap-1 fs-3 py-2 px-9">
            <i class="far fa-arrow-left fs-4"></i>
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
                    <input type="text" name="tahun" id="tahun" value="{{ $tahun }}" class="form-control" readonly disabled>
                </div>

                <!-- Nama Pemda Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control" readonly disabled>
                </div>

                <!-- Sumber Dana Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" class="form-control" readonly disabled>
                </div>
                <div class="col-sm-12 mb-3">
                    @include('evaluasi_rengars.show_table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection