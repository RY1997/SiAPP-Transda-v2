<!-- Kode Pwk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_pwk', 'Kode Pwk:') !!}
    {!! Form::text('kode_pwk', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- No St Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_st', 'No St:') !!}
    {!! Form::text('no_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl St Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_st', 'Tgl St:') !!}
    {!! Form::text('tgl_st', null, ['class' => 'form-control','id'=>'tgl_st']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_st').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nama Penugasan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_penugasan', 'Nama Penugasan:') !!}
    {!! Form::text('nama_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Jenis Penugasan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_penugasan', 'Jenis Penugasan:') !!}
    {!! Form::text('jenis_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Mulai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_mulai', 'Tgl Mulai:') !!}
    {!! Form::text('tgl_mulai', null, ['class' => 'form-control','id'=>'tgl_mulai']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_mulai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tgl Akhir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_akhir', 'Tgl Akhir:') !!}
    {!! Form::text('tgl_akhir', null, ['class' => 'form-control','id'=>'tgl_akhir']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_akhir').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Status St Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_st', 'Status St:') !!}
    {!! Form::text('status_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- File St Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_st', 'File St:') !!}
    {!! Form::text('file_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tw Penugasan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tw_penugasan', 'Tw Penugasan:') !!}
    {!! Form::text('tw_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tahun Penugasan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_penugasan', 'Tahun Penugasan:') !!}
    {!! Form::text('tahun_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>