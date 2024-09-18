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
    {!! Form::label('subbidang_tkd', 'Tematik DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="subbidang_tkd" name="subbidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Tematik Pengentasan Permukiman Kumuh Terpadu" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Tematik Pengentasan Permukiman Kumuh Terpadu' ? 'selected' : '' }}>Tematik Pengentasan Permukiman Kumuh Terpadu</option>
        <option value="Tematik Penguatan Kawasan Sentra Produksi dan Tematik Pengembangan Food Estate" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Tematik Penguatan Kawasan Sentra Produksi dan Tematik Pengembangan Food Estate' ? 'selected' : '' }}>Tematik Penguatan Kawasan Sentra Produksi dan Tematik Pengembangan Food Estate</option>
    </select>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3">
    {!! Form::label('bidang_tkd', 'Bidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Air Minum" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Air Minum' ? 'selected' : '' }}>Air Minum</option>
        <option value="Sanitasi" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Sanitasi' ? 'selected' : '' }}>Sanitasi</option>
        <option value="Irigasi" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Irigasi' ? 'selected' : '' }}>Irigasi</option>
        <option value="Pertanian" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->subbidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
    </select>
</div>

<!-- Nama Skpd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_skpd', 'Nama OPD/SKPD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('nama_skpd', null, ['class' => 'form-control', 'rows' => '3', 'required']) !!}
</div>

<!-- Nama Program Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_program', 'Nama Program') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('nama_program', null, ['class' => 'form-control', 'rows' => '3', 'required']) !!}
</div>

<!-- Nama Kegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_kegiatan', 'Nama Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('nama_kegiatan', null, ['class' => 'form-control', 'rows' => '3', 'required']) !!}
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

<!-- Prioritas Penggunaan Field -->
<div class="form-group col-sm-3">
    {!! Form::label('pemanfaatan_kegiatan', 'Status Pemanfaatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
<select class="form-control custom-select" id="pemanfaatan_kegiatan" name="pemanfaatan_kegiatan">
        <option value="" selected>Pilih</option>
        <option value="Dimanfaatkan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->pemanfaatan_kegiatan == 'Dimanfaatkan' ? 'selected' : '' }}>Dimanfaatkan</option>
        <option value="Tidak Dimanfaatkan" {{ !empty($evaluasiPrioritas) && $evaluasiPrioritas->pemanfaatan_kegiatan == 'Tidak Dimanfaatkan' ? 'selected' : '' }}>Tidak Dimanfaatkan</option>
    </select>
</div>