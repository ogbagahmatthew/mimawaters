@extends('layouts.app')
@section('content')
<li>User Management</li>
<ul>
    <li> <a href="{{url('user')}}">View Users</a></li>
    <li> <a href="{{url('admin')}}">View Admins</a></li>
    <li> <a href="{{url('sales')}}">View Sales Rep</a></li>
    <li> <a href="{{url('director')}}">View Directors</a></li>
    <li> <a href="{{url('profile')}}">View Profile</a></li>
</ul>
<li>Create Users</li>
<ul>
    <li> <a href="{{url('user')}}">Create Users</a></li>
    <li> <a href="{{url('admin/create')}}">Create Admins</a></li>
    <li> <a href="{{url('sales/create')}}"> Create Sales Rep</a></li>
    <li> <a href="{{url('director/create')}}">Create Directors</a></li>
    <li> <a href="{{url('jobs/create')}}">Create Jobs</a></li>
    <li> <a href="{{url('updates/create')}}">Create Updates</a></li>
    <li> <a href="{{url('expenses/create')}}">Create Expenses</a></li>
    <li> <a href="{{url('salesreport/create')}}">Create Salesreport</a></li>
    <li> <a href="{{url('products/create')}}">Create Products</a></li>
    <li> <a href="{{url('account/create')}}">Create Accounts</a></li>
    <li> <a href="{{url('blog/create')}}">Create Blogs</a></li>
</ul>
<hr>
<li>Information Management</li>
<ul>
    <li> <a href="{{url('salesreport')}}">View Sales Report</a></li>
    <li><a href="{{url('account')}}">View Account</li>
        <li><a href="{{url('jobs')}}">View Jobs</li>
        <li><a href="{{url('feedback')}}">View Feedbacks</li>
        <li><a href="{{url('profile')}}">View Profile</li>
            <li><a href="{{url('products')}}">View Products</a></li>
            <li><a href="{{url('updates')}}">View Updates</a></li>
            <li><a href="{{url('expenses')}}">View Expenses</a></li>
            <li><a href="{{url('orders')}}">View Orders</a></li>
            <li><a href="{{url('account')}}">View Accounts</a></li>
            <li><a href="{{url('blog')}}">View Blogs</a></li>

</ul>
@endsection