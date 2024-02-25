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

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_tkd', 'Jenis Tkd:') !!}
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Kelompok Permasalahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelompok_permasalahan', 'Kelompok Permasalahan:') !!}
    {!! Form::text('kelompok_permasalahan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Uraian Permasalahan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_permasalahan', 'Uraian Permasalahan:') !!}
    {!! Form::textarea('uraian_permasalahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Permasalahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_permasalahan', 'Nilai Permasalahan:') !!}
    {!! Form::number('nilai_permasalahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Rekomendasi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_rekomendasi', 'Uraian Rekomendasi:') !!}
    {!! Form::textarea('uraian_rekomendasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Tl Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_tl', 'Uraian Tl:') !!}
    {!! Form::textarea('uraian_tl', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Tl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_tl', 'Nilai Tl:') !!}
    {!! Form::number('nilai_tl', null, ['class' => 'form-control']) !!}
</div>

<!-- Simpulan Tl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('simpulan_tl', 'Simpulan Tl:') !!}
    {!! Form::text('simpulan_tl', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>