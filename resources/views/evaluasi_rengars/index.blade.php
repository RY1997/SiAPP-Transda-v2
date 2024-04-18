@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Evaluasi Rengars</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('evaluasi_rengars.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $suratTugas])
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

