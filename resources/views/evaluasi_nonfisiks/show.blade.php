@extends('layouts.app')

@push('page_title')
Pelaksanaan Non Fisik
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('evaluasiNonfisiks.index') }}">Pelaksanaan Non Fisik</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $suratTugas->nama_pemda }} {{ $tahun }}</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
        <a href="{{ route('evaluasiNonfisiks.index') }}" class="btn btn-danger">Kembali</a>
        <a href="{{ url('evaluasiNonfisiks/'.$suratTugas->id.'/'.$tahun.'/create') }}" class="btn btn-default">Tambah Kegiatan</a>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('flash::message')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Nama Pemda Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control mb-1" readonly disabled>
                </div>

                <!-- Tahun Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('tahun', 'Tahun') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" class="form-control" name="tahun" id="tahun" value="{{ $tahun }}" readonly disabled />
                </div>

                <!-- Jenis Tkd Field -->
                <div class="col-sm-3 mb-3">
                    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
                </div>
                <div class="col-sm-9 mb-3">
                    <input type="text" class="form-control" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly disabled />
                </div>
                <div class="col-sm-12 mb-3">
                    @include('evaluasi_Nonfisiks.show_table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection