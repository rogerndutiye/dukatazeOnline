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
                     <form class="form-group" action="category"  method="POST" enctype="multipart/form-data" style="margin-left:5%;margin-top:6%; margin-right:0;">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="functionname">Category  Name<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="" name="category_name" required>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <hr>
                                    <div class="text-right"> 
                                        <button type="submit" class="btn btn-primary" name="saveFunction">Save</button>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    @endsection