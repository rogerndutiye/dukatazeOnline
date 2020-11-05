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
<div class="dash">
        <div class="dash-nav dash-nav-dark">
            
            @include('partials.private_nav')
        </div>
        <div class="dash-app">
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
                     <form class="form-group" action="{{{url('our-works')}}}"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                     
                            {{ csrf_field() }} 
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title">{{__('message.Carrer_Trajectory')}} </div>
                                </div>
                                <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Firstname">Title<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Status<span class="kv-reqd">*</span></label>
                                             <select class="form-control"  name="status">
                                            <option value="0">Not Published</option>
                                            <option value="1">Published</option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="carrer_passion">Image<span class="kv-reqd">*</span></label>
                                            <input type="file" class="form-control"  name="image" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="carrer_passion">Description<span class="kv-reqd">*</span></label>
                                            <textarea class="form-control" name="description"></textarea> 
                                        </div>
                                    </div>
                                </div>
                               
                                
                                    <div class="form-group">
                                    <hr>
                                    <div class=""> 
                                        <button type="submit" class="btn btn-primary" name="saveCarrer">{{__('message.save')}}</button>
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