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

<!-- Alokasi Minimal Field -->
<div class="form-group col-sm-4">
    {!! Form::label('alokasi_minimal', 'Alokasi Minimal (%):') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('alokasi_minimal', null, ['class' => 'form-control']) !!}
</div>