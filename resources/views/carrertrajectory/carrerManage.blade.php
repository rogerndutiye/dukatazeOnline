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
                <a href="/carrersave">
		            <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">Carrer Register</button>
	             </a>
                <table class="table table-bordered table-striped" id="category_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Passion</th>
                            <th>Mentor</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carrer_manage as $key => $carreretrieve)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$carreretrieve->carrer_firstname}}</td>
                                <td>{{$carreretrieve->carrer_lastname}}</td>
                                <td>{{$carreretrieve->dateofbirth}}</td>
                                <td>{{$carreretrieve->gender}}</td>
                                <td>{{$carreretrieve->carrer_passion}}</td>
                                <td>{{$carreretrieve->mentor_id}}</td>
                                <td>{{$carreretrieve->phone}}</td>
                                <td>{{$carreretrieve->email}}</td>
                                <td>
                                    {{-- <a href="/editcarrer/{{$carreretrieve->id}}"><button class="btn btn-primary"><span class="fa fa-edit"></span></button></a> --}}
                                    <a href="/deletecarrer/{{$carreretrieve->id}}"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
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