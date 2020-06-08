@extends('layouts.app')
@section('title', 'expenses | Findworka')
@section('content')
<div class="container">
    <h1>expenses name_item:{{$expenses->name_item}}</h1>
    <p><b>expense cost_price</b>:{{$expenses->cost_price}}</p>
    <p><b>expense id</b>:{{$expenses->id}}</p>
    <p><b>expense quantity_item</b>:{{$expenses->quantity_item}}</p>
    <p><b>expense total_cost</b>:{{$expenses->total_cost}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/expenses')}}/{{$expenses->id}}/edit" class="btn btn-default">Edit expenses</a>
{!!Form::open(['action'=> ['ExpensesController@destroy', $expenses->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection