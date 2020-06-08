@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ProductController@update', $products->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('quantity',  'quantity')}}
            {{Form::text('quantity', $products->quantity, ['class' =>'form-control', 'placeholder' => " quantity"])}}
        </div>

        <div class="form-group">
            {{Form::label('sold',  'sold')}}
            {{Form::text('sold', $products->sold, ['class' =>'form-control', 'placeholder' => " sold"])}}
        </div>

        <div class="form-group">
            {{Form::label('remains',  'remains')}}
            {{Form::text('remains', $products->remains, ['class' =>'form-control', 'placeholder' => " remains"])}}
        </div>
        <div style="padding-top:15px;">      
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
        {{Form::hidden('_method', 'PUT')}}
        {!! Form::close() !!}
        </div>
        @endsection