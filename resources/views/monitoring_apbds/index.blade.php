@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Monitoring APBD</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Monitoring APBD</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <form class="input-group col-sm-4 float-right mb-2">
            <input class="form-control text-sm" type="text" name="nama_pemda" value="{{ $nama_pemda ?? NULL }}" placeholder="Ketik Nama Pemda" />
            <button class="btn btn-success">Cari</button>
        </form>
    </div>
</div>

<div class="content">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('monitoring_apbds.table')

        </div>

    </div>
</div>

@endsection