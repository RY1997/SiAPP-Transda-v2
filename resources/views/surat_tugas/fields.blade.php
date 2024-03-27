<!-- No St Field -->
<div class="form-group col-sm-4">
    {!! Form::label('no_st', 'No St:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('no_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl St Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tgl_st', 'Tgl St:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('tgl_st', null, ['class' => 'form-control','id'=>'tgl_st']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#tgl_st').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        sideBySide: true
    })
</script>
@endpush

<!-- Nama Penugasan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_penugasan', 'Nama Penugasan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('nama_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Jenis Penugasan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jenis_penugasan', 'Jenis Penugasan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('jenis_penugasan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tahun Penugasan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tahun_penugasan', 'Tahun Penugasan:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" class="form-control" id="tahun_penugasan" name="tahun_penugasan" value="2024" readonly>
</div>

<!-- Tahun Penugasan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jenis_tkd', 'Lingkup Penugasan:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" class="form-control" id="jenis_tkd" name="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Mulai Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tgl_mulai', 'Tgl Mulai:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('tgl_mulai', null, ['class' => 'form-control','id'=>'tgl_mulai']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#tgl_mulai').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        sideBySide: true
    })
</script>
@endpush

<!-- Tgl Akhir Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tgl_akhir', 'Tgl Akhir:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('tgl_akhir', null, ['class' => 'form-control','id'=>'tgl_akhir']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#tgl_akhir').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        sideBySide: true
    })
</script>
@endpush

<!-- Status St Field -->
<div class="form-group col-sm-4">
    {!! Form::label('status_st', 'Status St:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('status_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- File St Field -->
<div class="form-group col-sm-4">
    {!! Form::label('file_st', 'File St:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::file('file_st', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>