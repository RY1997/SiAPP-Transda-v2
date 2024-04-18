@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Evaluasi Kontrak Details</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary float-right" href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$tahun.'/create') }}">
                    Add New
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Nama Pemda Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control mb-1" readonly>
                </div>

                <!-- Tahun Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('tahun', 'Tahun:') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" class="form-control" name="tahun" id="tahun" value="{{ $tahun }}" readonly />
                </div>

                <!-- Jenis Tkd Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('jenis_tkd', 'Jenis TKD:') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" class="form-control" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly />
                </div>
                @include('evaluasi_kontraks.show_table')
            </div>
        </div>
    </div>
</div>
@endsection