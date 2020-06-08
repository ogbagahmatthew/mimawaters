@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['UpdateController@update', $updates->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $updates->name, ['class' =>'form-control', 'placeholder' => " Name"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $updates->email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('info',  'info')}}
            {{Form::text('info', $updates->info, ['class' =>'form-control', 'placeholder' => " info"])}}
        </div>
{{-- 
        <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $updates->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div> --}}
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection