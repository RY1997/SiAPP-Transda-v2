@extends('layouts.app')

@push('page_title')
Progres dan Hasil Pengawasan
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-7 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Progres dan Hasil</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-3 col-3 text-right">
        <form class="input-group float-right p-2">
            <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda" />
            </div>
        </form>
    </div>
    <div class="col-lg-2 col-2">
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownProgres" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nasional
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownProgres">
                <a class="dropdown-item" href="{{ route('kertasKerja.progresST') }}">Input ST</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('kertasKerja.progresMonitoring') }}">Isian Monitoring</a>
                <a class="dropdown-item" href="#">Isian Evaluasi</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('flash::message')
    <div class="card">
        <div class="card-body p-0">
            @include('exports.table')
        </div>
    </div>
</div>
@endsection