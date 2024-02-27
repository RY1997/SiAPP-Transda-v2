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

<div class="content px-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Nama Pemda Field -->
                <div class="col-sm-4 bt-2">
                    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
                </div>
                <div class="col-sm-8 bt-2">
                    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control" readonly>
                </div>

                <!-- Tahun Field -->
                <div class="col-sm-4 bt-2">
                    {!! Form::label('tahun', 'Tahun:') !!}
                </div>
                <div class="col-sm-8 bt-2">
                    <input type="text" name="tahun" id="tahun" value="{{ $tahun }}" readonly />
                </div>

                <!-- Jenis Tkd Field -->
                <div class="col-sm-4 bt-2">
                    {!! Form::label('jenis_tkd', 'Jenis TKD:') !!}
                </div>
                <div class="col-sm-8 bt-2">
                    <input type="text" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly />
                </div>

                <div class="col-sm-12 bt-2">
                    @include('evaluasi_kontraks.show_table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection