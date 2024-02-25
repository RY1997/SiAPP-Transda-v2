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

<!-- Item Ripp Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('item_ripp', 'Item Ripp:') !!}
    {!! Form::textarea('item_ripp', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Ripp Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_ripp', 'Uraian Ripp:') !!}
    {!! Form::textarea('uraian_ripp', null, ['class' => 'form-control']) !!}
</div>

<!-- Penyebab Ripp Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_ripp', 'Penyebab Ripp:') !!}
    {!! Form::textarea('penyebab_ripp', null, ['class' => 'form-control']) !!}
</div>