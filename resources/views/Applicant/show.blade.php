@extends('layouts.app')
@section('title', 'applicants | Findworka')
@section('content')
<div class="container">
    <h1>applicant name:{{$applicants->name}}</h1>
    <p><b>applicant position_sort</b>:{{$applicants->position_sort}}</p>
    <p><b>applicant id</b>:{{$applicants->id}}</p>
    <p><b>applicant email</b>:{{$applicants->email}}</p>
    <a class="btn btn-primary mb-3" href=""</a>
{!!Form::open(['action'=> ['ApplicantController@destroy', $applicants->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{-- {{Form::hidden('_method','DELETE')}} --}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection