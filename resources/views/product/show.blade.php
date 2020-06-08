@extends('layouts.app')
@section('title', 'products | Findworka')
@section('content')
<div class="container">
    <h1>products quantity:{{$products->quantity}}</h1>
    <p><b>product sold</b>:{{$products->sold}}</p>
    <p><b>product id</b>:{{$products->id}}</p>
    <p><b>product remains</b>:{{$products->remains}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/products')}}/{{$products->id}}/edit" class="btn btn-default">Edit products</a>
{!!Form::open(['action'=> ['ProductController@destroy', $products->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection