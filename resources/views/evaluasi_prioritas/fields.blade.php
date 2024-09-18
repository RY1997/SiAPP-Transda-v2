<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="tahun" id="tahun" value="{{ $tahun }}" class="form-control" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control" readonly>
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="text" name="jenis_tkd" id="jenis_tkd" value="{{ $suratTugas->jenis_tkd }}" class="form-control" readonly>
</div>

<!-- Subbidang Tkd Field -->
<div class="form-group col-sm-3">
    {!! Form::label('subbidang_tkd', 'Jenis DBH') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="subbidang_tkd" name="subbidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="DBH PPh" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH PPh' ? 'selected' : '' }}>DBH PPh</option>
        <option value="DBH PBB" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH PBB' ? 'selected' : '' }}>DBH PBB</option>
        <option value="DBH CHT" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH CHT' ? 'selected' : '' }}>DBH CHT</option>
        <option value="DBH Kehutanan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Kehutanan' ? 'selected' : '' }}>DBH Kehutanan</option>
        <option value="DBH Dana Reboisasi" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Dana Reboisasi' ? 'selected' : '' }}>DBH Dana Reboisasi</option>
        <option value="DBH Migas" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Migas' ? 'selected' : '' }}>DBH Migas</option>
        <option value="DBH Minerba" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Minerba' ? 'selected' : '' }}>DBH Minerba</option>
        <option value="DBH Perikanan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Perikanan' ? 'selected' : '' }}>DBH Perikanan</option>
        <option value="DBH Panas Bumi" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Panas Bumi' ? 'selected' : '' }}>DBH Panas Bumi</option>
        <option value="DBH Sawit" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'DBH Sawit' ? 'selected' : '' }}>DBH Sawit</option>
    </select>
</div>

<!-- Nama Skpd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_skpd', 'Nama OPD/SKPD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('nama_skpd', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Nama Program Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_program', 'Nama Program') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('nama_program', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Nama Kegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_kegiatan', 'Nama Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('nama_kegiatan', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Nilai Anggaran Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nilai_anggaran', 'Nilai Anggaran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_anggaran', null, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}
</div>

<!-- Nilai Realisasi Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nilai_realisasi', 'Nilai Realisasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_realisasi', null, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}
</div>

<!-- Prioritas Kegiatan Field -->
<div class="form-group col-sm-3">
    {!! Form::label('prioritas_kegiatan', 'Prioritas Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="prioritas_kegiatan" name="prioritas_kegiatan">
        <option value="" selected>Pilih</option>
        <option value="Prioritas" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_kegiatan == 'Prioritas' ? 'selected' : '' }}>Prioritas</option>
        <option value="Non Prioritas" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_kegiatan == 'Non Prioritas' ? 'selected' : '' }}>Non Prioritas</option>
    </select>
</div>

<!-- Prioritas Penggunaan Field -->
<div class="form-group col-sm-3">
    {!! Form::label('prioritas_penggunaan', 'Prioritas Penggunaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
<select class="form-control custom-select" id="prioritas_penggunaan" name="prioritas_penggunaan">
        <option value="" selected>Pilih</option>
        <option value="" disabled>DBH CHT (PMK 215/2021)</option>
        <option value="Bidang Kesejahteraan Masyarakat: Pembinaan lingkungan sosial pada kegiatan pemberian bantuan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'Bidang Kesejahteraan Masyarakat: Pembinaan lingkungan sosial pada kegiatan pemberian bantuan' ? 'selected' : '' }}>Bidang Kesejahteraan Masyarakat: Pembinaan lingkungan sosial pada kegiatan pemberian bantuan</option>
        <option value="Bidang Kesejahteraan Masyarakat: Peningkatan kualitas bahan baku; Pembinaan industri; Pembinaan lingkungan sosial" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'Bidang Kesejahteraan Masyarakat: Peningkatan kualitas bahan baku; Pembinaan industri; Pembinaan lingkungan sosial' ? 'selected' : '' }}>Bidang Kesejahteraan Masyarakat: Peningkatan kualitas bahan baku; Pembinaan industri; Pembinaan lingkungan sosial</option>
        <option value="Bidang Penegakan Hukum" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'Bidang Penegakan Hukum' ? 'selected' : '' }}>Bidang Penegakan Hukum</option>
        <option value="Bidang Kesehatan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'Bidang Kesehatan' ? 'selected' : '' }}>Bidang Kesehatan</option>
        <option value="" disabled>DBH Dana Reboisasi (PMK 230/2017)</option>
        <option value="DBH Dana Reboisasi (PMK 230/2017)" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'DBH Dana Reboisasi (PMK 230/2017)' ? 'selected' : '' }}>DBH Dana Reboisasi (PMK 230/2017)</option>
        <option value="" disabled>DBH Sawit (PMK 91/2023)</option>
        <option value="Pembangunan dan Pemeliharaan Infrastruktur Jalan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'Pembangunan dan Pemeliharaan Infrastruktur Jalan' ? 'selected' : '' }}>Pembangunan dan Pemeliharaan Infrastruktur Jalan</option>
        <option value="Kegiatan Lainnya" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->prioritas_penggunaan == 'Kegiatan Lainnya' ? 'selected' : '' }}>Kegiatan Lainnya</option>
    </select>
</div>