@extends('layouts.app')
@section('title', 'salesreports | Findworka')
@section('content')
<div class="container">
    <h1>salesreport name:{{$salesreports->name}}</h1>
    <h1>salesreport email:{{$salesreports->email}}</h1>
    <p><b>salesreport description</b>:{{$salesreports->description}}</p>
    <p><b>salesreport id</b>:{{$salesreports->id}}</p>
    @if(Auth::user()->priviledge_id == 1 or Auth::user()->priviledge_id == 3)
    <a class="btn btn-primary mb-3" href="{{url('/salesreport')}}/{{$salesreports->id}}/edit" class="btn btn-default">Edit SALESREPORT</a>
{!!Form::open(['action'=> ['SalesreportController@destroy', $salesreports->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
@endif
{!!Form::close()!!}
</div>        
@endsection