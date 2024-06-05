<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Dasar Penetapan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('dasar_penetapan', 'Dasar Penetapan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('dasar_penetapan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Penetapan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_penetapan', 'Tgl Penetapan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_penetapan" value="{{ $kebijakanOtsus->tgl_penetapan != NULL ? date_format($kebijakanOtsus->tgl_penetapan, 'Y-m-d') : '' }}">
</div>

<!-- Simpulan Penetapan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('simpulan_penetapan', 'Simpulan Penetapan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('simpulan_penetapan', null, ['class' => 'form-control','rows' => 3]) !!}
</div>