@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ExpensesController@update', $expenses->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name_item',  'name_item')}}
            {{Form::text('name_item', $expenses->name_item, ['class' =>'form-control', 'placeholder' => " name_item"])}}
        </div>

        <div class="form-group">
            {{Form::label('quantity_item',  'quantity_item')}}
            {{Form::text('quantity_item', $expenses->quantity_item, ['class' =>'form-control', 'placeholder' => " quantity_item"])}}
        </div>

        <div class="form-group">
            {{Form::label('cost_price',  'cost_price')}}
            {{Form::text('cost_price', $expenses->cost_price, ['class' =>'form-control', 'placeholder' => " cost_price"])}}
        </div>
        <div class="form-group">
            {{Form::label('total_cost',  'total_cost')}}
            {{Form::text('total_cost', $expenses->total_cost, ['class' =>'form-control', 'placeholder' => " total_cost"])}}
        </div>
{{-- 
        <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $expenses->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div>
         --}}

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection