@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'ConfirmController@store', 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
<div class="form-group">
    {{Form::label('quantity',  'quantity')}}
    {{Form::text('quantity','', ['class' =>'form-control', 'placeholder' => "quantity"])}}
</div>

{{-- <div class="form-group">
    {{Form::label('position_sort',  'position_sort')}}
    {{Form::text('position_sort','', ['class' =>'form-control', 'placeholder' => "position_sort"])}}
</div>

<div class="form-group">
    <label for="file">File Select</label>
    <input required type="file" class="form-control" quantity="file">
</div>
 --}}

<div class="form-group">
    {{Form::label('amount',  ' amount')}}
    {{Form::text('amount','', ['class' =>'form-control', 'placeholder' => " amount"])}}
</div>
{{-- <div class="form-group row">
    <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" quantity="password" required autocomplete="new-password">
    </div> --}}
{{-- </div> --}}
{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>  --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection