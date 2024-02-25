<!-- Kode Pwk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_pwk', 'Kode Pwk:') !!}
    {!! Form::text('kode_pwk', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Id St Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_st', 'Id St:') !!}
    {!! Form::text('id_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- No Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_laporan', 'No Laporan:') !!}
    {!! Form::text('no_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_laporan', 'Tgl Laporan:') !!}
    {!! Form::text('tgl_laporan', null, ['class' => 'form-control','id'=>'tgl_laporan']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_laporan').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nama Pemda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_laporan', 'Status Laporan:') !!}
    {!! Form::text('status_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- File Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_laporan', 'File Laporan:') !!}
    {!! Form::text('file_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>