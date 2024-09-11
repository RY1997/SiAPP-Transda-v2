@extends('layouts.app')

@push('page_title')
Evaluasi Kebijakan Pengalokasian
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Kebijakan Pengalokasian</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
    <a href="{{ route('evaluasiKebijakanAlokasis.create') }}" class="btn btn-success">Tambah Kebijakan</a>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('flash::message')
    <div class="card">
        <div class="card-body p-0">
            @include('evaluasi_kebijakan_alokasis.table')
        </div>
    </div>
</div>
@endsection