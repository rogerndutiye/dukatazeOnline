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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Sorry Check Back your Input!</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                     <form class="form-group" action="product"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title"> Add Product </div>
                                </div>
                                <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category name Type">Product Name<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="{{old('product_name')}}" name="product_name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="category name">Category Name<span class="kv-reqd">*</span></label>
                                             <select class="form-control" name="category_id">
                                                @foreach($category_arrayname as $categ_name)
                                                <option value="{{$categ_name->id}}">{{$categ_name->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category type Name">Category Type<span class="kv-reqd">*</span></label>
                                            <select class="form-control" name="category_type_id">
                                                @foreach($category_type_arrayname as $categ_type)
                                                <option value="{{$categ_type->category_type_id}}">{{$categ_type->category_type_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category Name">Price<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="{{old('price')}}" name="price" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="category Name">Product Image<span class="kv-reqd">*</span></label>
                                        <input type="file" class="form-control"  name="product_image" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="description">Description<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="{{old('description')}}" name="description" required>
                                    </div>
                                </div>
                                </div>
                                    <div class="form-group">
                                    <hr>
                                    <div class=""> 
                                        <button type="submit" class="btn btn-primary" name="saveProduct">Save</button>
                                    </div>
                                </div>
                                </div>
                        </div>
                            <div class="row">    
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    @endsection     