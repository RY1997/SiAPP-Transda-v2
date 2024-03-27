<!-- Tahun Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tahun', 'Tahun:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $monitoringPenyaluran->tahun }}" readonly>
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8">
    <input type="text" name="nama_pemda" id="nama_pemda" class="form-control" value="{{ $monitoringPenyaluran->nama_pemda }}" readonly>
</div>

<div class="col-sm-12 mt-2">
    <h5>A. Informasi Penyaluran</h5>
</div>

<!-- Tahap Salur Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tahap_salur', 'Tahap Salur:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('tahap_salur', null, ['class' => 'form-control','readonly']) !!}
</div>

<!-- Tgl Salur Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tgl_salur', 'Tgl Salur:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('tgl_salur', null, ['class' => 'form-control','id'=>'tgl_salur']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#tgl_salur').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false,
        sideBySide: true
    })
</script>
@endpush

<!-- Penyaluran Tkd Field -->
<div class="form-group col-sm-4">
    {!! Form::label('penyaluran_tkd', 'Nilai Penyaluran:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::number('penyaluran_tkd', null, ['class' => 'form-control']) !!}
</div>

<div class="col-sm-12 mt-2">
    <h5>B. Pengujian Penyaluran</h5>
</div>

<!-- Tepat Waktu Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tepat_waktu', 'Ketepatan Waktu Penyaluran:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::select('tepat_waktu', ['' => 'Pilih', 'Tepat Waktu' => 'Tepat Waktu', 'Tidak Tepat Waktu' => 'Tidak Tepat Waktu'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Penyebab Tidak Tepat Waktu Field -->
<div class="form-group col-sm-4">
    {!! Form::label('penyebab_tidak_tepat_waktu', 'Penyebab Tidak Tepat Waktu:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::textarea('penyebab_tidak_tepat_waktu', null, ['class' => 'form-control', 'rows' => '2']) !!}
</div>

<!-- Tepat Jumlah Field -->
<div class="form-group col-sm-4">
    {!! Form::label('tepat_jumlah', 'Ketepatan Jumlah Penyaluran:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::select('tepat_jumlah', ['' => 'Pilih', 'Tepat Jumlah' => 'Tepat Jumlah', 'Tidak Tepat Jumlah' => 'Tidak Tepat Jumlah'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Penyebab Tidak Tepat Jumlah Field -->
<div class="form-group col-sm-4">
    {!! Form::label('penyebab_tidak_tepat_jumlah', 'Penyebab Tidak Tepat Jumlah:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::textarea('penyebab_tidak_tepat_jumlah', null, ['class' => 'form-control', 'rows' => '2']) !!}
</div>