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

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bidang_tkd', 'Bidang Tkd:') !!}
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Alokasi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alokasi_id', 'Alokasi Id:') !!}
    {!! Form::text('alokasi_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Penggunaan Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('penggunaan_tkd', 'Penggunaan Tkd:') !!}
    {!! Form::number('penggunaan_tkd', null, ['class' => 'form-control']) !!}
</div>

<!-- Penyebab Kurang Guna Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_kurang_guna', 'Penyebab Kurang Guna:') !!}
    {!! Form::textarea('penyebab_kurang_guna', null, ['class' => 'form-control']) !!}
</div>