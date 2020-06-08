@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'ExpensesController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name_item',  'name_item')}}
    {{Form::text('name_item','', ['class' =>'form-control', 'placeholder' => "name_item"])}}
</div>

<div class="form-group">
    {{Form::label('quantity_item',  'quantity_item')}}
    {{Form::text('quantity_item','', ['class' =>'form-control', 'placeholder' => "quantity_item"])}}
</div>


<div class="form-group">
    {{Form::label('cost_price',  ' cost_price')}}
    {{Form::text('cost_price','', ['class' =>'form-control', 'placeholder' => " cost_price"])}}
</div>

<div class="form-group">
    {{Form::label('total_cost',  ' total_cost')}}
    {{Form::text('total_cost','', ['class' =>'form-control', 'placeholder' => " total_cost"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection