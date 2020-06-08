@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'SalesreportController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('description',  'description')}}
    {{Form::text('description','', ['class' =>'form-control', 'placeholder' => "description"])}}
</div><div class="form-group">
    {{Form::label('email',  'email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => "email"])}}
</div>

<div class="form-group">
    <label for="file">File Select</label>
    <input required type="file" class="form-control" name="file">
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection