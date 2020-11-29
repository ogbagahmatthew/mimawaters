@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'DistributorController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('business_name',  'business_name')}}
    {{Form::text('business_name','', ['class' =>'form-control', 'placeholder' => "business_name"])}}
</div>


<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>


<div class="form-group">
    {{Form::label('business_address',  ' business_address')}}
    {{Form::text('business_address','', ['class' =>'form-control', 'placeholder' => " business_address"])}}
</div>


<div class="form-group">
    {{Form::label('phone_no',  ' phone_no')}}
    {{Form::text('phone_no','', ['class' =>'form-control', 'placeholder' => " phone_no"])}}
</div>


{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>  --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection