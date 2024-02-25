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

<!-- Alokasi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alokasi_id', 'Alokasi Id:') !!}
    {!! Form::text('alokasi_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tahap Salur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahap_salur', 'Tahap Salur:') !!}
    {!! Form::text('tahap_salur', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Penyaluran Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('penyaluran_tkd', 'Penyaluran Tkd:') !!}
    {!! Form::number('penyaluran_tkd', null, ['class' => 'form-control']) !!}
</div>

<!-- Tepat Jumlah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tepat_jumlah', 'Tepat Jumlah:') !!}
    {!! Form::text('tepat_jumlah', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Penyebab Tidak Tepat Jumlah Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_tidak_tepat_jumlah', 'Penyebab Tidak Tepat Jumlah:') !!}
    {!! Form::textarea('penyebab_tidak_tepat_jumlah', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Salur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_salur', 'Tgl Salur:') !!}
    {!! Form::text('tgl_salur', null, ['class' => 'form-control','id'=>'tgl_salur']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_salur').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tepat Waktu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tepat_waktu', 'Tepat Waktu:') !!}
    {!! Form::text('tepat_waktu', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Penyebab Tidak Tepat Waktu Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('penyebab_tidak_tepat_waktu', 'Penyebab Tidak Tepat Waktu:') !!}
    {!! Form::textarea('penyebab_tidak_tepat_waktu', null, ['class' => 'form-control']) !!}
</div>