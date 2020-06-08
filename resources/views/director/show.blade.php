@extends('layouts.app')
@section('title', 'directors | Findworka')
@section('content')
<div class="container">
    <h1>directors firstName:{{$directors->firstname}}</h1>
    <p><b>director lastname</b>:{{$directors->lastname}}</p>
    <p><b>director id</b>:{{$directors->id}}</p>
    <p><b>director email</b>:{{$directors->email}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/director')}}/{{$director->id}}/edit" class="btn btn-default">Edit directors</a>
{!!Form::open(['action'=> ['DirectorController@destroy', $directors->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection