<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
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
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('subbidang_tkd', 'Subbidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('subbidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('mon_penyaluran', 'Uraian Monitoring Penyaluran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('mon_penyaluran', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('eva_penyaluran', 'Uraian Evaluasi Penyaluran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('eva_penyaluran', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('mon_penggunaan', 'Uraian Monitoring Penggunaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('mon_penggunaan', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('eva_penggunaan', 'Uraian Evaluasi Penggunaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('eva_penggunaan', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<!-- Alokasi Minimal Field -->
<!-- <div class="form-group col-sm-3 mb-3">
    {!! Form::label('alokasi_minimal', 'Alokasi Minimal (%)') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('alokasi_minimal', null, ['class' => 'form-control']) !!}
</div> -->