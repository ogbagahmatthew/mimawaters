@extends('layouts.app')
@section('title', 'jobs | Findworka')
@section('content')
<div class="container">
    <h1>jobs name:{{$jobs->name}}</h1>
    <p><b>job description</b>:{{$jobs->description}}</p>
    <p><b>job id</b>:{{$jobs->id}}</p>
    @if(Auth::user()->priviledge_id == 1 or Auth::user()->priviledge_id == 3)
    <a class="btn btn-primary mb-3" href="{{url('/jobs')}}/{{$jobs->id}}/edit" class="btn btn-default">Edit Jobs</a>
{!!Form::open(['action'=> ['JobController@destroy', $jobs->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
@endif
{!!Form::close()!!}
</div>        
@endsection