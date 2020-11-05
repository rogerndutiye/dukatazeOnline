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
                     <form class="form-group" action="carrer"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title">Career trajectory </div>
                                </div>
                                <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Firstname">First Name<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="carrer_firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="carrer_lastname" required>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <div class="form-group">
                                            <label for="dob">Date Of Birth<span class="kv-reqd">*</span></label>
                                            <input type="date" class="form-control" value="" name="dateofbirth" required>
                                        </div> 
                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="mentor Name"> Gender<span class="kv-reqd">*</span></label>
                                                <select class="form-control" name="gender" required>
                                                    <option value="">choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="carrer_passion">Passion<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="carrer_passion" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="carrer_passion">State your expectation from mentorship<span class="kv-reqd">*</span></label>
                                            <textarea class="form-control" name="mentor_id"></textarea>
                                            <!-- <input type="text" class="form-control" value="" name="mentor_id" required> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">phone<span class="kv-reqd">*</span></label>
                                            <input type="text" class="form-control" value="" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email<span class="kv-reqd">*</span></label>
                                            <input type="email" class="form-control" value="" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                           
                                        </div>
                                    <div class="form-group">
                                    <hr>
                                    <div class=""> 
                                        <button type="submit" class="btn btn-primary" name="saveCarrer">Save</button>
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