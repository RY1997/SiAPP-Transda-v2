@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Monitoring Penggunaans</h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary float-right" href="{{ route('monitoringPenggunaans.create') }}">
                    Add New
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('monitoring_penggunaans.table')

            <div class="card-footer clearfix">
                <div class="float-right">
                    @include('adminlte-templates::common.paginate', ['records' => $daftarPemdas])
                </div>
            </div>
        </div>

    </div>
</div>

@endsection