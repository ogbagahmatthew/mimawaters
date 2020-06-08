@extends('layouts.app') 
@section('title', 'Available products | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available products</h5>
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
                                            sold
                                        </th>
                                        <th>
                                            remains
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($products) > 0)
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                                {{$product->id}}
                                            </td>
                                            <td>
                                                {{$product->quantity}} 
                                            </td>
                                            <td>
                                                {{$product->sold}} 
                                            </td>
                                            <td>
                                                {{$product->remains}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/products')}}/{{$product->id}}" class="btn btn-warning">VIEW products</a>
                                                {{-- <a href="{{url('/product')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No product found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection