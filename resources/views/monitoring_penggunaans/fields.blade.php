<!-- Tahun Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tahun', 'Tahun:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $monitoringPenggunaan->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $pemda->nama_pemda }}" readonly>
</div>

<div class="col-sm-12 mt-2">
    <h5>A. Informasi Penggunaan</h5>
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('jenis_tkd', 'Jenis TKD:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" name="jenis_tkd" id="jenis_tkd" class="form-control" value="{{ session('jenis_tkd') }}" readonly>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('bidang_tkd', 'Bidang TKD:') !!}
</div>
<div class="form-group col-sm-8">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option selected>Pilih</option>
        @if ($monitoringPenggunaan)
        @foreach ($bidang_tkds as $bidang_tkd)
        <option value="{{ $bidang_tkd->bidang_tkd }}" {{ $bidang_tkd->bidang_tkd == $monitoringPenggunaan->bidang_tkd ? 'selected' : '' }}>{{ $bidang_tkd->bidang_tkd }}</option>
        @endforeach
        @else
        @foreach ($bidang_tkds as $bidang_tkd)
        <option value="{{ $bidang_tkd->bidang_tkd }}">{{ $bidang_tkd->bidang_tkd }}</option>
        @endforeach
        @endif
    </select>
</div>

<!-- Penggunaan Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('anggaran_tkd', 'Anggaran:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('anggaran_tkd', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4">
    {!! Form::label('realisasi_tkd', 'Realisasi:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('realisasi_tkd', null, ['class' => 'form-control']) !!}
</div>

<!-- Penyebab Kurang Guna Field -->
<div class="form-group col-sm-4">
    {!! Form::label('penyebab_kurang_guna', 'Penyebab Realisasi Rendah:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::textarea('penyebab_kurang_guna', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>