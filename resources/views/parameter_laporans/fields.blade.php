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
    {!! Form::label('tahun_laporan', 'Tahun Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::select('tahun_laporan', [
        '' => 'Pilih',
        '2023' => '2023',
        '2024' => '2024'
    ], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Nama Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_laporan', 'Nama Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Batas Penyampaian Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('batas_penyampaian', 'Batas Penyampaian') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('batas_penyampaian', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>