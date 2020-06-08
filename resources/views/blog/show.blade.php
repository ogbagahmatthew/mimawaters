@extends('layouts.app')
@section('content')
<div class="h-50v" role="main"><div class="section py-5" style="margin-top: 80px"><div class="container"><!----> <div class="d-flex justify-content-center flex-column position-relative"><p class="small">ARTICLE
    | <span class="text-muted">{{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}</span></p> <h1 class="text-catalina mb-3 pb-3 border-bottom">
    {{$blog->title}}
    <br>
    <img class="alignnone  wp-image-5471" src="{{$blog->image}}" alt="" width="383" height="212">
    {!!$blog->body!!}
    </h1></div></div>
    <div style="margin-left: 50px;"><button class="btn btn-small bg-claret text-white mt-3"><i class="fa fa-arrow-alt-circle-left px-3"></i> <a href="/blogs">Back to Posts</a></button></div>
 
@endsection