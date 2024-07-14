<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Jenis Tkd Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis Tkd') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div> -->

<!-- Kelompok Permasalahan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('kelompok_permasalahan', 'Kelompok Permasalahan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('kelompok_permasalahan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Uraian Permasalahan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_permasalahan', 'Dampak Permasalahan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_permasalahan', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Nilai Permasalahan Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_permasalahan', 'Nilai Permasalahan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_permasalahan', null, ['class' => 'form-control', 'step' => '0.01', 'readonly']) !!}
</div> -->

<!-- Uraian Rekomendasi Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_rekomendasi', 'Penyebab Permasalahan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_rekomendasi', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Uraian Tl Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_tl', 'Tindak Lanjut yang Dilakukan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_tl', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Nilai Tl Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_tl', 'Nilai TL') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_tl', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div> -->

<!-- Simpulan Tl Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('simpulan_tl', 'Simpulan TL') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('simpulan_tl', null, ['class' => 'form-control','rows' => 3]) !!}
</div>