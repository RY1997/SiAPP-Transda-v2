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

<!-- Nilai Silpa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_silpa', 'Nilai Silpa:') !!}
    {!! Form::number('nilai_silpa', null, ['class' => 'form-control']) !!}
</div>

<!-- Dianggarkan Relevan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dianggarkan_relevan', 'Dianggarkan Relevan:') !!}
    {!! Form::number('dianggarkan_relevan', null, ['class' => 'form-control']) !!}
</div>

<!-- Dianggarkan Tidak Relevan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dianggarkan_tidak_relevan', 'Dianggarkan Tidak Relevan:') !!}
    {!! Form::number('dianggarkan_tidak_relevan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tidak Dianggarkan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tidak_dianggarkan', 'Tidak Dianggarkan:') !!}
    {!! Form::number('tidak_dianggarkan', null, ['class' => 'form-control']) !!}
</div>