@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Evaluasi Indikator</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'evaluasiIndikators.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('evaluasi_indikators.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('evaluasiIndikators.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
