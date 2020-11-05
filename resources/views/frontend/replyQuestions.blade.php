@extends('layouts.master')
@section('style')
<style> 
    .table-responsive {
    display: table;
}
    </style>
@endsection
@section('content')
    <div class="dash" style="font-size: 16px;font-style: normal;">
        <div class="dash-nav dash-nav-dark">
            @include('partials.public_nav')
        </div>
        <div class="dash-app" >
            @include('partials.public_header')

            <main class="dash-content">
                <div class="container-cont" style="">
                
                <a href="{{url('questions')}}">
                <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">{{__('message.back')}}</button>
                 </a>
                 <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Question Title</th>
                            <th>Question Description</th> 
                        </tr>
                    </thead>
                    <tbody>
                            <tr> 
                                <td>{{$question->question_title}}</td>
                                <td>{!! $question->question_description !!}</td>
                               
                            </tr> 
                    </tbody>
                </table>
                </div>

            </div>
                <div class="panel">
                    <div class="panel-header">
                        Reply message
                    </div>
                    <div class="panel-body">
                    <div class="col-md-12">
                            @if(count($repled_questions)>0)
                                @foreach($repled_questions  as  $storie)
                                <div class="row">
                                    <div class="w-100 p-3" style="font-size:18px; color:#000;">
                                <p  class="lead">{!! $storie->reply_message	!!}</p>
                                    </div>
                                </div>                                  
                                <hr>
                                @endforeach
                            @else
                                <p>No reply Available!</p>
                            @endif
    
                    </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection    