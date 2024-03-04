@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Monitoring Penggunaan</h1>
                </div>
                <div class="col-sm-6">
                <a class="btn btn-default float-right" href="{{ url('monitoringTrens/'.$pemda->id.'/'.$tahun) }}">
                    Back
                </a>
            </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'monitoringPenggunaans.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('monitoring_penggunaans.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('monitoringTrens/'.$pemda->id.'/'.$tahun) }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
