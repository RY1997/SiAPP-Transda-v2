@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Ubah Penyaluran {{ session('jenis_tkd') }}</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="{{ route('monitoringTrens.index') }}">Monitoring Tren {{ session('jenis_tkd') }}</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Ubah Penyaluran</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <a href="{{ route('monitoringTrens.show', $alokasi_id) }}" class="btn btn-danger d-flex align-items-center gap-1 fs-3 py-2 px-9">
            <i class="ti ti-arrow-left fs-4"></i>
            Kembali
        </a>
    </div>
</div>

<div class="content">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($monitoringPenyaluran, ['route' => ['monitoringPenyalurans.update', $monitoringPenyaluran->id], 'method' => 'patch']) !!}

        <div class="card-body">
            <div class="row">
                @include('monitoring_penyalurans.fields')
            </div>
        </div>

        <div class="card-footer d-flex justify-content-end">
            {!! Form::submit('Simpan', ['class' => 'btn btn-primary mx-1']) !!}
            <a href="{{ route('monitoringTrens.show', $alokasi_id) }}" class="btn btn-danger mx-1">Batal</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection