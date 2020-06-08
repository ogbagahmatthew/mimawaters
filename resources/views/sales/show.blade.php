@extends('layouts.app')
@section('title', 'sales | Findworka')
@section('content')
<div class="container">
    <h1>sales firstName:{{$sales->firstname}}</h1>
    <p><b>sales lastname</b>:{{$sales->lastname}}</p>
    <p><b>sales id</b>:{{$sales->id}}</p>
    <p><b>sales email</b>:{{$sales->email}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/sales')}}/{{$sales->id}}/edit" class="btn btn-default">Edit sales</a>
{!!Form::open(['action'=> ['SalesController@destroy', $sales->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection