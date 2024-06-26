<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Username Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username') !!}
    <p>{{ $user->username }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Role') !!}
    <p>{{ $user->role }}</p>
</div>

<!-- Kode Pwk Field -->
<div class="col-sm-12">
    {!! Form::label('kode_pwk', 'Kode Pwk') !!}
    <p>{{ $user->kode_pwk }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token') !!}
    <p>{{ $user->remember_token }}</p>
</div>

