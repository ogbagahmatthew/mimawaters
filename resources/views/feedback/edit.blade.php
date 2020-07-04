@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['FeedbackController@update', $feedbacks->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname',  'Firstname')}}
            {{Form::text('firstname', $feedbacks->firstname, ['class' =>'form-control', 'placeholder' => " Firstname"])}}
        </div>

        <div class="form-group">
            {{Form::label('lastname',  'lastname')}}
            {{Form::text('lastname', $feedbacks->lastname, ['class' =>'form-control', 'placeholder' => " Lastname"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $feedbacks->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('title',  'title')}}
            {{Form::text('title', $feedbacks->title, ['class' =>'form-control', 'placeholder' => " Title"])}}
        </div>

        <div class="form-group">
            {{Form::label('comment',  'comment')}}
            {{Form::text('comment', $feedbacks->comment, ['class' =>'form-control', 'placeholder' => " Comment"])}}
        </div>
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection