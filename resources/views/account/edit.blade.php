@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['AccountController@update', $accounts->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $accounts->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div>

        <div class="form-group">
            {{Form::label('quantity',  'quantity')}}
            {{Form::text('quantity', $accounts->quantity, ['class' =>'form-control', 'placeholder' => " quantity"])}}
        </div>

        <div class="form-group">
            {{Form::label('amount_paid',  'amount_paid')}}
            {{Form::text('amount_paid', $accounts->amount_paid, ['class' =>'form-control', 'placeholder' => " amount_paid"])}}
        </div>

        <div class="form-group">
            {{Form::label('balance',  'balance')}}
            {{Form::text('balance', $accounts->balance, ['class' =>'form-control', 'placeholder' => " balance"])}}
        </div>
        <div class="form-group">
            {{Form::label('total',  'total')}}
            {{Form::text('total', $accounts->total, ['class' =>'form-control', 'placeholder' => " total"])}}
        </div>
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection