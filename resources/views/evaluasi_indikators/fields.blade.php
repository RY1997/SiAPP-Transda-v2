<!-- Tahun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun', 'Tahun:') !!}
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Kode Pwk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_pwk', 'Kode Pwk:') !!}
    {!! Form::text('kode_pwk', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Uraian Indikator Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uraian_indikator', 'Uraian Indikator:') !!}
    {!! Form::text('uraian_indikator', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target', 'Target:') !!}
    {!! Form::number('target', null, ['class' => 'form-control']) !!}
</div>

<!-- Realisasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('realisasi', 'Realisasi:') !!}
    {!! Form::number('realisasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Cutoff Capaian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cutoff_capaian', 'Cutoff Capaian:') !!}
    {!! Form::text('cutoff_capaian', null, ['class' => 'form-control','id'=>'cutoff_capaian']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#cutoff_capaian').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Sumber Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sumber_data', 'Sumber Data:') !!}
    {!! Form::text('sumber_data', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>