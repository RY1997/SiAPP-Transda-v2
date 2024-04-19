@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Indikator Efektivitas</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Indikator Efektivitas</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <a href="{{ route('parameterIndikators.create') }}" class="btn btn-success d-flex align-items-center gap-1 fs-3 py-2 px-9">
            <i class="ti ti-plus fs-4"></i>
            Tambah
        </a>
    </div>
</div>

<div class="content">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('parameter_indikators.table')

        </div>

    </div>
</div>

@endsection