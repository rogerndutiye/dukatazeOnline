@extends('layouts.master')
@section('style')
<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    </style>
@endsection
@section('content')
    <div class="dash" style="font-size: 16px;font-style: normal;">
        <div class="dash-nav dash-nav-dark">
            @include('partials.private_nav')
        </div>
        <div class="dash-app" >
            @include('partials.private_header')

            <main class="dash-content">
                <div class="container-cont" style="">
                @if(session('response'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('response')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                @endif
               
                <table class="table table-bordered table-striped" id="category_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>address</th>
                            <th>Question Title</th>
                            <th>Question Description</th>
                            <th>Reply Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($question_manager  as $key => $questionretrieve)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$questionretrieve->full_name}}</td>
                                <td>{{$questionretrieve->address}}</td>
                                <td>{{$questionretrieve->question_title}}</td>
                                <td>{{$questionretrieve->question_description}}</td>
                                @if($questionretrieve->reply_action ==1)
                                <td style=""><span style="border-radius:5px;" class="btn btn-success">replyed</span></td>
                                @else
                                <td style=""><span style="border-radius:5px;" class="btn btn-info">not yet</span></td>
                                
                                @endif
                                
                                <td>
                                    <a href="/questionreply/{{$questionretrieve->id}}"><button class="btn btn-primary"><span class="fa fa-reply-all"></span></button></a>
                                    <a href="/deletequestion/{{$questionretrieve->id}}"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </main>
        </div>
    </div>
@endsection     
@section('javascript')
    <script>
        $(document).ready( function () {
    $('#category_table').DataTable();
} );
    </script>
@endsection