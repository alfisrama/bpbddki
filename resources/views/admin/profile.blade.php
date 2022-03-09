@extends('layouts.master')
@section('main')
<div id="user">
<h2>Profile</h2>

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
@if (isset($user))
    {!! Form::hidden('id', $user->id) !!}
@endif

{{-- Nama --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('name', 'Nama:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>

{{-- Email --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @if ($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>

{{-- Password --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    @if ($errors->has('password'))
        <span class="help-block">{{ $errors->first('password') }}</span>
    @endif
</div>

{{-- Password Confirmation --}}
@if ($errors->any())
    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('password_confirmation', 'Password Confirmation:', ['class' => 'control-label']) !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    @if ($errors->has('password_confirmation'))
        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
    @endif
</div>

{{-- Submit Button --}}
<div class="form-group">
    {!! Form::submit('Update Admin', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
</div>

@stop