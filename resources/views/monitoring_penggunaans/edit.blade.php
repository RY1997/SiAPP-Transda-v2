@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Monitoring Penggunaan</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($monitoringPenggunaan, ['route' => ['monitoringPenggunaans.update', $monitoringPenggunaan->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('monitoring_penggunaans.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('monitoringTrens.show', $alokasi_id) }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
