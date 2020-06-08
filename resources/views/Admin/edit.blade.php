@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['AdminController@update', $admins->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname',  'Firstname')}}
            {{Form::text('firstname', $admins->firstname, ['class' =>'form-control', 'placeholder' => " Firstname"])}}
        </div>

        <div class="form-group">
            {{Form::label('lastname',  'lastname')}}
            {{Form::text('lastname', $admins->lastname, ['class' =>'form-control', 'placeholder' => " Lastname"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $admins->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $admins->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div>
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection