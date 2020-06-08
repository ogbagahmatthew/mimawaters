@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'JobController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('description',  'description')}}
    {{Form::text('description','', ['class' =>'form-control', 'placeholder' => "description"])}}
</div>
{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>  --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection