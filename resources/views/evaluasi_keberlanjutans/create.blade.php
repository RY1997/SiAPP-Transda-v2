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
                <li class="breadcrumb-item"><a href="{{ url('evaluasiKeberlanjutans/'.$suratTugas->id.'?tahun='.$tahun) }}">{{ $suratTugas->nama_pemda }} {{ $tahun }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Kegiatan</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
        <a href="{{ url('evaluasiKeberlanjutans/'.$suratTugas->id.'?tahun='.$tahun) }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::open(['route' => 'evaluasiKeberlanjutans.store']) !!}
        <div class="card-body">
            <div class="row">
                @include('evaluasi_keberlanjutans.fields')
            </div>
        </div>
        <div class="card-footer text-right">
            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
            <a href="{{ url('evaluasiKeberlanjutans/'.$suratTugas->id.'?tahun='.$tahun) }}" class="btn btn-danger">Batal</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection