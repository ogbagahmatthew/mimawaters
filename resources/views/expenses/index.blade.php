@extends('layouts.app') 
@section('title', 'Available expensess | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available expenses</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            name_item
                                        </th>
                                        <th>
                                            cost_price
                                        </th>
                                        <th>
                                            quantity_item
                                        </th>
                                        <th>
                                            total_cost
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($expenses) > 0)
                                        @foreach($expenses as $expense)
                                        <tr>
                                            <td>
                                                {{$expense->id}}
                                            </td>
                                            <td>
                                                {{$expense->name_item}} 
                                            </td>
                                            <td>
                                                {{$expense->cost_price}} 
                                            </td>
                                            <td>
                                                {{$expense->quantity_item}} 
                                            </td>
                                            <td>
                                                {{$expense->total_cost}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/expenses')}}/{{$expense->id}}" class="btn btn-warning">VIEW Expenses</a>
                                                {{-- <a href="{{url('/expenses')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No expenses found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection