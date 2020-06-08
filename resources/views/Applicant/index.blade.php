@extends('layouts.app') 
@section('title', 'Available Applicants | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Applicants</h5>
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
                                            Position_sort
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($applicants) > 0)
                                        @foreach($applicants as $applicant)
                                        <tr>
                                            <td>
                                                {{$applicant->id}}
                                            </td>
                                            <td>
                                                {{$applicant->name}} 
                                            </td>
                                            <td>
                                                {{$applicant->email}} 
                                            </td>
                                            <td>
                                                {{$applicant->Position_sort}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/applicant')}}/{{$applicant->id}}" class="btn btn-warning">VIEW APPLICANTS</a>
                                                {{-- <a href="{{url('/applicant')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No applicant found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection