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

<!-- Dasar Penetapan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dasar_penetapan', 'Dasar Penetapan:') !!}
    {!! Form::text('dasar_penetapan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Penetapan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_penetapan', 'Tgl Penetapan:') !!}
    {!! Form::text('tgl_penetapan', null, ['class' => 'form-control','id'=>'tgl_penetapan']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_penetapan').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Simpulan Penetapan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('simpulan_penetapan', 'Simpulan Penetapan:') !!}
    {!! Form::text('simpulan_penetapan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>