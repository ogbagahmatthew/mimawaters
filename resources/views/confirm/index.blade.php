@extends('layouts.app') 
@section('title', 'Available confirms | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available confirms</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            quantity
                                        </th>
                                        <th>
                                            amount
                                        </th>
                                        {{-- <th>
                                            Position_sort
                                        </th> --}}
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($confirms) > 0)
                                        @foreach($confirms as $confirm)
                                        <tr>
                                            <td>
                                                {{$confirm->id}}
                                            </td>
                                            <td>
                                                {{$confirm->quantity}} 
                                            </td>
                                            <td>
                                                {{$confirm->amount}} 
                                            </td>
                                        
                                           
                                            <td class="text">
                                                <a href="{{url('/confirms')}}/{{$confirm->id}}" class="btn btn-warning">VIEW CONFIRMED</a>
                                                {{-- <a href="{{url('/confirm')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No confirm found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection