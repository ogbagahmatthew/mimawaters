@extends('layouts.app') 
@section('title', 'Available updatess | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Updates</h5>
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
                                            Info
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($updates) > 0)
                                        @foreach($updates as $updates)
                                        <tr>
                                            <td>
                                                {{$updates->id}}
                                            </td>
                                            <td>
                                                {{$updates->name}} 
                                            </td>
                                            <td>
                                                {{$updates->email}} 
                                            </td>
                                            <td>
                                                {{$updates->info}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/updates')}}/{{$updates->id}}" class="btn btn-warning">VIEW updates</a>
                                                {{-- <a href="{{url('/updates')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No updates found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection