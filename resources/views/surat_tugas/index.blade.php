@extends('layouts.app')

@push('page_title')
Pelaksanaan Penugasan
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Surat Tugas</li>
            </ol>
        </nav>
    </div>
    <div class="row col-lg-4 col-5 text-right">
        <a class="btn btn-success" href="{{ route('suratTugas.create') }}">Tambah</a>
        <form class="input-group">
            <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda" />
            </div>
        </form>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('flash::message')
    <div class="card">
        <div class="card-body p-0">
            @include('surat_tugas.table')
        </div>
    </div>
</div>
@endsection