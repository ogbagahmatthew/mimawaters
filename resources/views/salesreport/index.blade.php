@extends('layouts.app') 
@section('title', 'Available salesreports | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available salesreport Report</h5>
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
                                            Description
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($salesreports) > 0)
                                        @foreach($salesreports as $salesreport)
                                        <tr>
                                            <td>
                                                {{$salesreport->id}}
                                            </td>
                                            <td>
                                                {{$salesreport->name}} 
                                            </td>
                                           
                                            <td>
                                                {{$salesreport->description}} 
                                            </td>
                                            <td>
                                                {{$salesreport->email}} 
                                            </td>
                                            <td class="text">
                                                <a href="{{url('/salesreport')}}/{{$salesreport->id}}" class="btn btn-warning">VIEW SALES REPORT</a>
                                                {{-- <a href="{{url('/salesreport')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No salesreport found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection