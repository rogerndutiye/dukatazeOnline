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
            <nav class="dash-nav-list">
            <a href="home" class="dash-nav-item">
                    <i class="fas fa-home"></i>{{__('message.homepage')}}</a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> {{__('message.E-counselling')}} </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="questionManage" class="dash-nav-dropdown-item">{{__('message.Ask Question')}}</a>
                        <a href="replyedManage" class="dash-nav-dropdown-item">{{__('message.Replied_Question')}}</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i>{{__('message.product')}}</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="categoryManage" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.product')}}</span></a>
                        <a href="categoryTypeManage" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.product_category')}}</span></a>
                        <a href="productManage" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.category_type')}}</span></a>
                    </div>
                </div>
                <a href="storiesManage" class="dash-nav-item">
                    <i class="fas fa-book-reader"></i><span style="font-size:13px;">{{__('message.Rep Health Stories')}}</span></a>
                    <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i><img class="" style="width:30px;border-radius: 50%;" src="{{ asset('assets/img/trajectory.png') }}"></i><span style="font-size:14px;">{{__('message.Carrer_Trajectory')}} </span></a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="mentorManage" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.mentor')}}</span></a>
                        <a href="carrerManage" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.Rep Health Stories')}}</span></a>
                    </div>
                </div>
                    <a href="logout" class="dash-nav-item">
                    <i class="fa fa-sign-out-alt"></i>{{__('message.Logout')}}</a>
            </nav>
        </div>
        <div class="dash-app" >
            <header class="dash-toolbar">
                <a href="#" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="{{__('message.type_to_search')}}">
                </form>
                <button class="btn btn-default"><a href="lang/kinya"><span style="color:black; padding-left:5%;">Kinyarwanda</span></a></button>
				<button class="btn btn-default"><a href="lang/eng"><span style="color:black; padding-left:5%;">English</span></a></button>
                <a href="https://twitter.com/dukataze"><img style="width:40px;" src="{{ asset('assets/img/twitter.png')}}"></a>
                <a href="https://www.instagram.com/dukataze/"><img style="width:40px;" src="{{ asset('assets/img/insta.png')}}"></a>
            </header style="margin-bottom:10%;">

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
                     <form class="form-group" action="categorytype"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                            {{ csrf_field() }}
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
                                        <label for="category name Type">Category type Name<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="" name="category_type_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <!-- <label for="category Name">Category  Name<span class="kv-reqd">*</span></label>
                                        <input type="text" class="form-control" value="" name="category_id" required> -->
                                    <select name="category_id" class="form-control">
                                    @foreach($cat_name_get as $category_names)
                                            <option value="{{$category_names->id}}">{{$category_names->category_name}}</li>
                                    @endforeach
                                    </select>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <hr>
                                    <div class=""> 
                                        <button type="submit" class="btn btn-primary" name="savecategorytype">Save</button>
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
 