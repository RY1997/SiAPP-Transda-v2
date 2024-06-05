<!-- No Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('no_laporan', 'No Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('no_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_laporan', 'Tgl Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_laporan" value="{{ $pelaporan->tgl_laporan != NULL ? date_format($pelaporan->tgl_laporan, 'Y-m-d') : '' }}">
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Status Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('status_laporan', 'Status Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('status_laporan', ['' => 'Pilih', 'DL3' => 'DL3', 'Final' => 'Final'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- File Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('file_laporan', 'Link Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('file_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>