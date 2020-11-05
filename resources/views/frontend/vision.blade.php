@extends('layouts.master')
@section('content')
@section('style')
<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    </style>
@endsection
<div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#"><img src="{{ asset('assets/img/icons.gif') }}" style="width:110px"></a>
            </header>
            <nav class="dash-nav-list">
                <a href="/" class="dash-nav-item">
                    <i class="fas fa-home"></i>{{__('message.homepage')}}</a>
					<div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i>{{__('message.E-counselling')}} </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="questionManage" class="dash-nav-dropdown-item">{{__('message.Ask Question')}}</a>
                    </div>
                </div>
                    <a href="productview" class="dash-nav-item">
                    <i class="fas fa-cube"></i>{{__('message.product')}}</a>
					<a href="storieview" class="dash-nav-item">
                    <i class="fas fa-book-reader"></i>{{__('message.Rep Health Stories')}}</a>
                    <a href="careertrajectory" class="dash-nav-item">
                    <i><img class="" style="width:30px;border-radius: 50%;" src="{{ asset('assets/img/trajectory.png') }}"></i>{{__('message.Carrer_Trajectory')}}</a>
				<a href="login" class="dash-nav-item">
                    <i class="fas fa-home"></i> {{__('message.login')}}</a>
            </nav>
        </div>
        <div class="dash-app">
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
            </header>
            <a href="https://twitter.com/dukataze"><img style="width:40px;" src="{{ asset('assets/img/twitter.png')}}"></a>
                <a href="https://www.instagram.com/dukataze/"><img style="width:40px;" src="{{ asset('assets/img/insta.png')}}"></a>
            <main class="dash-content">
                <div class="container-cont" style="">
                @if(session('response'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('response')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                @endif
                <div class="panel panel-defoult text-center no-boder ">
			<div class="panel-body">
				<div class="panel panel-header">
					<div class="container">
					<h2 class="wow fadeInUp">Vision</h2>
					<p class="wow fadeInUp" data-wow-delay="0.4s"></p>
					<div class="row">
						<div class="col-lg-12 col-md-12 wow fadeInLeft" data-wow-delay="1.8s">
							<img  src="{{asset('assets/dashboard/images/icons.gif')}}">
							<h1>Our Vision is to create a community where unintended pregnancies are no longer a detrimmental that stands in the the way of young women to wards achieving their full potential</h1>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
        @endsection 