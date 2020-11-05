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
                    <div class="alert alert-success alert-dismissible" role="alert">{{session('response')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                @endif
                <a href="/categorysave">
                    <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">Add Category</button>
                 </a>
                <table class="table table-bordered table-striped" id="category_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category_manager as $key => $categoryretrieve)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$categoryretrieve->category_name }}</td>
                                <td>
                                    {{-- <a href="/editCategory/{{$categoryretrieve->id}}"><button class="btn btn-primary"><span class="fa fa-edit" style="margin-right:5px;"></span>Edit</button></a> --}}
                                    <a href="/delete/{{ $categoryretrieve->id}}"><button class="btn btn-danger"><span class="fa fa-trash" style="margin-right:5px;"></span>Delete</button></a>
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