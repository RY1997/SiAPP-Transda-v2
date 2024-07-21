@extends('layouts.app')

@push('page_title')
Ubah Pengujian Non Fisik
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('evaluasiNonfisiks.index') }}">Pelaksanaan Kontrak</a></li>
                <li class="breadcrumb-item"><a href="{{ url('evaluasiNonfisiks/'.$suratTugas->id.'/'.$evaluasiNonfisik->tahun) }}">{{ $suratTugas->nama_pemda }} {{ $evaluasiNonfisik->tahun }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ubah Pengujian</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
        <a href="{{ url('evaluasiNonfisiks/'.$suratTugas->id.'/'.$evaluasiNonfisik->tahun) }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::model($evaluasiNonfisik, ['route' => ['evaluasiNonfisiks.update', $evaluasiNonfisik->id], 'method' => 'patch']) !!}
        <div class="card-body">
            <div class="row">
                @include('evaluasi_Nonfisiks.fields')
            </div>
        </div>
        <div class="card-footer text-right">
            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
            <a href="{{ url('evaluasiNonfisiks/'.$suratTugas->id.'/'.$evaluasiNonfisik->tahun) }}" class="btn btn-danger">Batal</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection