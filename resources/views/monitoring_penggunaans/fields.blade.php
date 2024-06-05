<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $monitoringPenggunaan->tahun }}" readonly disabled>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $monitoringPenggunaan->nama_pemda }}" readonly disabled>
</div>

<div class="col-sm-12 mt-2">
    <h5>A. Informasi Penggunaan</h5>
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="jenis_tkd" id="jenis_tkd" class="form-control" value="{{ session('jenis_tkd') }}" readonly disabled>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tipe_tkd', 'Tipe/Karakteristik TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tipe_tkd', null, ['class' => 'form-control bg-light', 'readonly']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control bg-light', 'readonly']) !!}
</div>

<!-- Penggunaan Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('anggaran_tkd', 'Anggaran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('anggaran_tkd', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('realisasi_tkd', 'Realisasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('realisasi_tkd', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Penyebab Kurang Guna Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_kurang_guna', 'Penyebab Realisasi Rendah') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_kurang_guna', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>