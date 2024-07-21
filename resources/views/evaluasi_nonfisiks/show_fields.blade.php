<!-- Nama Pemda Field -->
<div class="col-sm-12">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
    <input type="text" name="nama_pemda" id="nama_pemda" value="{{ $suratTugas->nama_pemda }}" class="form-control" readonly>
</div>

<!-- Tahun Field -->
<div class="col-sm-12">
    {!! Form::label('tahun', 'Tahun') !!}
    <input type="text"  name="tahun" id="tahun" value="{{ $tahun }}" readonly/>
</div>

<!-- Jenis Tkd Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_tkd', 'Jenis Tkd') !!}
    <input type="text" name= "jenis_tkd" id="jenis_tkd" value="{{ session('jenis_tkd') }}" readonly />
</div>

<!-- Nomor Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('nomor_kontrak', 'Nomor Kontrak') !!}
    <p>{{ $evaluasiNonfisik->nomor_kontrak }}</p>
</div>

<!-- Tanggal Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_kontrak', 'Tanggal Kontrak') !!}
    <p>{{ $evaluasiNonfisik->tanggal_kontrak }}</p>
</div>

<!-- Uraian Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_kontrak', 'Uraian Kontrak') !!}
    <p>{{ $evaluasiNonfisik->uraian_kontrak }}</p>
</div>

<!-- Program Field -->
<div class="col-sm-12">
    {!! Form::label('program', 'Program') !!}
    <p>{{ $evaluasiNonfisik->program }}</p>
</div>

<!-- Kegiatan Field -->
<div class="col-sm-12">
    {!! Form::label('kegiatan', 'Kegiatan') !!}
    <p>{{ $evaluasiNonfisik->kegiatan }}</p>
</div>

<!-- Target Output Field -->
<div class="col-sm-12">
    {!! Form::label('target_output', 'Target Output') !!}
    <p>{{ $evaluasiNonfisik->target_output }}</p>
</div>

<!-- Satuan Output Field -->
<div class="col-sm-12">
    {!! Form::label('satuan_output', 'Satuan Output') !!}
    <p>{{ $evaluasiNonfisik->satuan_output }}</p>
</div>

<!-- Jenis Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_kontrak', 'Jenis Kontrak') !!}
    <p>{{ $evaluasiNonfisik->jenis_kontrak }}</p>
</div>

<!-- Lokasi Field -->
<div class="col-sm-12">
    {!! Form::label('lokasi', 'Lokasi') !!}
    <p>{{ $evaluasiNonfisik->lokasi }}</p>
</div>

<!-- Nama Opd Field -->
<div class="col-sm-12">
    {!! Form::label('nama_opd', 'Nama Opd') !!}
    <p>{{ $evaluasiNonfisik->nama_opd }}</p>
</div>

<!-- Nama Rekanan Field -->
<div class="col-sm-12">
    {!! Form::label('nama_rekanan', 'Nama Rekanan') !!}
    <p>{{ $evaluasiNonfisik->nama_rekanan }}</p>
</div>

<!-- Tgl Lelang Field -->
<div class="col-sm-12">
    {!! Form::label('tgl_lelang', 'Tgl Lelang') !!}
    <p>{{ $evaluasiNonfisik->tgl_lelang }}</p>
</div>

<!-- Masa Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('masa_kontrak', 'Masa Kontrak') !!}
    <p>{{ $evaluasiNonfisik->masa_kontrak }}</p>
</div>

<!-- Tanggal Mulai Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_mulai', 'Tanggal Mulai') !!}
    <p>{{ $evaluasiNonfisik->tanggal_mulai }}</p>
</div>

<!-- Tanggal Selesai Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_selesai', 'Tanggal Selesai') !!}
    <p>{{ $evaluasiNonfisik->tanggal_selesai }}</p>
</div>

<!-- Nilai Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('nilai_kontrak', 'Nilai Kontrak') !!}
    <p>{{ $evaluasiNonfisik->nilai_kontrak }}</p>
</div>

<!-- Sisa Nilai Kontrak Field -->
<div class="col-sm-12">
    {!! Form::label('sisa_nilai_kontrak', 'Sisa Nilai Kontrak') !!}
    <p>{{ $evaluasiNonfisik->sisa_nilai_kontrak }}</p>
</div>

<!-- Penyebab Pembayaran Field -->
<div class="col-sm-12">
    {!! Form::label('penyebab_pembayaran', 'Penyebab Pembayaran') !!}
    <p>{{ $evaluasiNonfisik->penyebab_pembayaran }}</p>
</div>

<!-- No Bast Field -->
<div class="col-sm-12">
    {!! Form::label('no_bast', 'No Bast') !!}
    <p>{{ $evaluasiNonfisik->no_bast }}</p>
</div>

<!-- Tgl Bast Field -->
<div class="col-sm-12">
    {!! Form::label('tgl_bast', 'Tgl Bast') !!}
    <p>{{ $evaluasiNonfisik->tgl_bast }}</p>
</div>

<!-- Realisasi Bast Field -->
<div class="col-sm-12">
    {!! Form::label('realisasi_bast', 'Realisasi Bast') !!}
    <p>{{ $evaluasiNonfisik->realisasi_bast }}</p>
</div>

<!-- Persen Fisik Field -->
<div class="col-sm-12">
    {!! Form::label('persen_fisik', 'Persen Fisik') !!}
    <p>{{ $evaluasiNonfisik->persen_fisik }}</p>
</div>

<!-- Penyebab Realisasi Field -->
<div class="col-sm-12">
    {!! Form::label('penyebab_realisasi', 'Penyebab Realisasi') !!}
    <p>{{ $evaluasiNonfisik->penyebab_realisasi }}</p>
</div>

<!-- Uji Petik Field -->
<div class="col-sm-12">
    {!! Form::label('uji_petik', 'Uji Petik') !!}
    <p>{{ $evaluasiNonfisik->uji_petik }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan') !!}
    <p>{{ $evaluasiNonfisik->keterangan }}</p>
</div>

<!-- Target Omspan Field -->
<div class="col-sm-12">
    {!! Form::label('target_omspan', 'Target Omspan') !!}
    <p>{{ $evaluasiNonfisik->target_omspan }}</p>
</div>

<!-- Target Auditor Field -->
<div class="col-sm-12">
    {!! Form::label('target_auditor', 'Target Auditor') !!}
    <p>{{ $evaluasiNonfisik->target_auditor }}</p>
</div>

<!-- Realisasi Omspan Field -->
<div class="col-sm-12">
    {!! Form::label('realisasi_omspan', 'Realisasi Omspan') !!}
    <p>{{ $evaluasiNonfisik->realisasi_omspan }}</p>
</div>

<!-- Realisasi Auditor Field -->
<div class="col-sm-12">
    {!! Form::label('realisasi_auditor', 'Realisasi Auditor') !!}
    <p>{{ $evaluasiNonfisik->realisasi_auditor }}</p>
</div>

<!-- Fisik Omspan Field -->
<div class="col-sm-12">
    {!! Form::label('fisik_omspan', 'Fisik Omspan') !!}
    <p>{{ $evaluasiNonfisik->fisik_omspan }}</p>
</div>

<!-- Fisik Auditor Field -->
<div class="col-sm-12">
    {!! Form::label('fisik_auditor', 'Fisik Auditor') !!}
    <p>{{ $evaluasiNonfisik->fisik_auditor }}</p>
</div>

<!-- Nilai Laporan Field -->
<div class="col-sm-12">
    {!! Form::label('nilai_laporan', 'Nilai Laporan') !!}
    <p>{{ $evaluasiNonfisik->nilai_laporan }}</p>
</div>

<!-- Nilai Auditor Field -->
<div class="col-sm-12">
    {!! Form::label('nilai_auditor', 'Nilai Auditor') !!}
    <p>{{ $evaluasiNonfisik->nilai_auditor }}</p>
</div>

<!-- Masalah Pelaksanaan Field -->
<div class="col-sm-12">
    {!! Form::label('masalah_pelaksanaan', 'Masalah Pelaksanaan') !!}
    <p>{{ $evaluasiNonfisik->masalah_pelaksanaan }}</p>
</div>

<!-- Masalah1 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah1', 'Masalah1') !!}
    <p>{{ $evaluasiNonfisik->masalah1 }}</p>
</div>

<!-- Uraian Masalah1 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah1', 'Uraian Masalah1') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah1 }}</p>
</div>

<!-- Masalah2 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah2', 'Masalah2') !!}
    <p>{{ $evaluasiNonfisik->masalah2 }}</p>
</div>

<!-- Uraian Masalah2 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah2', 'Uraian Masalah2') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah2 }}</p>
</div>

<!-- Masalah3 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah3', 'Masalah3') !!}
    <p>{{ $evaluasiNonfisik->masalah3 }}</p>
</div>

<!-- Uraian Masalah3 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah3', 'Uraian Masalah3') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah3 }}</p>
</div>

<!-- Masalah4 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah4', 'Masalah4') !!}
    <p>{{ $evaluasiNonfisik->masalah4 }}</p>
</div>

<!-- Uraian Masalah4 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah4', 'Uraian Masalah4') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah4 }}</p>
</div>

<!-- Masalah5 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah5', 'Masalah5') !!}
    <p>{{ $evaluasiNonfisik->masalah5 }}</p>
</div>

<!-- Uraian Masalah5 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah5', 'Uraian Masalah5') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah5 }}</p>
</div>

<!-- Masalah6 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah6', 'Masalah6') !!}
    <p>{{ $evaluasiNonfisik->masalah6 }}</p>
</div>

<!-- Uraian Masalah6 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah6', 'Uraian Masalah6') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah6 }}</p>
</div>

<!-- Masalah7 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah7', 'Masalah7') !!}
    <p>{{ $evaluasiNonfisik->masalah7 }}</p>
</div>

<!-- Uraian Masalah7 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah7', 'Uraian Masalah7') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah7 }}</p>
</div>

<!-- Masalah8 Field -->
<div class="col-sm-12">
    {!! Form::label('masalah8', 'Masalah8') !!}
    <p>{{ $evaluasiNonfisik->masalah8 }}</p>
</div>

<!-- Uraian Masalah8 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_masalah8', 'Uraian Masalah8') !!}
    <p>{{ $evaluasiNonfisik->uraian_masalah8 }}</p>
</div>

<!-- Masalah Pemanfaatan Field -->
<div class="col-sm-12">
    {!! Form::label('masalah_pemanfaatan', 'Masalah Pemanfaatan') !!}
    <p>{{ $evaluasiNonfisik->masalah_pemanfaatan }}</p>
</div>

<!-- Manfaat1 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat1', 'Manfaat1') !!}
    <p>{{ $evaluasiNonfisik->manfaat1 }}</p>
</div>

<!-- Uraian Manfaat1 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat1', 'Uraian Manfaat1') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat1 }}</p>
</div>

<!-- Manfaat2 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat2', 'Manfaat2') !!}
    <p>{{ $evaluasiNonfisik->manfaat2 }}</p>
</div>

<!-- Uraian Manfaat2 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat2', 'Uraian Manfaat2') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat2 }}</p>
</div>

<!-- Manfaat3 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat3', 'Manfaat3') !!}
    <p>{{ $evaluasiNonfisik->manfaat3 }}</p>
</div>

<!-- Uraian Manfaat3 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat3', 'Uraian Manfaat3') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat3 }}</p>
</div>

<!-- Manfaat4 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat4', 'Manfaat4') !!}
    <p>{{ $evaluasiNonfisik->manfaat4 }}</p>
</div>

<!-- Uraian Manfaat4 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat4', 'Uraian Manfaat4') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat4 }}</p>
</div>

<!-- Manfaat5 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat5', 'Manfaat5') !!}
    <p>{{ $evaluasiNonfisik->manfaat5 }}</p>
</div>

<!-- Uraian Manfaat5 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat5', 'Uraian Manfaat5') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat5 }}</p>
</div>

<!-- Manfaat6 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat6', 'Manfaat6') !!}
    <p>{{ $evaluasiNonfisik->manfaat6 }}</p>
</div>

<!-- Uraian Manfaat6 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat6', 'Uraian Manfaat6') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat6 }}</p>
</div>

<!-- Manfaat7 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat7', 'Manfaat7') !!}
    <p>{{ $evaluasiNonfisik->manfaat7 }}</p>
</div>

<!-- Uraian Manfaat7 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat7', 'Uraian Manfaat7') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat7 }}</p>
</div>

<!-- Manfaat8 Field -->
<div class="col-sm-12">
    {!! Form::label('manfaat8', 'Manfaat8') !!}
    <p>{{ $evaluasiNonfisik->manfaat8 }}</p>
</div>

<!-- Uraian Manfaat8 Field -->
<div class="col-sm-12">
    {!! Form::label('uraian_manfaat8', 'Uraian Manfaat8') !!}
    <p>{{ $evaluasiNonfisik->uraian_manfaat8 }}</p>
</div>

