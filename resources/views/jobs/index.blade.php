@extends('layouts.app') 
@section('title', 'Available jobss | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available jobss</h5>
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
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($jobs) > 0)
                                        @foreach($jobs as $job)
                                        <tr>
                                            <td>
                                                {{$job->id}}
                                            </td>
                                            <td>
                                                {{$job->name}} 
                                            </td>
                                            <td>
                                                {{$job->description}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/jobs')}}/{{$job->id}}" class="btn btn-warning">VIEW JOBS</a>
                                                {{-- <a href="{{url('/jobs')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No jobs found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection