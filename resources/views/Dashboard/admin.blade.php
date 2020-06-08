{{-- @extends('layouts.app') --}}
{{-- @extends('admin.include.sidemenu')
@section('content')
{{-- <li>User Management</li>
<ul>
    <li> <a href="{{url('users')}}">View Users</a></li>
    <li> <a href="{{url('Admins')}}">View Admins</a></li>
    <li> <a href="{{url('sales')}}">View Sales Rep</a></li>
    <li> <a href="{{url('directors')}}">View Directors</a></li>
</ul>
<li>Create Users</li>
<ul>
    <li> <a href="{{url('users')}}">Create Users</a></li>
    <li> <a href="{{url('admins/create')}}">Create Admins</a></li>
    <li> <a href="{{url('sales/create')}}"> Create Sales Rep</a></li>
    <li> <a href="{{url('directors/create')}}">Create Directors</a></li>
    <li> <a href="{{url('jobs/create')}}">View Jobs</a></li>
</ul>
<hr>
<li>Information Management</li>
<ul>
    <li> <a href="{{url('salesreport')}}">View Sales Report</a></li>
    <li><a href="{{url('account')}}">View Account</li>
        <li><a href="{{url('jobs')}}">View Jobs</li>
        <li><a href="{{url('profile')}}">View Profile</li>
            <li><a href="{{url('products')}}">View Products</a></li>
</ul>
@endsection --}} 


<div class="container">
    <div class="card">
        <div class="card-header">Menu</div>
        <div class="card-body">
            @include('include.sidemenu')
        </div>
        

    </div>
    <style>
            body{
                /* background: url(../images/river.jpeg) repeat 0px 0px; */
            }
            .card-body{
                /* position: absolute; */
                padding-left: 31px;
            }
         </style>