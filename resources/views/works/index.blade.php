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
                <a href="{{url('our-works/create')}}">
		            <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">Add Work</button>
	             </a>
                <table class="table table-bordered table-striped" id="category_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>  
                            <th> Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($works  as $key => $work)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$work->title}}</td>
                                <td>{{$work->description}}</td> 
                                <td><img style="width:70px;" src="/works_images/{{ $work->image }}"></td> 
                                <td> 
                                    @if($work->status == 1)
                                <a href="work/change/{{$work->id}}/{{$work->status - 1 }}"><span class="badge badge-success">Published</span></a>
                                    @else
                                    <a href="work/change/{{$work->id}}/{{$work->status + 1 }}"><span class="badge badge-danger">Not Publish</span></a>
                                    @endif

                                </td>
                                <td>
                                    {{-- <a href="/editproduct/{{$productretrieve->product_id}}"><button class="btn btn-primary"><span class="fa fa-edit" style="margin-right:5px;"></span>Edit</button></a> --}}                            
                                    <a href="/deleteproduct/{{$work->id}}"><button class="btn btn-danger"><span class="fa fa-trash" style="margin-right:5px;"></span>Delete</button></a>
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
