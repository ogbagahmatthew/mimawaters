@extends('layouts.app')
@section('title', 'feedbacks | Findworka')
@section('content')
<div class="container">
    <h1>feedbacks firstName:{{$feedbacks->firstname}}</h1>
    <p><b>feedback lastname</b>:{{$feedbacks->lastname}}</p>
    <p><b>feedback id</b>:{{$feedbacks->id}}</p>
    <p><b>feedback email</b>:{{$feedbacks->email}}</p>
    <p><b>feedback title</b>:{{$feedbacks->title}}</p>
    <p><b>feedback comment</b>:{{$feedbacks->comment}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/feedback')}}/{{$feedbacks->id}}/edit" class="btn btn-default">Edit feedbacks</a>
{!!Form::open(['action'=> ['FeedbackController@destroy', $feedbacks->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection