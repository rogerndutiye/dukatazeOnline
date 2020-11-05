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
                     <form class="form-group" action="mentor"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title">Register Mentor </div>
                                </div>
                                <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Firstname">First Name<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="mentor_firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="lastnamee">Last Name<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="mentor_lastname" required>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="category Name">Mentor Title<span class="kv-reqd">*</span></label>
                                            <select class="form-control" name="mentor_title" required>
                                                <option value="">Choose Mentor Title</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Prof">Prof</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mentor Name">Mentor Gender<span class="kv-reqd">*</span></label>
                                                <select class="form-control" name="mentor_gender" required>
                                                    <option value="">Choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mentor_email">Mentor Email<span class="kv-reqd">*</span></label>
                                            <input type="email" class="form-control" value="" name="mentor_email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mentor_phone">Mentor Phone<span class="kv-reqd">*</span></label>
                                            <input type="number" class="form-control" value="" name="mentor_phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mentor_address">Mentor Address<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="mentor_address" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="mentor_qualification">Mentor Qualification<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="mentor_qualification" required>
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