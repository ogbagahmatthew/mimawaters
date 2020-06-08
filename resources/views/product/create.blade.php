@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'ProductController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('quantity',  'quantity')}}
    {{Form::text('quantity','', ['class' =>'form-control', 'placeholder' => "quantity"])}}
</div>

<div class="form-group">
    {{Form::label('sold',  'sold')}}
    {{Form::text('sold','', ['class' =>'form-control', 'placeholder' => "sold"])}}
</div>


<div class="form-group">
    {{Form::label('remains',  ' remains')}}
    {{Form::text('remains','', ['class' =>'form-control', 'placeholder' => " remains"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection