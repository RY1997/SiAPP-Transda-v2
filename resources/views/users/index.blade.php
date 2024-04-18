@extends('layouts.app')

@section('content')
<div class="d-md-flex align-items-center justify-content-between mb-7">
    <div class="mb-4 mb-md-0">
        <h4 class="fs-6 mb-0">Daftar Pengguna</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-primary text-decoration-none" href="home">Home</a>
                </li>
                <li class="text-muted breadcrumb-item active" aria-current="page">Akun Pengguna</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex align-items-center justify-content-between gap-6">
        <form class="input-group col-sm-4 float-right mb-2">
            <input class="form-control text-sm" type="text" name="name" value="{{ $search['name'] ?? NULL }}" placeholder="Ketik Nama" />
            <button class="btn btn-success">Cari</button>
        </form>
    </div>
</div>

<div class="content">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0">
            @include('users.table')

            <div class="card-footer clearfix">
                <div class="float-right d-flex justify-content-center">
                    @include('adminlte-templates::common.paginate', ['records' => $users])
                </div>
            </div>
        </div>

    </div>
</div>

@endsection