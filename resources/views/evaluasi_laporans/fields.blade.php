<!-- Tahun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun', 'Tahun:') !!}
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

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

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_tkd', 'Jenis Tkd:') !!}
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nama Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_laporan', 'Nama Laporan:') !!}
    {!! Form::text('nama_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Keberadaan Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keberadaan_laporan', 'Keberadaan Laporan:') !!}
    {!! Form::text('keberadaan_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nomor Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_laporan', 'Nomor Laporan:') !!}
    {!! Form::text('nomor_laporan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Laporan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_laporan', 'Tgl Laporan:') !!}
    {!! Form::text('tgl_laporan', null, ['class' => 'form-control','id'=>'tgl_laporan']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_laporan').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tgl Penyampaian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_penyampaian', 'Tgl Penyampaian:') !!}
    {!! Form::text('tgl_penyampaian', null, ['class' => 'form-control','id'=>'tgl_penyampaian']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_penyampaian').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Penyebab Tidak Tepat Waktu Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_tidak_tepat_waktu', 'Penyebab Tidak Tepat Waktu:') !!}
    {!! Form::textarea('penyebab_tidak_tepat_waktu', null, ['class' => 'form-control']) !!}
</div>