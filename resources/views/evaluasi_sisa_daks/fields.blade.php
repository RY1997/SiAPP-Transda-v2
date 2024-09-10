<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly']) !!}
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'readonly']) !!}
</div>

<!-- Nilai Penyaluran Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_penyaluran', 'Nilai Penyaluran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_penyaluran', null, ['class' => 'form-control','steps' => '0.01']) !!}
</div>

<!-- Nilai Penggunaan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_penggunaan', 'Nilai Penggunaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_penggunaan', null, ['class' => 'form-control','steps' => '0.01']) !!}
</div>

<!-- Sisa Dak Sebelumnya Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('sisa_dak_sebelumnya', 'Sisa Dak Sebelumnya') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('sisa_dak_sebelumnya', null, ['class' => 'form-control','steps' => '0.01']) !!}
</div>

<!-- Penganggaran Bidang Sama Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penganggaran_bidang_sama', 'Penganggaran Bidang Sama') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('penganggaran_bidang_sama', null, ['class' => 'form-control','steps' => '0.01']) !!}
</div>

<!-- Penganggaran Bidang Lainnya Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penganggaran_bidang_lainnya', 'Penganggaran Bidang Lainnya') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('penganggaran_bidang_lainnya', null, ['class' => 'form-control','steps' => '0.01']) !!}
</div>