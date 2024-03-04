@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Evaluasi Kontraks</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-3">
            @include('evaluasi_kontraks.index_table')

            <div class="card-footer clearfix">
                <div class="float-right">
                    @include('adminlte-templates::common.paginate', ['records' => $suratTugas])
                </div>
            </div>
        </div>

    </div>
</div>

@endsection