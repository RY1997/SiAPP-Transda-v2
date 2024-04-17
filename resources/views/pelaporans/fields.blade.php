<!-- No Laporan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('no_laporan', 'No Laporan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('no_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Laporan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tgl_laporan', 'Tgl Laporan:') !!}
</div>
<div class="form-group col-sm-8">
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
<div class="form-group col-sm-4">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Laporan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('status_laporan', 'Status Laporan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::select('status_laporan', ['' => 'Pilih', 'DL3' => 'DL3', 'Final' => 'Final'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- File Laporan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('file_laporan', 'Link Laporan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('file_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>