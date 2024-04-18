<!-- Tahun Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('tahun', 'Tahun:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Jenis Tkd Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('jenis_tkd', 'Jenis TKD:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Nilai Silpa Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('nilai_silpa', 'Nilai SiLPA:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::number('nilai_silpa', null, ['class' => 'form-control', 'step'=>"0.01"]) !!}
</div>

<!-- Dianggarkan Relevan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('dianggarkan_relevan', 'Dianggarkan Relevan:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::number('dianggarkan_relevan', null, ['class' => 'form-control', 'step'=>"0.01"]) !!}
</div>

<!-- Dianggarkan Tidak Relevan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('dianggarkan_tidak_relevan', 'Dianggarkan Tidak Relevan:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::number('dianggarkan_tidak_relevan', null, ['class' => 'form-control', 'step'=>"0.01"]) !!}
</div>

<!-- Tidak Dianggarkan Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('tidak_dianggarkan', 'Tidak Dianggarkan:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::number('tidak_dianggarkan', null, ['class' => 'form-control', 'step'=>"0.01"]) !!}
</div>