@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['OrderController@update', $orders->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $orders->name, ['class' =>'form-control', 'placeholder' => " Name"])}}
        </div>

        <div class="form-group">
            {{Form::label('address',  'address')}}
            {{Form::text('address', $orders->address, ['class' =>'form-control', 'placeholder' => " Address"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $orders->email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('quantity',  'quantity')}}
            {{Form::text('quantity', $orders->quantity, ['class' =>'form-control', 'placeholder' => " Quantity"])}}
        </div>
{{-- 
        <div class="form-group">
            {{Form::label('phone_no',  'phone_no')}}
            {{Form::text('phone_no', $orders->phone_no, ['class' =>'form-control', 'placeholder' => " phone_no"])}}
        </div> --}}
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection