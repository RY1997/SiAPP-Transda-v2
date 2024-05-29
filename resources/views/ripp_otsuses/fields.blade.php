<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control bg-light','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Item Ripp Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('item_ripp', 'Pernyataan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('item_ripp', null, ['class' => 'form-control bg-light', 'rows' => 3, 'readonly']) !!}
</div>

<!-- Uraian Ripp Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('uraian_ripp', 'Uraian Pelaksanaan') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('uraian_ripp', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>

<!-- Penyebab Ripp Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('penyebab_ripp', 'Uraian Penyebab') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::textarea('penyebab_ripp', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>