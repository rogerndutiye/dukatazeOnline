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
                <a href="/productsave">
		            <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">Add Product</button>
	             </a>
                <table class="table table-bordered table-striped" id="category_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Category Type</th>
                            <th>Price</th>
                            <th>Product Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product_manage  as $key => $productretrieve)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$productretrieve->product_name}}</td>
                                <td>{{$productretrieve->category_name}}</td>
                                <td>{{$productretrieve->category_type_name}}</td>
                                <td>{{$productretrieve->price}}</td>
                                <td><img style="width:70px;" src="/uploads/{{ $productretrieve->product_image }}"></td>
                               
                                <td> 
                                    @if($productretrieve->status == 1)
                                <a href="/publish/{{$productretrieve->product_id}}/{{$productretrieve->status - 1 }}"><span class="badge badge-success">Published</span></a>
                                    @else
                                    <a href="/publish/{{$productretrieve->product_id}}/{{$productretrieve->status + 1 }}"><span class="badge badge-danger">Not Publish</span></a>
                                    @endif

                                </td>
                                <td>
                                    {{-- <a href="/editproduct/{{$productretrieve->product_id}}"><button class="btn btn-primary"><span class="fa fa-edit" style="margin-right:5px;"></span>Edit</button></a> --}}                            
                                    <a href="/deleteproduct/{{$productretrieve->product_id}}"><button class="btn btn-danger"><span class="fa fa-trash" style="margin-right:5px;"></span>Delete</button></a>
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