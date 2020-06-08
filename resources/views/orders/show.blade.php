@extends('layouts.app')
@section('title', 'orders | Findworka')
@section('content')
<div class="container">
    <h1>orders Name:{{$orders->name}}</h1>
    <p><b>order address</b>:{{$orders->address}}</p>
    <p><b>order id</b>:{{$orders->id}}</p>
    <p><b>order email</b>:{{$orders->email}}</p>
    <p><b>order quantity</b>:{{$orders->quantity}}</p>
    <p><b>order phone_no</b>:{{$orders->phone_no}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/orders')}}/{{$orders->id}}/edit" class="btn btn-default">Edit orders</a>
{!!Form::open(['action'=> ['OrderController@destroy', $orders->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection