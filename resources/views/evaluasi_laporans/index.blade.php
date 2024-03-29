@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Evaluasi Laporans</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-3">
                @include('evaluasi_laporans.index_table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                    @include('adminlte-templates::common.paginate', ['records' => $evaluasiLaporans])
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

