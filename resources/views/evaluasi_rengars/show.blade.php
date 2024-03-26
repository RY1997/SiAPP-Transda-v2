@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Evaluasi Rengar Details</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-default float-right" href="{{ route('evaluasiRengars.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Tahun Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('tahun', 'Tahun:') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" name="tahun" id="tahun" value="{{ $tahun }}" class="form-control" readonly>
                </div>

                <!-- Nama Pemda Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control" readonly>
                </div>

                <!-- Sumber Dana Field -->
                <div class="col-sm-4 mb-2">
                    {!! Form::label('jenis_tkd', 'Jenis TKD:') !!}
                </div>
                <div class="col-sm-8 mb-2">
                    <input type="text" name="jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" class="form-control" readonly>
                </div>
                @include('evaluasi_rengars.show_table')
            </div>
        </div>
        <div class="card-footer clearfix">
            <div class="float-right">
                @include('adminlte-templates::common.paginate', ['records' => $evaluasiRengars])
            </div>
        </div>
    </div>
</div>
@endsection