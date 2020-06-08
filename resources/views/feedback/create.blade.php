@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'FeedbackController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('firstname',  'firstname')}}
    {{Form::text('firstname','', ['class' =>'form-control', 'placeholder' => "Firstname"])}}
</div>

<div class="form-group">
    {{Form::label('lastname',  'lastname')}}
    {{Form::text('lastname','', ['class' =>'form-control', 'placeholder' => "Lastname"])}}
</div>


<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>


<div class="form-group">
    {{Form::label('title',  ' title')}}
    {{Form::text('title','', ['class' =>'form-control', 'placeholder' => " Title"])}}
</div>


<div class="form-group">
    {{Form::label('comment',  ' comment')}}
    {{Form::text('comment','', ['class' =>'form-control', 'placeholder' => " Comment"])}}
</div>


{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>  --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection