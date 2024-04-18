@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Edit Evaluasi Kontrak</h1>
            </div>
        </div>
    </div>
</section>

<div class="content">

    @include('adminlte-templates::common.errors')

    <div class="card">

        {!! Form::model($evaluasiKontrak, ['route' => ['evaluasiKontraks.update', $evaluasiKontrak->id], 'method' => 'patch']) !!}

        <div class="card-body">
            <div class="row">
                @include('evaluasi_kontraks.fields')
            </div>
        </div>

        <div class="card-footer">
            @if ($step == 'data')
            <a href="{{ url('evaluasiKontraks/'.$suratTugas->id.'/'.$evaluasiKontrak->tahun) }}" class="btn btn-default">Batal</a>
            @elseif ($step == 'pelaksanaan')
            <a href="?step=data" class="btn btn-default">Sebelumnya</a>
            @elseif ($step == 'penyelesaian')
            <a href="?step=pelaksanaan" class="btn btn-default">Sebelumnya</a>
            @elseif ($step == 'pengujian')
            <a href="?step=penyelesaian" class="btn btn-default">Sebelumnya</a>
            @endif
            @if ($step == 'pengujian')
            {!! Form::submit('Selesai', ['class' => 'btn btn-primary']) !!}
            @else
            {!! Form::submit('Selanjutnya', ['class' => 'btn btn-primary']) !!}
            @endif
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection