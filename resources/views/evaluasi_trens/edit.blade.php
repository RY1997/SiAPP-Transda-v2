@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Monitoring Alokasi</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($monitoringAlokasi, ['route' => ['monitoringAlokasis.update', $monitoringAlokasi->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('monitoring_alokasis.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('monitoringAlokasis.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
