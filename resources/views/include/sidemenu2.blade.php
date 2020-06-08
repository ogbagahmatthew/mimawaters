@extends('layouts.app')
@section('content')
<li>Creates</li>
<ul>
    <li> <a href="{{url('salesreport/create')}}">Create Sales Report</a></li>
    <li><a href="{{url('account/create')}}">Create Account</li>
    <li><a href="{{url('products/create')}}">Create Products</a></li>
    <li><a href="{{url('expenses/create')}}">Create Expenses</a></li>
</ul>

<li>Information Management</li>
<ul>
    <li> <a href="{{url('salesreport')}}">View Sales Report</a></li>
        {{-- <li><a href="{{url('jobs')}}">View Jobs</li> --}}
        <li><a href="{{url('profile')}}">View Profile</li>
            <li><a href="{{url('products')}}">View Products</a></li>
            <li><a href="{{url('updates')}}">View Updates</a></li>
            <li><a href="{{url('expenses')}}">View Expenses</a></li>
            <li><a href="{{url('confirms/create')}}">View Orders</a></li>
</ul>
@endsection
<style>
    body{
        
    }
 </style>