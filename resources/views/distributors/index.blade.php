@extends('layouts.app') 
@section('', 'Available distributors| Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-business_address">Available distributor</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            name
                                        </th>
                                        <th>
                                        business_name
                                        </th>
                                        <th>
                                            email
                                        </th>
                                        <th>
                                            business_address
                                        </th>
                                        <th>
                                            phone_no
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($distributors) > 0)
                                        @foreach($distributors as $distributor)
                                        <tr>
                                            <td>
                                                {{$distributor->id}}
                                            </td>
                                            <td>
                                                {{$distributor->name}} 
                                            </td>
                                            <td>
                                                {{$distributor->business_name}} 
                                            </td>
                                            <td>
                                                {{$distributor->email}} 
                                            </td>
                                            <td>
                                                {{$distributor->business_address}} 
                                            </td>
                                            <td>
                                                {{$distributor->phone_no}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('distributors')}}/{{$distributor->id}}" class="btn btn-warning">VIEW DISTRIBUTORS</a>
                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No distributor found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection