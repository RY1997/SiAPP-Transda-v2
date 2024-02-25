<!-- Jenis Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_tkd', 'Jenis Tkd:') !!}
    {!! Form::text('jenis_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bidang Tkd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bidang_tkd', 'Bidang Tkd:') !!}
    {!! Form::text('bidang_tkd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Alokasi Minimal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alokasi_minimal', 'Alokasi Minimal:') !!}
    {!! Form::number('alokasi_minimal', null, ['class' => 'form-control']) !!}
</div>