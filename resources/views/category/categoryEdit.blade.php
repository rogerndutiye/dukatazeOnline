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
                     <form class="form-group" action="{{url('updateCategory')}}"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                     @csrf
                     @method('PATCH')
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title"> Update Category </div>
                                </div>
                                <div class="card-body ">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="functionname">Category  Name<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="{{$categorys->category_name}}" name="category_name" required>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <hr>
                                    <div class=""> 
                                        <button type="submit" class="btn btn-primary" name="saveFunction">Update</button>
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