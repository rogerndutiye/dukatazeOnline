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
                     <form class="form-group" action="stories"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title"> Add Storie</div>
                                </div>
                                <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="storietitle">Enter Storie Title Eng<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="{{old('storie_title_eng')}}" name="storie_title_eng" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="storietitle">Enter Storie Title Kinya<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="{{old('storie_title_kinya')}}" name="storie_title_kinya" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Storie Description">Storie description Eng<span class="kv-reqd">*</span></label>
                                            <textarea name="storie_description_eng" class="form-control">{{old('storie_description_eng')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Storie Description">Storie description Kinya<span class="kv-reqd">*</span></label>
                                            <textarea name="storie_description_kinya" class="form-control">{{old('storie_description_kinya')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Storie Description">Image<span class="kv-reqd">*</span></label>
                                            <input type="file" class="form-control" value="" name="image" >
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