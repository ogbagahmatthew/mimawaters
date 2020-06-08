@extends('layouts.app')
@section('title', 'confirms | Mima')
@section('content')
<div class="container">
    <h1>confirm quantity:{{$confirms->quantity}}</h1>
    <p><b>confirm id</b>:{{$confirms->id}}</p>
    <p><b>confirm amount</b>:{{$confirms->amount}}</p>
    <a class="btn btn-primary mb-3" href=""</a>
{!!Form::open(['action'=> ['ConfirmController@destroy', $confirms->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{-- {{Form::hidden('_method','DELETE')}} --}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection