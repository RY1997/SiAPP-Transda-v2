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

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jenis_tkd', 'Jenis Tkd:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Kelompok Permasalahan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('kelompok_permasalahan', 'Kelompok Permasalahan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('kelompok_permasalahan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Uraian Permasalahan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('uraian_permasalahan', 'Uraian Permasalahan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::textarea('uraian_permasalahan', null, ['class' => 'form-control', 'rows' => '3', 'readonly disabled']) !!}
</div>

<!-- Nilai Permasalahan Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nilai_permasalahan', 'Nilai Permasalahan:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('nilai_permasalahan', null, ['class' => 'form-control', 'step' => '0.01', 'readonly disabled']) !!}
</div>

<!-- Uraian Rekomendasi Field -->
<div class="form-group col-sm-4">
    {!! Form::label('uraian_rekomendasi', 'Uraian Rekomendasi:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::textarea('uraian_rekomendasi', null, ['class' => 'form-control', 'rows' => '3', 'readonly disabled']) !!}
</div>

<!-- Uraian Tl Field -->
<div class="form-group col-sm-4">
    {!! Form::label('uraian_tl', 'Uraian TL:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::textarea('uraian_tl', null, ['class' => 'form-control', 'rows' => '3', 'readonly disabled']) !!}
</div>

<!-- Nilai Tl Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nilai_tl', 'Nilai TL:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('nilai_tl', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Simpulan Tl Field -->
<div class="form-group col-sm-4">
    {!! Form::label('simpulan_tl', 'Simpulan TL:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('simpulan_tl', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>