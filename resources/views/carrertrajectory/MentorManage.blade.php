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
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#"><img src="{{ asset('assets/img/icons.gif') }}" style="width:110px"></a>
            </header>
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
                <a href="/mentorsave">
		            <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">Add Mentor</button>
	             </a>
                <table class="table table-bordered table-striped" id="category_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mentor Title</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>phone</th>
                            <!-- <th>Address</th> -->
                            <th style="width:0px">qualification</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mentor_manage  as $key => $mentoretrieve)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$mentoretrieve->mentor_title}}</td>
                                <td>{{$mentoretrieve->mentor_firstname}}</td>
                                <td>{{$mentoretrieve->mentor_lastname}}</td>
                                <td>{{$mentoretrieve->mentor_gender}}</td>
                                <td>{{$mentoretrieve->mentor_email}}</td>
                                <td>{{$mentoretrieve->mentor_phone}}</td>
                                <!-- <td>{{$mentoretrieve->mentor_address}}</td> -->
                                <td>{{$mentoretrieve->mentor_qualification}}</td>
                                <td>
                                    {{-- <a href="/editmentor/{{$mentoretrieve->id}}"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> --}}
                                    <a href="/deletementor/{{$mentoretrieve->id}}"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
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