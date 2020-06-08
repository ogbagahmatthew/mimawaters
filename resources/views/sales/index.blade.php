@extends('layouts.app') 
@section('title', 'Available sales | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available sales</h5>
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
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($sales) > 0)
                                        @foreach($sales as $sale)
                                        <tr>
                                            <td>
                                                {{$sale->id}}
                                            </td>
                                            <td>
                                                {{$sale->name}} 
                                            </td>
                                            <td>
                                                {{$sale->email}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/sales')}}/{{$sale->id}}" class="btn btn-warning">VIEW sales</a>
                                                {{-- <a href="{{url('/sale')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No sale found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection