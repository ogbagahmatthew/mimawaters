@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['PriviledgeController@edit', $priviledge->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('',  ' Name')}}
            {{Form::text('name', $priviledge->name, ['class' =>'form-control', 'placeholder' => " Name"])}}
        </div>
<div style="padding-top:15px;">      
{{Form::submit('Edit', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection