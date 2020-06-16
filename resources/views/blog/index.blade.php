 
    @extends('layouts.app')

<!-- @section('content')  -->

<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>MIMA WATER | Home </title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Pervasive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
 
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- pop up box -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body> 
    <!-- banner -->
    <!-- <div class="banner"> -->
    <div>
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
            <div class="testi-pos">
                <img src="images/mima logo.png" alt="" style="position:absolute; left:1%;top:2%;width:10%" class="img-fluid rounded-circle mb-3" />
            </div>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('')}}">Home</a>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('blogs')}}">Blog</a>
                        </li>
						<li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('services')}}">Services</a>
                        </li>
                        <!-- <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('userjobs')}}">Jobs</a>
                        </li> -->
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('login')}}">Login</a>
                         </li>
                         <!-- <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="{{url('register')}}">Register</a>
                         </li> -->
                    </ul>
                </div>
            </nav>
        </header>
<div class="h-50v" role="main">
    <div class="section bg-stone py-3" style="margin-top: 83px">
        <div class="container">
            <div class="d-flex justify-content-center flex-column my-5 position-relative">
                <h1 class="text-catalina mx-auto text-center">Mima Water Newsletter <!----></h1>
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
           

@endsection