@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ProfileController@update', Auth::user()->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname',  'firstName')}}
            {{Form::text('firstname', Auth::user()->firstname, ['class' =>'form-control', 'placeholder' => " Firstname"])}}
        </div>
        <div class="form-group">
            {{Form::label('middlename',  'middlename')}}
            {{Form::text('middlename', Auth::user()->middlename, ['class' =>'form-control', 'placeholder' => "Middlename"])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname',  'lastname')}}
            {{Form::text('lastname', Auth::user()->lastname, ['class' =>'form-control', 'placeholder' => "Lastname"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', Auth::user()->email, ['class' =>'form-control', 'placeholder' => "Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'password')}}
            {{Form::text('password', '', ['class' =>'form-control', 'placeholder' => "Password"])}}
        </div>
<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection