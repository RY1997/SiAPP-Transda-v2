<!-- Tahun Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('tahun', 'Tahun:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Dasar Penetapan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('dasar_penetapan', 'Dasar Penetapan:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('dasar_penetapan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Penetapan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('tgl_penetapan', 'Tgl Penetapan:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('tgl_penetapan', null, ['class' => 'form-control','id'=>'tgl_penetapan']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#tgl_penetapan').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        sideBySide: true
    })
</script>
@endpush

<!-- Simpulan Penetapan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('simpulan_penetapan', 'Simpulan Penetapan:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::textarea('simpulan_penetapan', null, ['class' => 'form-control','rows' => 3]) !!}
</div>