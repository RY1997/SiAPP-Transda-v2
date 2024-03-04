<!-- Tahun Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tahun', 'Tahun:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Kode Program Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_program', 'Program:') !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::text('kode_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::text('nama_program', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Kode Kegiatan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_kegiatan', 'Kegiatan:') !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::text('kode_kegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::text('nama_kegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Kode Subkegiatan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_subkegiatan', 'Subkegiatan:') !!}
</div>
<div class="form-group col-sm-2">
    {!! Form::text('kode_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::text('nama_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Sumber Dana Field -->
<div class="form-group col-sm-4">
    {!! Form::label('sumber_dana', 'Sumber Dana:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('sumber_dana', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Nilai Anggaran Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nilai_anggaran', 'Nilai Anggaran:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('nilai_anggaran', null, ['class' => 'form-control', 'readonly disabled']) !!}
</div>

<!-- Urusan Subkegiatan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('urusan_subkegiatan', 'Dukungan Urusan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('urusan_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nilai Realisasi Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nilai_realisasi', 'Nilai Realisasi:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('nilai_realisasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Relevansi Subkegiatan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('relevansi_subkegiatan', 'Relevansi Subkegiatan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('relevansi_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pelaksanaan Subkegiatan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('pelaksanaan_subkegiatan', 'Pelaksanaan Subkegiatan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('pelaksanaan_subkegiatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>