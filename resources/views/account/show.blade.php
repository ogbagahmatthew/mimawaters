@extends('layouts.app')
@section('title', 'accounts | Findworka')
@section('content')
<div class="container">
    <h1>accounts Name:{{$accounts->name}}</h1>
    <p><b>account quantity</b>:{{$accounts->quantity}}</p>
    <p><b>account id</b>:{{$accounts->id}}</p>
    <p><b>account amount_paid</b>:{{$accounts->amount_paid}}</p>
    <p><b>account balance</b>:{{$accounts->balance}}</p>
    <p><b>account total</b>:{{$accounts->total}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/account')}}/{{$accounts->id}}/edit" class="btn btn-default">Edit Accounts</a>
{!!Form::open(['action'=> ['AccountController@destroy', $accounts->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection