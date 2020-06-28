@extends('layouts.app') 
@section('title', 'Available orderss | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available orders</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($orders) > 0)
                                        @foreach($orders as $orders)
                                        <tr>
                                            <td>
                                                {{$orders->id}}
                                            </td>
                                            <td>
                                                {{$orders->name}} 
                                            </td>
                                            <td>
                                                {{$orders->email}} 
                                            </td>
                                            <td>
                                                {{$orders->address}} 
                                            </td>
                                            <td>
                                                {{$orders->quantity}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('confirms')}}/{{$orders->id}}" class="btn btn-warning">CONFIRM ORDER</a>
                                                {{-- <a href="{{url('/orders')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No Orders found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection