<!-- Name Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('name', 'Name:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('username', 'Username:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-4 mb-3">
    {!! Form::label('password', 'Password:') !!}
</div>
<div class="form-group col-sm-8 mb-3">
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>