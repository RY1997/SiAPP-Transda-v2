<!-- Kode Pwk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_pwk', 'Kode Pwk:') !!}
    {!! Form::text('kode_pwk', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tahun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun', 'Tahun:') !!}
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_tkd', 'Jenis Tkd:') !!}
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nomor Kontrak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_kontrak', 'Nomor Kontrak:') !!}
    {!! Form::text('nomor_kontrak', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanggal Kontrak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_kontrak', 'Tanggal Kontrak:') !!}
    {!! Form::text('tanggal_kontrak', null, ['class' => 'form-control','id'=>'tanggal_kontrak']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_kontrak').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Uraian Kontrak Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_kontrak', 'Uraian Kontrak:') !!}
    {!! Form::textarea('uraian_kontrak', null, ['class' => 'form-control']) !!}
</div>

<!-- Program Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('program', 'Program:') !!}
    {!! Form::textarea('program', null, ['class' => 'form-control']) !!}
</div>

<!-- Kegiatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('kegiatan', 'Kegiatan:') !!}
    {!! Form::textarea('kegiatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Output Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_output', 'Target Output:') !!}
    {!! Form::number('target_output', null, ['class' => 'form-control']) !!}
</div>

<!-- Satuan Output Field -->
<div class="form-group col-sm-6">
    {!! Form::label('satuan_output', 'Satuan Output:') !!}
    {!! Form::text('satuan_output', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Jenis Kontrak Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('jenis_kontrak', 'Jenis Kontrak:') !!}
    {!! Form::textarea('jenis_kontrak', null, ['class' => 'form-control']) !!}
</div>

<!-- Lokasi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lokasi', 'Lokasi:') !!}
    {!! Form::textarea('lokasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Opd Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nama_opd', 'Nama Opd:') !!}
    {!! Form::textarea('nama_opd', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Rekanan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nama_rekanan', 'Nama Rekanan:') !!}
    {!! Form::textarea('nama_rekanan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Lelang Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tgl_lelang', 'Tgl Lelang:') !!}
    {!! Form::textarea('tgl_lelang', null, ['class' => 'form-control']) !!}
</div>

<!-- Masa Kontrak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masa_kontrak', 'Masa Kontrak:') !!}
    {!! Form::text('masa_kontrak', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanggal Mulai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_mulai', 'Tanggal Mulai:') !!}
    {!! Form::text('tanggal_mulai', null, ['class' => 'form-control','id'=>'tanggal_mulai']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_mulai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tanggal Selesai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_selesai', 'Tanggal Selesai:') !!}
    {!! Form::text('tanggal_selesai', null, ['class' => 'form-control','id'=>'tanggal_selesai']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_selesai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nilai Kontrak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_kontrak', 'Nilai Kontrak:') !!}
    {!! Form::number('nilai_kontrak', null, ['class' => 'form-control']) !!}
</div>

<!-- Sisa Nilai Kontrak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sisa_nilai_kontrak', 'Sisa Nilai Kontrak:') !!}
    {!! Form::number('sisa_nilai_kontrak', null, ['class' => 'form-control']) !!}
</div>

<!-- Penyebab Pembayaran Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_pembayaran', 'Penyebab Pembayaran:') !!}
    {!! Form::textarea('penyebab_pembayaran', null, ['class' => 'form-control']) !!}
</div>

<!-- No Bast Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('no_bast', 'No Bast:') !!}
    {!! Form::textarea('no_bast', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Bast Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_bast', 'Tgl Bast:') !!}
    {!! Form::text('tgl_bast', null, ['class' => 'form-control','id'=>'tgl_bast']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_bast').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Realisasi Bast Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('realisasi_bast', 'Realisasi Bast:') !!}
    {!! Form::textarea('realisasi_bast', null, ['class' => 'form-control']) !!}
</div>

<!-- Persen Fisik Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('persen_fisik', 'Persen Fisik:') !!}
    {!! Form::textarea('persen_fisik', null, ['class' => 'form-control']) !!}
</div>

<!-- Penyebab Realisasi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_realisasi', 'Penyebab Realisasi:') !!}
    {!! Form::textarea('penyebab_realisasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Uji Petik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uji_petik', 'Uji Petik:') !!}
    {!! Form::text('uji_petik', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Omspan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_omspan', 'Target Omspan:') !!}
    {!! Form::number('target_omspan', null, ['class' => 'form-control']) !!}
</div>

<!-- Target Auditor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_auditor', 'Target Auditor:') !!}
    {!! Form::number('target_auditor', null, ['class' => 'form-control']) !!}
</div>

<!-- Realisasi Omspan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('realisasi_omspan', 'Realisasi Omspan:') !!}
    {!! Form::number('realisasi_omspan', null, ['class' => 'form-control']) !!}
</div>

<!-- Realisasi Auditor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('realisasi_auditor', 'Realisasi Auditor:') !!}
    {!! Form::number('realisasi_auditor', null, ['class' => 'form-control']) !!}
</div>

<!-- Fisik Omspan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fisik_omspan', 'Fisik Omspan:') !!}
    {!! Form::number('fisik_omspan', null, ['class' => 'form-control']) !!}
</div>

<!-- Fisik Auditor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fisik_auditor', 'Fisik Auditor:') !!}
    {!! Form::number('fisik_auditor', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_laporan', 'Nilai Laporan:') !!}
    {!! Form::number('nilai_laporan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Auditor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_auditor', 'Nilai Auditor:') !!}
    {!! Form::number('nilai_auditor', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah Pelaksanaan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah_pelaksanaan', 'Masalah Pelaksanaan:') !!}
    {!! Form::text('masalah_pelaksanaan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Masalah1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah1', 'Masalah1:') !!}
    {!! Form::number('masalah1', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah1', 'Uraian Masalah1:') !!}
    {!! Form::textarea('uraian_masalah1', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah2', 'Masalah2:') !!}
    {!! Form::number('masalah2', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah2', 'Uraian Masalah2:') !!}
    {!! Form::textarea('uraian_masalah2', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah3', 'Masalah3:') !!}
    {!! Form::number('masalah3', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah3', 'Uraian Masalah3:') !!}
    {!! Form::textarea('uraian_masalah3', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah4', 'Masalah4:') !!}
    {!! Form::number('masalah4', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah4 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah4', 'Uraian Masalah4:') !!}
    {!! Form::textarea('uraian_masalah4', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah5', 'Masalah5:') !!}
    {!! Form::number('masalah5', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah5 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah5', 'Uraian Masalah5:') !!}
    {!! Form::textarea('uraian_masalah5', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah6', 'Masalah6:') !!}
    {!! Form::number('masalah6', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah6 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah6', 'Uraian Masalah6:') !!}
    {!! Form::textarea('uraian_masalah6', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah7 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah7', 'Masalah7:') !!}
    {!! Form::number('masalah7', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah7 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah7', 'Uraian Masalah7:') !!}
    {!! Form::textarea('uraian_masalah7', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah8 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah8', 'Masalah8:') !!}
    {!! Form::number('masalah8', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Masalah8 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_masalah8', 'Uraian Masalah8:') !!}
    {!! Form::textarea('uraian_masalah8', null, ['class' => 'form-control']) !!}
</div>

<!-- Masalah Pemanfaatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masalah_pemanfaatan', 'Masalah Pemanfaatan:') !!}
    {!! Form::text('masalah_pemanfaatan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Manfaat1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat1', 'Manfaat1:') !!}
    {!! Form::number('manfaat1', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat1', 'Uraian Manfaat1:') !!}
    {!! Form::textarea('uraian_manfaat1', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat2', 'Manfaat2:') !!}
    {!! Form::number('manfaat2', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat2', 'Uraian Manfaat2:') !!}
    {!! Form::textarea('uraian_manfaat2', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat3', 'Manfaat3:') !!}
    {!! Form::number('manfaat3', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat3', 'Uraian Manfaat3:') !!}
    {!! Form::textarea('uraian_manfaat3', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat4', 'Manfaat4:') !!}
    {!! Form::number('manfaat4', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat4 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat4', 'Uraian Manfaat4:') !!}
    {!! Form::textarea('uraian_manfaat4', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat5', 'Manfaat5:') !!}
    {!! Form::number('manfaat5', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat5 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat5', 'Uraian Manfaat5:') !!}
    {!! Form::textarea('uraian_manfaat5', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat6', 'Manfaat6:') !!}
    {!! Form::number('manfaat6', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat6 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat6', 'Uraian Manfaat6:') !!}
    {!! Form::textarea('uraian_manfaat6', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat7 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat7', 'Manfaat7:') !!}
    {!! Form::number('manfaat7', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat7 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat7', 'Uraian Manfaat7:') !!}
    {!! Form::textarea('uraian_manfaat7', null, ['class' => 'form-control']) !!}
</div>

<!-- Manfaat8 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manfaat8', 'Manfaat8:') !!}
    {!! Form::number('manfaat8', null, ['class' => 'form-control']) !!}
</div>

<!-- Uraian Manfaat8 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uraian_manfaat8', 'Uraian Manfaat8:') !!}
    {!! Form::textarea('uraian_manfaat8', null, ['class' => 'form-control']) !!}
</div>