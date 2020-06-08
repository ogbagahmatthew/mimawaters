@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ConfirmController@update', $confirm->id], 'method' => 'POST']) !!}
        {{-- <div class="form-group">
            {{Form::label(quantity',  quantity')}}
            {{Form::text(quantity', $confirm->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div> --}}

        <div class="form-group">
            {{Form::label('quantity',  'quantity')}}
            {{Form::text('quantity', $confirm->quantity, ['class' =>'form-control', 'placeholder' => " quantity"])}}
        </div>

        <div class="form-group">
            {{Form::label('amount',  'amount')}}
            {{Form::text('amount', $confirm->amount, ['class' =>'form-control', 'placeholder' => " amount"])}}
        </div>

        {{-- <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $applicant->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div> --}}
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection