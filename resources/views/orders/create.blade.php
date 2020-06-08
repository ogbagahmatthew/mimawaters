@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'OrderController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('quantity',  'quantity')}}
    {{Form::text('quantity','', ['class' =>'form-control', 'placeholder' => "Quantity"])}}
</div>


<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>

<div class="form-group">
    {{Form::label('address',  ' address')}}
    {{Form::text('address','', ['class' =>'form-control', 'placeholder' => " Address"])}}
</div>

<div class="form-group">
    {{Form::label('phone_no',  ' phone_no')}}
    {{Form::text('phone_no','', ['class' =>'form-control', 'placeholder' => " phone_no"])}}
</div>
 <!-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>   -->


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
</div>
@endsection