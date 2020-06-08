@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['SalesreportController@update', $salesreports->id], 'method' => 'POST']) !!}

        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $salesreports->name, ['class' =>'form-control', 'placeholder' => "name"])}}
        </div>

        <div class="form-group">
            {{Form::label('description',  'descripion')}}
            {{Form::text('description', $salesreports->description, ['class' =>'form-control', 'placeholder' => " description"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'email')}}
            {{Form::text('email', $salesreports->email, ['class' =>'form-control', 'placeholder' => " email"])}}
        </div>
<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection