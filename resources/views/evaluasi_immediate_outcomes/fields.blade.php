<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="nama_pemda" name="nama_pemda">
        <option value="" selected="selected">Pilih</option>
        @foreach($pemdas as $pemda)
        <option value="{{ $pemda->nama_pemda }}" {{ !empty($suratTugas) && $pemda->nama_pemda == $suratTugas->nama_pemda ? 'selected' : '' }}>{{ $pemda->nama_pemda }}</option>
        @endforeach
    </select>
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Air Minum" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Air Minum' ? 'selected' : '' }}>Air Minum</option>
        <option value="Sanitasi" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Sanitasi' ? 'selected' : '' }}>Sanitasi</option>
        <option value="Irigasi" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Irigasi' ? 'selected' : '' }}>Irigasi</option>
        <option value="Pertanian" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
        <option value="Jalan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Jalan' ? 'selected' : '' }}>Jalan</option>
        <option value="Kehutanan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Kehutanan' ? 'selected' : '' }}>Kehutanan</option>
        <option value="Pendidikan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
        <option value="Kesehatan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
    </select>
</div>

<!-- Subbidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('subbidang_tkd', 'Subbidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="subbidang_tkd" name="subbidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Air Minum Mendukung Peningkatan Kualitas SDM" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Air Minum Mendukung Peningkatan Kualitas SDM' ? 'selected' : '' }}>Air Minum Mendukung Peningkatan Kualitas SDM</option>
        <option value="Tematik Pengentasan Permukiman Kumuh Terpadu" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Tematik Pengentasan Permukiman Kumuh Terpadu' ? 'selected' : '' }}>Tematik Pengentasan Permukiman Kumuh Terpadu</option>
        <option value="Tematik Pengembangan Food Estate" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Tematik Pengembangan Food Estate' ? 'selected' : '' }}>Tematik Pengembangan Food Estate</option>
        <option value="Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)' ? 'selected' : '' }}>Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
        <option value="Jalan Mendukung Konektivitas Daerah" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Jalan Mendukung Konektivitas Daerah' ? 'selected' : '' }}>Jalan Mendukung Konektivitas Daerah</option>
        <option value="Tematik Penguatan Destinasi Pariwisata Prioritas" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Tematik Penguatan Destinasi Pariwisata Prioritas' ? 'selected' : '' }}>Tematik Penguatan Destinasi Pariwisata Prioritas</option>
        <option value="Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi' ? 'selected' : '' }}>Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi</option>
        <option value="PAUD" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'PAUD' ? 'selected' : '' }}>PAUD</option>
        <option value="SD" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'SD' ? 'selected' : '' }}>SD</option>
        <option value="SMP" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'SMP' ? 'selected' : '' }}>SMP</option>
        <option value="SKB" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'SKB' ? 'selected' : '' }}>SKB</option>
        <option value="SMA" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'SMA' ? 'selected' : '' }}>SMA</option>
        <option value="SLB" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'SLB' ? 'selected' : '' }}>SLB</option>
        <option value="SMK" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'SMK' ? 'selected' : '' }}>SMK</option>
        <option value="Perpustakaan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Perpustakaan' ? 'selected' : '' }}>Perpustakaan</option>
        <option value="Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting' ? 'selected' : '' }}>Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting</option>
        <option value="Pengendalian Penyakit" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Pengendalian Penyakit' ? 'selected' : '' }}>Pengendalian Penyakit</option>
        <option value="Penguatan Sistem Kesehatan" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Penguatan Sistem Kesehatan' ? 'selected' : '' }}>Penguatan Sistem Kesehatan</option>
        <option value="Keluarga Berencana" {{ !empty($evaluasiImmediateOutcome) && $evaluasiImmediateOutcome->subbidang_tkd == 'Keluarga Berencana' ? 'selected' : '' }}>Keluarga Berencana</option>
    </select>
</div>

<!-- Uraian Indikator Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_indikator', 'Uraian Indikator') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_indikator', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>

<!-- Target Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('target', 'Target') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('target', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Capaian Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('capaian', 'Capaian') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('capaian', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Satuan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('satuan', 'Satuan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('satuan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('keterangan', 'Keterangan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('keterangan', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>

<!-- Kendala Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('kendala', 'Kendala') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('kendala', null, ['class' => 'form-control','rows'=>'3']) !!}
</div>