<!-- Jenis Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jenis_tkd', 'Jenis Tkd:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::select('jenis_tkd', [
        '' => 'Pilih',
        'Dana Otonomi Khusus' => 'Dana Otonomi Khusus',
        'Dana Tambahan Infrastruktur' => 'Dana Tambahan Infrastruktur',
        'Dana Alokasi Umum' => 'Dana Alokasi Umum',
        'Dana Alokasi Khusus' => 'Dana Alokasi Khusus',
        'Dana Bagi Hasil' => 'Dana Bagi Hasil'
    ], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('bidang_tkd', 'Bidang Tkd:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Uraian Indikator Field -->
<div class="form-group col-sm-4">
    {!! Form::label('uraian_indikator', 'Uraian Indikator:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('uraian_indikator', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Satuan Indikator Field -->
<div class="form-group col-sm-4">
    {!! Form::label('satuan_indikator', 'Satuan Indikator:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('satuan_indikator', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>