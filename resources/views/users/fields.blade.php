<!-- Name Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('name', 'Nama') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('username', 'Username') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('password', 'Password') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>