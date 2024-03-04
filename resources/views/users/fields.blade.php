<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Name:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-4">
    {!! Form::label('username', 'Username:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::text('username', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly disabled']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-4">
    {!! Form::label('password', 'Password:') !!}
</div>
<div class="form-group col-sm-8">
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>