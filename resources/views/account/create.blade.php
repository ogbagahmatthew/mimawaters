@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'AccountController@store', 'method' => 'POST']) !!}
<div class="form-group">

<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('quantity',  'quantity')}}
    {{Form::text('quantity','', ['class' =>'form-control', 'placeholder' => "quantity"])}}
</div>


<div class="form-group">
    {{Form::label('amount_paid',  ' amount_paid')}}
    {{Form::text('amount_paid','', ['class' =>'form-control', 'placeholder' => " amount Paid"])}}
</div>

<div class="form-group">
    {{Form::label('balance',  ' balance')}}
    {{Form::text('balance','', ['class' =>'form-control', 'placeholder' => " balance"])}}
</div>

<div class="form-group">
    {{Form::label('total',  ' total')}}
    {{Form::text('total','', ['class' =>'form-control', 'placeholder' => " total"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection




