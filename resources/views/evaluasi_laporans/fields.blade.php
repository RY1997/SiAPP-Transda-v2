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

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Nama Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_laporan', 'Nama Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_laporan', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Keberadaan Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('keberadaan_laporan', 'Keberadaan Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('keberadaan_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nomor Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nomor_laporan', 'Nomor Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nomor_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_laporan', 'Tgl Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_laporan" value="{{ !empty($evaluasiLaporan) ? date_format($evaluasiLaporan->tgl_laporan, 'Y-m-d') : '' }}">
</div>

<!-- Nama Laporan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('batas_penyampaian', 'Batas Penyampaian Laporan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('batas_penyampaian', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>


<!-- Tgl Penyampaian Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_penyampaian', 'Tgl Penyampaian') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_penyampaian" value="{{ !empty($evaluasiLaporan) ? date_format($evaluasiLaporan->tgl_penyampaian, 'Y-m-d') : '' }}">
</div>

<!-- Penyebab Tidak Tepat Waktu Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_tidak_tepat_waktu', 'Penyebab Tidak Tepat Waktu') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_tidak_tepat_waktu', null, ['class' => 'form-control', 'rows' => 4]) !!}
</div>