<div class="col-sm-12 mb-3">
    <h5>A. Data Kegiatan Non Fisik</h5>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiNonfisik))
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
    @if (!empty($evaluasiNonfisik))
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
    @if (!empty($evaluasiNonfisik))
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
        <option value="Pendidikan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
        <option value="Kesehatan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
        <option value="Pekerjaan Umum" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Pekerjaan Umum' ? 'selected' : '' }}>Pekerjaan Umum</option>
        <option value="Pendanaan Kelurahan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Pendanaan Kelurahan' ? 'selected' : '' }}>Pendanaan Kelurahan</option>
        <option value="Penggajian PPPK" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Penggajian PPPK' ? 'selected' : '' }}>Penggajian PPPK</option>
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
        <option value="Belanja Pelayanan Umum" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Pelayanan Umum' ? 'selected' : '' }}>Belanja Pelayanan Umum</option>
        <option value="Belanja Pertahananan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Pertahananan' ? 'selected' : '' }}>Belanja Pertahananan</option>
        <option value="Belanja Ketertiban dan Keamanan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Ketertiban dan Keamanan' ? 'selected' : '' }}>Belanja Ketertiban dan Keamanan</option>
        <option value="Belanja Ekonomi" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Ekonomi' ? 'selected' : '' }}>Belanja Ekonomi</option>
        <option value="Belanja Perlindungan Lingkungan Hidup" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Perlindungan Lingkungan Hidup' ? 'selected' : '' }}>Belanja Perlindungan Lingkungan Hidup</option>
        <option value="Belanja Perumahan dan Permukiman" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Perumahan dan Permukiman' ? 'selected' : '' }}>Belanja Perumahan dan Permukiman</option>
        <option value="Belanja Kesehatan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Kesehatan' ? 'selected' : '' }}>Belanja Kesehatan</option>
        <option value="Belanja Pariwisata dan Budaya" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Pariwisata dan Budaya' ? 'selected' : '' }}>Belanja Pariwisata dan Budaya</option>
        <option value="Belanja Agama" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Agama' ? 'selected' : '' }}>Belanja Agama</option>
        <option value="Belanja Pendidikan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Pendidikan' ? 'selected' : '' }}>Belanja Pendidikan</option>
        <option value="Belanja Perlindungan Sosial" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Belanja Perlindungan Sosial' ? 'selected' : '' }}>Belanja Perlindungan Sosial</option>
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
        <option value="Air Minum" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Air Minum' ? 'selected' : '' }}>Air Minum</option>
        <option value="Sanitasi" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Sanitasi' ? 'selected' : '' }}>Sanitasi</option>
        <option value="Irigasi" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Irigasi' ? 'selected' : '' }}>Irigasi</option>
        <option value="Pertanian" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
        <option value="Jalan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Jalan' ? 'selected' : '' }}>Jalan</option>
        <option value="Kehutanan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Kehutanan' ? 'selected' : '' }}>Kehutanan</option>
        <option value="Pendidikan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
        <option value="Kesehatan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->bidang_tkd == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
    </select>
</div>

<!-- Subbidang Tkd Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('subbidang_tkd', 'Subbidang DAK') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <select class="form-control custom-select" id="subbidang_tkd" name="subbidang_tkd">
        <option value="" selected>Pilih</option>
        <option value="Air Minum Mendukung Peningkatan Kualitas SDM" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Air Minum Mendukung Peningkatan Kualitas SDM' ? 'selected' : '' }}>Air Minum Mendukung Peningkatan Kualitas SDM</option>
        <option value="Tematik Pengentasan Permukiman Kumuh Terpadu" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Tematik Pengentasan Permukiman Kumuh Terpadu' ? 'selected' : '' }}>Tematik Pengentasan Permukiman Kumuh Terpadu</option>
        <option value="Tematik Pengembangan Food Estate" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Tematik Pengembangan Food Estate' ? 'selected' : '' }}>Tematik Pengembangan Food Estate</option>
        <option value="Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)' ? 'selected' : '' }}>Tematik Penguatan Kawasan Sentra Produksi Pangan (Pertanian, Perikanan, dan Hewani)</option>
        <option value="Kelautan dan Perikanan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Kelautan dan Perikanan' ? 'selected' : '' }}>Kelautan dan Perikanan</option>
        <option value="Jalan Mendukung Konektivitas Daerah" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Jalan Mendukung Konektivitas Daerah' ? 'selected' : '' }}>Jalan Mendukung Konektivitas Daerah</option>
        <option value="Tematik Penguatan Destinasi Pariwisata Prioritas" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Tematik Penguatan Destinasi Pariwisata Prioritas' ? 'selected' : '' }}>Tematik Penguatan Destinasi Pariwisata Prioritas</option>
        <option value="Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi' ? 'selected' : '' }}>Tematik Peningkatan Konektivitas dan Elektrifikasi di Daerah Afirmasi</option>
        <option value="PAUD" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'PAUD' ? 'selected' : '' }}>PAUD</option>
        <option value="SD" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'SD' ? 'selected' : '' }}>SD</option>
        <option value="SMP" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'SMP' ? 'selected' : '' }}>SMP</option>
        <option value="SKB" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'SKB' ? 'selected' : '' }}>SKB</option>
        <option value="SMA" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'SMA' ? 'selected' : '' }}>SMA</option>
        <option value="SLB" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'SLB' ? 'selected' : '' }}>SLB</option>
        <option value="SMK" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'SMK' ? 'selected' : '' }}>SMK</option>
        <option value="Perpustakaan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Perpustakaan' ? 'selected' : '' }}>Perpustakaan</option>
        <option value="Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting' ? 'selected' : '' }}>Penguatan Penurunan Angka Kematian Ibu, Bayi, dan Intervensi Stunting</option>
        <option value="Pengendalian Penyakit" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Pengendalian Penyakit' ? 'selected' : '' }}>Pengendalian Penyakit</option>
        <option value="Penguatan Sistem Kesehatan" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Penguatan Sistem Kesehatan' ? 'selected' : '' }}>Penguatan Sistem Kesehatan</option>
        <option value="Keluarga Berencana" {{ !empty($evaluasiNonfisik) && $evaluasiNonfisik->subbidang_tkd == 'Keluarga Berencana' ? 'selected' : '' }}>Keluarga Berencana</option>
    </select>
</div>
@endif

<!-- Uraian Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_kontrak', 'Uraian Kegiatan Non Fisik') !!}
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
    {!! Form::number('target_output', null, ['class' => 'form-control']) !!}
</div>

<!-- Satuan Output Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('satuan_output', 'Satuan Output') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('satuan_output', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nilai Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_kontrak', 'Anggaran Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_kontrak', null, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}
</div>

<!-- <div class="col-sm-12 mb-3">
    <h5>B. Capaian Kegiatan Non Fisik</h5>
</div>

<div class="form-group col-sm-3 mb-3">
    {!! Form::label('realisasi_bast', 'Realisasi Kegiatan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiBast" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th>Target Output</th>
                    <th>Realisasi Output</th>
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
    {!! Form::label('penyebab_realisasi', 'Penyebab Realisasi Output Rendah') !!}
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
                        @if (!empty($evaluasiNonfisik))
                        <input type="text" class="form-control" name="fisik_omspan" value="{{ $evaluasiNonfisik->target_omspan > 0 ? number_format($evaluasiNonfisik->realisasi_omspan / $evaluasiNonfisik->target_omspan * 100, 2) : '' }}" readonly disabled>
                        @endif
                    </td>
                    <td>
                        @if (!empty($evaluasiNonfisik))
                        <input type="text" class="form-control" name="fisik_auditor" value="{{ $evaluasiNonfisik->target_auditor > 0 ? number_format($evaluasiNonfisik->realisasi_auditor / $evaluasiNonfisik->target_auditor * 100, 2) : '' }}" readonly disabled>
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
    {!! Form::label('penyebab_pembayaran', 'Penyebab Realisasi Pembayaran Rendah') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_pembayaran', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div> -->

<div class="col-sm-12 mb-3">
    <h5>C. Pengujian Kegiatan Non Fisik</h5>
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
                    <td>Ketidaktepatan Sasaran Penerima Manfaat</td>
                    <td>{!! Form::number('masalah1', $evaluasiNonfisik->masalah1 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah1', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P2</td>
                    <td>Kegiatan Fiktif</td>
                    <td>{!! Form::number('masalah2', $evaluasiNonfisik->masalah2 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah2', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P3</td>
                    <td>Ketidaktepatan Jumlah</td>
                    <td>{!! Form::number('masalah3', $evaluasiNonfisik->masalah3 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah3', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P4</td>
                    <td>Pungutan/Pemotongan Nilai Kegiatan</td>
                    <td>{!! Form::number('masalah4', $evaluasiNonfisik->masalah4 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah4', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P5</td>
                    <td>Kewajiban pajak/retribusi yang belum dipungut dan/atau disetor ke Kas Daerah/Negara</td>
                    <td>{!! Form::number('masalah5', $evaluasiNonfisik->masalah5 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah5', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P6</td>
                    <td>Permasalahan Lainnya</td>
                    <td>{!! Form::number('masalah6', $evaluasiNonfisik->masalah6 ?? 0, ['class' => 'form-control', 'step' => '0.01', 'required']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah6', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>