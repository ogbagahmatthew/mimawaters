@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['DirectorController@update', $directors->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname',  'Firstname')}}
            {{Form::text('firstname', $directors->firstname, ['class' =>'form-control', 'placeholder' => " Firstname"])}}
        </div>

        <div class="form-group">
            {{Form::label('lastname',  'lastname')}}
            {{Form::text('lastname', $directors->lastname, ['class' =>'form-control', 'placeholder' => " Lastname"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $directors->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $directors->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div>
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection