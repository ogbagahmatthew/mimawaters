@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['DistributorkController@update', $distributors->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $distributors->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div>

        <div class="form-group">
            {{Form::label('business_name',  'business_name')}}
            {{Form::text('business_name', $distributors->business_name, ['class' =>'form-control', 'placeholder' => " business_name"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $distributors->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('business_address',  'business_address')}}
            {{Form::text('business_address', $distributors->business_address, ['class' =>'form-control', 'placeholder' => " business_address"])}}
        </div>

        <div class="form-group">
            {{Form::label('phone_no',  'phone_no')}}
            {{Form::text('phone_no', $distributors->phone_no, ['class' =>'form-control', 'placeholder' => " phone_no"])}}
        </div>
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection