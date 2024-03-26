@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Evaluasi Rengar</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($evaluasiRengar, ['route' => ['evaluasiRengars.update', $evaluasiRengar->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('evaluasi_rengars.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('evaluasiRengars/'.$st_id->id.'/'.$evaluasiRengar->tahun) }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
