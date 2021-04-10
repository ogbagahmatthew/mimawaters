@extends('layouts.app') 
@section('title', 'Available feedbacks | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available feedbacks</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            firstname
                                        </th>
                                        <th>
                                            laststname
                                        </th>
                                        <th>
                                            email
                                        </th>
                                        <th>
                                            title
                                        </th>
                                        <th>
                                            comment
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($feedbacks) > 0)
                                        @foreach($feedbacks as $feedback)
                                        <tr>
                                            <td>
                                                {{$feedback->id}}
                                            </td>
                                            <td>
                                                {{$feedback->firstname}} 
                                            </td>
                                            <td>
                                                {{$feedback->lastname}} 
                                            </td>
                                            <td>
                                                {{$feedback->email}} 
                                            </td>
                                            <td>
                                                {{$feedback->title}} 
                                            </td>
                                            <td>
                                                {{$feedback->comment}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/feedback')}}/{{$feedback->id}}" class="btn btn-warning">VIEW feedbacks</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No feedback found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection