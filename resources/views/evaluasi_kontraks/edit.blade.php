@extends('layouts.app')

@push('page_title')
Sampel Kontrak
@endpush

@section('header')
<div class="row align-items-center py-4">
    <div class="col-lg-8 col-7">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-white">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('evaluasiKontraks.index') }}">Pelaksanaan Kontrak</a></li>
                <li class="breadcrumb-item"><a href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$evaluasiKontrak->tahun) }}">{{ $suratTugas->nama_pemda }} {{ $evaluasiKontrak->tahun }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengujian</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-4 col-5 text-right">
        <a href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$evaluasiKontrak->tahun) }}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection

@section('content')
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="card">
        {!! Form::model($evaluasiKontrak, ['route' => ['evaluasiKontraks.update', $evaluasiKontrak->id], 'method' => 'patch']) !!}
        <div class="card-body">
            <div class="row">
                @include('evaluasi_kontraks.fields')
            </div>
        </div>
        <div class="card-footer text-right">
            @if ($step == 'pengujian')
            {!! Form::submit('Selesai', ['class' => 'btn btn-primary']) !!}
            @else
            {!! Form::submit('Selanjutnya', ['class' => 'btn btn-primary']) !!}
            @endif
            @if ($step == 'data')
            <a href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$evaluasiKontrak->tahun) }}" class="btn btn-danger">Batal</a>
            @elseif ($step == 'pelaksanaan')
            <a href="?step=data" class="btn btn-danger">Sebelumnya</a>
            @elseif ($step == 'penyelesaian')
            <a href="?step=pelaksanaan" class="btn btn-danger ">Sebelumnya</a>
            @elseif ($step == 'pengujian')
            <a href="?step=penyelesaian" class="btn btn-danger">Sebelumnya</a>
            @endif
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection