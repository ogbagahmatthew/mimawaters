@extends('layouts.app')

@section('content')

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
<div class="h-50v" role="main">
    <div class="section bg-stone py-3" style="margin-top: 83px">
        <div class="container">
            <div class="d-flex justify-content-center flex-column my-5 position-relative">
                <h1 class="text-catalina mx-auto text-center">Mima Newsletter <!----></h1>
            </div>
        </div>
    </div>

        <div class="section py-3">
        
        <div class="container">
            
            <div class="d-flex justify-content-center flex-column my-5 position-relative">
                <div class="row justify-content-center">
                    @if(count($blogs)>0)
                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 p-4 align-self-center">
                        
                        <a href="{{url('/blogs')}}/article/{{$blog->slug}}" class="">
                            <img height="200px" alt="" data-srcset="" class="object-cover object-pos-center w-100 rounded-lg lazyLoad lazyloaded isLoaded" src={{$blog->image}}></a> 
                            <p class="small my-2">ARTICLE | <span class="text-muted">{{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}</span></p> 
                            <h3><a href="{{url('/blogs')}}/article/{{$blog->slug}}" class="text-catalina">{{$blog->title}}</a></h3>
                    </div>
                    @endforeach
                    @else
                    <p> No articles available currently! </p>
                    @endif
                    
                       
                        </div>
                    </div>
                </div> 
            </div>
           <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5efb65c7f1aba10c"></script>


@endsection