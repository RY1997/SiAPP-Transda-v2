<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    @if (!empty($evaluasiKontrak))
    {!! Form::text('nama_pemda', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
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
    {!! Form::text('tahun', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
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
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
    @else
    <input id="jenis_tkd" name="jenis_tkd" class="form-control" value="{{ session('jenis_tkd') }}" readonly />
    @endif
</div>

<div class="col-sm-12 my-5">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item" style="width:25%">
            <a class="nav-link {{ $step == 'data' ? 'active' : '' }}" href="?step=data">A. Data Kontrak</a>
        </li>
        <li class="nav-item" style="width:25%">
            <a class="nav-link {{ $step == 'pelaksanaan' ? 'active' : '' }}" href="?step=pelaksanaan">B. Pelaksanaan Kontrak</a>
        </li>
        <li class="nav-item" style="width:25%">
            <a class="nav-link {{ $step == 'penyelesaian' ? 'active' : '' }}" href="?step=penyelesaian">C. Penyelesaian Kontrak</a>
        </li>
        <li class="nav-item" style="width:25%">
            <a class="nav-link {{ $step == 'pengujian' ? 'active' : '' }}" href="?step=pengujian">D. Pengujian Kontrak</a>
        </li>
    </ul>
</div>

<input type="hidden" name="step" value="{{ $step }}">

@if ($step == 'data')
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
    <input type="date" class="form-control" name="tanggal_kontrak" value="{{ $evaluasiKontrak->tanggal_kontrak != NULL ? date_format($evaluasiKontrak->tanggal_kontrak, 'Y-m-d') : '' }}">
</div>

<!-- Uraian Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_kontrak', 'Uraian Kontrak') !!}
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
    {!! Form::number('nilai_kontrak', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>
@endif

@if ($step == 'pelaksanaan')
<!-- Nomor Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nomor_kontrak', 'Nomor Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nomor_kontrak', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Tanggal Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tanggal_kontrak', 'Tanggal Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tanggal_kontrak', null, ['class' => 'form-control bg-light','id'=>'tanggal_kontrak', 'readonly']) !!}
</div>

<!-- Uraian Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_kontrak', 'Uraian Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_kontrak', null, ['class' => 'form-control bg-light', 'rows' => '3', 'readonly']) !!}
</div>

<!-- Masa Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('masa_kontrak', 'Masa Kontrak (Hari)') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('masa_kontrak', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanggal Mulai Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tanggal_mulai', 'Tanggal Pelaksanaan') !!}
</div>
<div class="form-group col-sm-4 mb-3">
    <input type="date" class="form-control" name="tanggal_mulai" value="{{ $evaluasiKontrak->tanggal_mulai != NULL ? date_format($evaluasiKontrak->tanggal_mulai, 'Y-m-d') : '' }}">
</div>

<!-- Tanggal Selesai Field -->
<div class="form-group col-sm-1 mb-3 text-center">
    s.d
</div>
<div class="form-group col-sm-4 mb-3">
    <input type="date" class="form-control" name="tanggal_selesai" value="{{ $evaluasiKontrak->tanggal_selesai != NULL ? date_format($evaluasiKontrak->tanggal_selesai, 'Y-m-d') : '' }}">
</div>

<!-- Lokasi Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('lokasi', 'Lokasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('lokasi', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Tgl Lelang Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_lelang', 'Tgl Lelang') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_lelang" value="{{ $evaluasiKontrak->tgl_lelang != NULL ? date_format($evaluasiKontrak->tgl_lelang, 'Y-m-d') : '' }}">
</div>

<!-- Nama Rekanan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_rekanan', 'Nama Rekanan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_rekanan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nilai Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nilai_kontrak', 'Nilai Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('nilai_kontrak', null, ['class' => 'form-control bg-light', 'step' => '0.01', 'readonly']) !!}
</div>

<!-- Sisa Nilai Kontrak Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('sisa_nilai_kontrak', 'Sisa Nilai Kontrak') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('sisa_nilai_kontrak', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Penyebab Pembayaran Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_pembayaran', 'Penyebab Pembayaran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_pembayaran', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>
@endif

@if ($step == 'penyelesaian')
<!-- No Bast Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('no_bast', 'No BAST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('no_bast', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Bast Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tgl_bast', 'Tanggal BAST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <input type="date" class="form-control" name="tgl_bast" value="{{ $evaluasiKontrak->tgl_bast != NULL ? date_format($evaluasiKontrak->tgl_bast, 'Y-m-d') : '' }}">
</div>

<!-- Realisasi Bast Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('realisasi_bast', 'Realisasi BAST') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiBast" class="table small text-center align-middle m-0">
            <thead class="table-info">
                <tr>
                    <th>Target Kontrak</th>
                    <th>Realisasi</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::number('target_output', null, ['class' => 'form-control bg-light', 'readonly']) !!}</td>
                    <td>{!! Form::number('realisasi_bast', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::number('persen_fisik', null, ['class' => 'form-control bg-light', 'readonly']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Penyebab Realisasi Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_realisasi', 'Penyebab Realisasi') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_realisasi', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('keterangan', 'Keterangan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>
@endif

@if ($step == 'pengujian')
<!-- Target Omspan Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('Realisasi Capaian dan Pembayaran') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table small text-center align-middle m-0">
            <thead class="table-info">
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
                        <input type="text" class="form-control" name="fisik_omspan" value="{{ $evaluasiKontrak->target_omspan > 0 ? number_format($evaluasiKontrak->realisasi_omspan / $evaluasiKontrak->target_omspan * 100, 2) : '' }}" readonly disabled>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="fisik_auditor" value="{{ $evaluasiKontrak->target_auditor > 0 ? number_format($evaluasiKontrak->realisasi_auditor / $evaluasiKontrak->target_auditor * 100, 2) : '' }}" readonly disabled>
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
    {!! Form::label('Permasalahan Pelaksanaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    <div class="table-responsive card mb-0">
        <table id="permasalahanPelaksanaan" class="table small text-center align-middle m-0">
            <thead class="table-info">
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
                    <td>{!! Form::number('masalah1', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah1', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P2</td>
                    <td>Pembayaran atas pekerjaan yang tidak dilaksanakan</td>
                    <td>{!! Form::number('masalah2', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah2', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P3</td>
                    <td>Kekurangan volume pekerjaan</td>
                    <td>{!! Form::number('masalah3', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah3', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P4</td>
                    <td>Keterlambatan penyelesaian pekerjaan yang belum dipungut dendanya</td>
                    <td>{!! Form::number('masalah4', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah4', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P5</td>
                    <td>Kewajiban pajak/retribusi yang belum dipungut dan/atau disetor ke Kas Daerah/Negara</td>
                    <td>{!! Form::number('masalah5', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah5', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P6</td>
                    <td>Pelaksanaan pekerjaan tidak sesuai dengan spesifikasi teknis</td>
                    <td>{!! Form::number('masalah6', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah6', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P7</td>
                    <td>Kelebihan perhitungan volume RAB kontrak pada pelaksanaan kegiatan</td>
                    <td>{!! Form::number('masalah7', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_masalah7', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>P8</td>
                    <td>Permasalahan Lainnya</td>
                    <td>{!! Form::number('masalah8', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
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
        <table id="permasalahanPemanfaatan" class="table small text-center align-middle m-0">
            <thead class="table-info">
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
                    <td>{!! Form::number('manfaat1', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat1', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M2</td>
                    <td>Tidak didukung SDM yang mampu memanfaatkan hasil pekerjaan</td>
                    <td>{!! Form::number('manfaat2', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat2', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M3</td>
                    <td>Hasil pekerjaan tidak sesuai dengan spesifikasi yang ditetapkan dalam kontrak</td>
                    <td>{!! Form::number('manfaat3', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat3', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M4</td>
                    <td>Hasil pekerjaan tidak memenuhi kebutuhan yang diminta oleh pengguna</td>
                    <td>{!! Form::number('manfaat4', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat4', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M5</td>
                    <td>Hasil pekerjaan masih dalam sengketa</td>
                    <td>{!! Form::number('manfaat5', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat5', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M6</td>
                    <td>Hasil pekerjaan masih dalam masa pemeliharaan dan belum diserahterimakan (Final Hand Over)</td>
                    <td>{!! Form::number('manfaat6', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat6', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M7</td>
                    <td>Kelalaian atau kesengajaan dari pelaksana pekerjaan/ pihak ketiga</td>
                    <td>{!! Form::number('manfaat7', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat7', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
                <tr>
                    <td>M8</td>
                    <td>Lainnya</td>
                    <td>{!! Form::number('manfaat8', null, ['class' => 'form-control', 'step' => '0.01']) !!}</td>
                    <td>{!! Form::textarea('uraian_manfaat8', null, ['class' => 'form-control', 'rows' => '3']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endif