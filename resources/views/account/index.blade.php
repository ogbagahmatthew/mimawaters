@extends('layouts.app') 
@section('title', 'Available accounts | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available accounts</h5>
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
                                            quantity
                                        </th>
                                        <th>
                                            amount_paid
                                        </th>
                                        <th>
                                            balance
                                        </th>
                                        <th>
                                            total
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($accounts) > 0)
                                        @foreach($accounts as $account)
                                        <tr>
                                            <td>
                                                {{$account->id}}
                                            </td>
                                            <td>
                                                {{$account->name}} 
                                            </td>
                                            <td>
                                                {{$account->quantity}} 
                                            </td>
                                            <td>
                                                {{$account->amount_paid}} 
                                            </td>
                                            <td>
                                                {{$account->balance}} 
                                            </td>
                                            <td>
                                                {{$account->total}} 
                                            </td>
                                            <td class="text">
                                                <a href="{{url('/account')}}/{{$account->id}}" class="btn btn-warning">VIEW ACCOUNTS</a>
                                                {{-- <a href="{{url('/account')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No account found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection