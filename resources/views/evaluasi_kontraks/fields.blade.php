<div class="col-sm-12 mb-3">
    <h5>A. Data Kontrak</h5>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKontrak))
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <input id='nama_pemda' name="nama_pemda" class="form-control" value="{{ $suratTugas->nama_pemda }}" readonly />
    @endif
</div>

<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKontrak))
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <input id='tahun' name="tahun" class="form-control" value="{{ $tahun }}" readonly />
    @endif
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKontrak))
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <input id="jenis_tkd" name="jenis_tkd" class="form-control" value="{{ session('jenis_tkd') }}" readonly />
    @endif
</div>

@if (session('jenis_tkd') == 'Dana Alokasi Umum')
<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang DAU') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Pendidikan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
        <option value="Kesehatan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
        <option value="Pekerjaan Umum" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Pekerjaan Umum' ? 'selected' : '' }}>Pekerjaan Umum</option>
        <option value="Pendanaan Kelurahan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Pendanaan Kelurahan' ? 'selected' : '' }}>Pendanaan Kelurahan</option>
        <option value="Penggajian PPPK" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Penggajian PPPK' ? 'selected' : '' }}>Penggajian PPPK</option>
        <option value="Bidang Lainnya" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Bidang Lainnya' ? 'selected' : '' }}>Bidang Lainnya</option>
    </select>
</div>
@elseif (session('jenis_tkd') == 'Dana Bagi Hasil')
<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Fungsi Belanja DBH') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Belanja Pelayanan Umum" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Pelayanan Umum' ? 'selected' : '' }}>Belanja Pelayanan Umum</option>
        <option value="Belanja Pertahananan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Pertahananan' ? 'selected' : '' }}>Belanja Pertahananan</option>
        <option value="Belanja Ketertiban dan Keamanan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Ketertiban dan Keamanan' ? 'selected' : '' }}>Belanja Ketertiban dan Keamanan</option>
        <option value="Belanja Ekonomi" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Ekonomi' ? 'selected' : '' }}>Belanja Ekonomi</option>
        <option value="Belanja Perlindungan Lingkungan Hidup" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Perlindungan Lingkungan Hidup' ? 'selected' : '' }}>Belanja Perlindungan Lingkungan Hidup</option>
        <option value="Belanja Perumahan dan Permukiman" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Perumahan dan Permukiman' ? 'selected' : '' }}>Belanja Perumahan dan Permukiman</option>
        <option value="Belanja Kesehatan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Kesehatan' ? 'selected' : '' }}>Belanja Kesehatan</option>
        <option value="Belanja Pariwisata dan Budaya" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Pariwisata dan Budaya' ? 'selected' : '' }}>Belanja Pariwisata dan Budaya</option>
        <option value="Belanja Agama" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Agama' ? 'selected' : '' }}>Belanja Agama</option>
        <option value="Belanja Pendidikan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Pendidikan' ? 'selected' : '' }}>Belanja Pendidikan</option>
        <option value="Belanja Perlindungan Sosial" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Belanja Perlindungan Sosial' ? 'selected' : '' }}>Belanja Perlindungan Sosial</option>
    </select>
</div>
@else
<!-- Bidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('bidang_tkd', 'Bidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="bidang_tkd" name="bidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Air Minum" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Air Minum' ? 'selected' : '' }}>Air Minum</option>
        <option value="Sanitasi" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Sanitasi' ? 'selected' : '' }}>Sanitasi</option>
        <option value="Irigasi" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Irigasi' ? 'selected' : '' }}>Irigasi</option>
        <option value="Pertanian" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
        <option value="Jalan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Jalan' ? 'selected' : '' }}>Jalan</option>
        <option value="Kehutanan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Kehutanan' ? 'selected' : '' }}>Kehutanan</option>
        <option value="Pendidikan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
        <option value="Kesehatan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->bidang_tkd == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
    </select>
</div>

<!-- Subbidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('subbidang_tkd', 'Subbidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="subbidang_tkd" name="subbidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Air Minum Mendukung Peningkatan Kualitas SDM" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Air Minum Mendukung Peningkatan Kualitas SDM' ? 'selected' : '' }}>Air Minum Mendukung Peningkatan Kualitas SDM</option>
        <option value="Tematik Pengentasan Permukiman Kumuh Terpadu" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Tematik Pengentasan Permukiman Kumuh Terpadu' ? 'selected' : '' }}>Tematik Pengentasan Permukiman Kumuh Terpadu</option>
        <option value="Tematik Pengembangan Food Estate" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Tematik Pengembangan Food Estate' ? 'selected' : '' }}>Tematik Pengembangan Food Estate</option>
        <option value="Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)' ? 'selected' : '' }}>Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
        <option value="Jalan Mendukung Konektivitas Daerah" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Jalan Mendukung Konektivitas Daerah' ? 'selected' : '' }}>Jalan Mendukung Konektivitas Daerah</option>
        <option value="Tematik Penguatan Destinasi Pariwisata Prioritas" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Tematik Penguatan Destinasi Pariwisata Prioritas' ? 'selected' : '' }}>Tematik Penguatan Destinasi Pariwisata Prioritas</option>
        <option value="Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi' ? 'selected' : '' }}>Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi</option>
        <option value="PAUD" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'PAUD' ? 'selected' : '' }}>PAUD</option>
        <option value="SD" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'SD' ? 'selected' : '' }}>SD</option>
        <option value="SMP" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'SMP' ? 'selected' : '' }}>SMP</option>
        <option value="SKB" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'SKB' ? 'selected' : '' }}>SKB</option>
        <option value="SMA" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'SMA' ? 'selected' : '' }}>SMA</option>
        <option value="SLB" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'SLB' ? 'selected' : '' }}>SLB</option>
        <option value="SMK" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'SMK' ? 'selected' : '' }}>SMK</option>
        <option value="Perpustakaan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Perpustakaan' ? 'selected' : '' }}>Perpustakaan</option>
        <option value="Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting' ? 'selected' : '' }}>Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting</option>
        <option value="Pengendalian Penyakit" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Pengendalian Penyakit' ? 'selected' : '' }}>Pengendalian Penyakit</option>
        <option value="Penguatan Sistem Kesehatan" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Penguatan Sistem Kesehatan' ? 'selected' : '' }}>Penguatan Sistem Kesehatan</option>
        <option value="Keluarga Berencana" {{ !empty($evaluasiKontrak) && $evaluasiKontrak->subbidang_tkd == 'Keluarga Berencana' ? 'selected' : '' }}>Keluarga Berencana</option>
    </select>
</div>
@endif

<!-- Nomor Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nomor_kontrak', 'Nomor Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nomor_kontrak', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanggal Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tanggal_kontrak', 'Tanggal Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tanggal_kontrak" value="{{ !empty($evaluasiKontrak) && $evaluasiKontrak->tanggal_kontrak != NULL ? date_format($evaluasiKontrak->tanggal_kontrak, 'Y-m-d') : '' }}">
</div>

<!-- Uraian Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_kontrak', 'Uraian Pekerjaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_kontrak', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Program Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('program', 'Nama Program') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('program', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Kegiatan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('kegiatan', 'Nama Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('kegiatan', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Nama Opd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_opd', 'Nama OPD') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_opd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Target Output Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('target_output', 'Target Output') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('target_output', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Satuan Output Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('satuan_output', 'Satuan Output') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('satuan_output', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Jenis Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('jenis_kontrak', 'Jenis Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('jenis_kontrak', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nilai Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_kontrak', 'Nilai Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_kontrak', null, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}
</div>

<!-- <div class="col-sm-12 mb-3">
    <h5>B. Capaian Kontrak</h5>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('realisasi_bast', 'Realisasi BAST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiBast" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th>Target Kontrak</th>
                    <th>Realisasi</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::number('target_output', null, ['class' => 'form-control', 'readonly']) !!}</td>
                    <td>{!! Form::number('realisasi_bast', null, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::number('persen_fisik', null, ['class' => 'form-control', 'readonly']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_realisasi', 'Penyebab Realisasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_realisasi', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('keterangan', 'Keterangan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('Realisasi Capaian dan Pembayaran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th>Uraian</th>
                    <th>Menurut OMSPAN</th>
                    <th>Menurut Auditor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Target Output</td>
                    <td>{!! Form::number('target_omspan', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('target_auditor', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>Realisasi Output</td>
                    <td>{!! Form::number('realisasi_omspan', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('realisasi_auditor', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>Capaian Fisik (%)</td>
                    <td>
                        @if (!empty($evaluasiKontrak))
                        <input type="text" class="form-control" name="fisik_omspan" value="{{ $evaluasiKontrak->target_omspan > 0 ? number_format($evaluasiKontrak->realisasi_omspan / $evaluasiKontrak->target_omspan * 100, 2) : '' }}" readonly disabled>
                        @endif
                    </td>
                    <td>
                        @if (!empty($evaluasiKontrak))
                        <input type="text" class="form-control" name="fisik_auditor" value="{{ $evaluasiKontrak->target_auditor > 0 ? number_format($evaluasiKontrak->realisasi_auditor / $evaluasiKontrak->target_auditor * 100, 2) : '' }}" readonly disabled>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Nilai Pembayaran</td>
                    <td>{!! Form::number('nilai_laporan', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::number('nilai_auditor', null, ['class' => 'form-control']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('sisa_nilai_kontrak', 'Sisa Nilai Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('sisa_nilai_kontrak', null, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_pembayaran', 'Penyebab Pembayaran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_pembayaran', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div> -->

<div class="col-sm-12 mb-3">
    <h5>B. Pengujian Kontrak</h5>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('Permasalahan Pelaksanaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="permasalahanPelaksanaan" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Kode Permasalahan</th>
                    <th style="min-width: 250px;">Nilai K.KN</th>
                    <th style="min-width: 250px;">Uraian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P1</td>
                    <td>Kegagalan penyelesaian pekerjaan karena penyedia wanprestasi atau sebab lain</td>
                    <td>{!! Form::number('masalah1', $evaluasiKontrak->masalah1 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah1', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P2</td>
                    <td>Pembayaran atas pekerjaan yang tidak dilaksanakan</td>
                    <td>{!! Form::number('masalah2', $evaluasiKontrak->masalah2 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah2', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P3</td>
                    <td>Kekurangan volume pekerjaan</td>
                    <td>{!! Form::number('masalah3', $evaluasiKontrak->masalah3 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah3', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P4</td>
                    <td>Keterlambatan penyelesaian pekerjaan yang belum dipungut dendanya</td>
                    <td>{!! Form::number('masalah4', $evaluasiKontrak->masalah4 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah4', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P5</td>
                    <td>Kewajiban pajak/retribusi yang belum dipungut dan/atau disetor ke Kas Daerah/Negara</td>
                    <td>{!! Form::number('masalah5', $evaluasiKontrak->masalah5 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah5', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P6</td>
                    <td>Pelaksanaan pekerjaan tidak sesuai dengan spesifikasi teknis</td>
                    <td>{!! Form::number('masalah6', $evaluasiKontrak->masalah6 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah6', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P7</td>
                    <td>Kelebihan perhitungan volume RAB kontrak pada pelaksanaan kegiatan</td>
                    <td>{!! Form::number('masalah7', $evaluasiKontrak->masalah7 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah7', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P8</td>
                    <td>Permasalahan Lainnya</td>
                    <td>{!! Form::number('masalah8', $evaluasiKontrak->masalah8 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah8', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('Permasalahan Pemanfaatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="permasalahanPemanfaatan" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Kode Permasalahan</th>
                    <th style="min-width: 250px;">Nilai K.KN</th>
                    <th style="min-width: 250px;">Uraian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>M1</td>
                    <td>Fasilitas atau sarana pendukung belum tersedia</td>
                    <td>{!! Form::number('manfaat1', $evaluasiKontrak->manfaat1 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat1', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M2</td>
                    <td>Tidak didukung SDM yang mampu memanfaatkan hasil pekerjaan</td>
                    <td>{!! Form::number('manfaat2', $evaluasiKontrak->manfaat2 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat2', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M3</td>
                    <td>Hasil pekerjaan tidak sesuai dengan spesifikasi yang ditetapkan dalam kontrak</td>
                    <td>{!! Form::number('manfaat3', $evaluasiKontrak->manfaat3 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat3', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M4</td>
                    <td>Hasil pekerjaan tidak memenuhi kebutuhan yang diminta oleh pengguna</td>
                    <td>{!! Form::number('manfaat4', $evaluasiKontrak->manfaat4 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat4', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M5</td>
                    <td>Hasil pekerjaan masih dalam sengketa</td>
                    <td>{!! Form::number('manfaat5', $evaluasiKontrak->manfaat5 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat5', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M6</td>
                    <td>Hasil pekerjaan masih dalam masa pemeliharaan dan belum diserahterimakan (Final Hand Over)</td>
                    <td>{!! Form::number('manfaat6', $evaluasiKontrak->manfaat6 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat6', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M7</td>
                    <td>Kelalaian atau kesengajaan dari pelaksana pekerjaan/ pihak ketiga</td>
                    <td>{!! Form::number('manfaat7', $evaluasiKontrak->manfaat7 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat7', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M8</td>
                    <td>Lainnya</td>
                    <td>{!! Form::number('manfaat8', $evaluasiKontrak->manfaat8 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat8', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>