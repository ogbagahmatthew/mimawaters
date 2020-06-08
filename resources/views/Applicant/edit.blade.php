@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ApplicantController@update', $applicants->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $applicants->name, ['class' =>'form-control', 'placeholder' => " name"])}}
        </div>

        <div class="form-group">
            {{Form::label('position_sort',  'position_sort')}}
            {{Form::text('position_sort', $applicants->position_sort, ['class' =>'form-control', 'placeholder' => " position_sort"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $applicants->Email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        {{-- <div class="form-group">
            {{Form::label('password',  'Password')}}
            {{Form::text('password', $applicant->password, ['class' =>'form-control', 'placeholder' => " Password"])}}
        </div> --}}
        

<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection