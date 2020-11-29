@extends('layouts.app')
@section('', 'distributors | Riim Foods')
@section('content')
<div class="container">
    <h1>distributors Name:{{$distributors->name}}</h1>
    <p><b>distributor business_name</b>:{{$distributors->business_name}}</p>
    <p><b>distributor id</b>:{{$distributors->id}}</p>
    <p><b>distributor email</b>:{{$distributors->email}}</p>
    <p><b>distributor business_adress</b>:{{$distributors->business_adress}}</p>
    <p><b>distributor phone_no</b>:{{$distributors->phone_no}}</p>
    <a class="btn btn-primary mb-3" href="{{url('distributors')}}/{{$distributors->id}}/edit" class="btn btn-default">Edit distributors</a>
{!!Form::open(['action'=> ['DistributorController@destroy', $distributors->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection