@extends('layouts.app')
@section('title', 'updates | Findworka')
@section('content')
<div class="container">
    
    <h1>update name:{{$updates->name}}</h1>
    <p><b>update id</b>:{{$updates->id}}</p>
    <p><b>update email</b>:{{$updates->email}}</p>
    <p><b>update info</b>:{{$updates->info}}</p>
    @if(Auth::user()->priviledge_id == 1 or Auth::user()->priviledge_id == 3)
    <a class="btn btn-primary mb-3" href="{{url('/updates')}}/{{$updates->id}}/edit" class="btn btn-default">Edit Updates</a>
{!!Form::open(['action'=> ['UpdateController@destroy', $updates->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
@endif
{!!Form::close()!!}
</div>     
@endsection