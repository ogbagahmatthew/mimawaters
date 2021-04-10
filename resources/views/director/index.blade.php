@extends('layouts.app') 
@section('title', 'Available directors | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available directors</h5>
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
                                        @if(count($directors) > 0)
                                        @foreach($directors as $director)
                                        <tr>
                                            <td>
                                                {{$director->id}}
                                            </td>
                                            <td>
                                                {{$director->name}} 
                                            </td>
                                            <td>
                                                {{$director->email}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/director')}}/{{$director->id}}" class="btn btn-warning">VIEW directors</a>
                                                {{-- <a href="{{url('/director')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No director found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection 