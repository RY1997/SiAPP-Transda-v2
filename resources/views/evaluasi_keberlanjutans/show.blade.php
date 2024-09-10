@extends('layouts.app')

@push('page_title')
Keberlanjutan Kegiatan
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('evaluasiKeberlanjutans.index') }}">Keberlanjutan Kegiatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $suratTugas->nama_pemda }} {{ $tahun }}</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
        <a href="{{ url('evaluasiKeberlanjutans/create?st='.$suratTugas->id.'&tahun='.$tahun) }}" class="btn btn-success">Tambah Kegiatan</a>
        <a href="{{ route('evaluasiKeberlanjutans.index') }}" class="btn btn-danger">Kembali</a>
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
                    @include('evaluasi_keberlanjutans.show_table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection