<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dukataze</title>
	<meta charset="utf-8">
	<!-- BEGIN CORE FRAMEWORK -->
	<link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<!-- END CORE FRAMEWORK -->
	
	<!-- BEGIN PLUGIN STYLES -->
	<link href="{{ URL::asset('assets/plugins/animate/animate.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/plugins/bootstrapValidator/bootstrapValidator.min.css') }}" rel="stylesheet" />
	<!-- END PLUGIN STYLES -->
	
	<!-- BEGIN THEME STYLES -->
	<link href="{{ URL::asset('assets/css/material.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/css/plugins.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/css/helpers.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet" />
	<link href="{{ URL::asset('assets/css/mystyle.css') }}" rel="stylesheet" />
	<!-- END THEME STYLES -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset('assets/dashboard/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/animate.min.css')}}">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/spur.css')}}">	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
	<style>
		.dash-nav.dash-nav-dark {
			background-color: #01042d;
		}
		.bg-grey-900 {
			background-color: #01042d !important;
		}
	</style>
</head>
<body class="auth-page height-auto bg-grey-600">
<div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
				<a href="#"><img src="{{ asset('assets/img/logo.jpeg') }}" style="width:130px"></a>
			 </header>
            <div style="margin-top:40%;">
				@include('partials.public_nav')  
			</div>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar" style="background-color: #e177b9; color: white">
				<a href="{{url('/')}}" class="menu-toggle">
					<i class="fas fa-bars" style="color:white"></i>
				</a>
				{{-- <a href="#" class="searchbox-toggle">
					<i class="fas fa-search" style="color:white"></i>
				</a> --}}
				<form class="searchbox" action="#!">
					<a href="#" class="searchbox-toggle"> <i class="fas fa-arrow-left"  style="color:white"></i> </a>
					<button type="submit" class="searchbox-submit"> <i class="fas fa-search"  style="color:white"></i> </button>
					<input type="text" class="searchbox-input" style="background-color: #e177b9; color: white;" placeholder="{{__('message.type_to_search')}}">
				</form>
				<button class="btn"><a href="lang/kinya"><span style="color:white; padding-left:5%;">Kinyarwanda</span></a></button>
				<button class="btn"><a href="lang/eng"><span style="color:white; padding-left:5%;">English</span></a></button>
				
				<a href="https://twitter.com/dukataze"><img style="width:30px;" src="{{ asset('assets/img/twitter.png')}}"></a>
				<a href="https://www.instagram.com/dukataze/"><img style="width:30px;" src="{{ asset('assets/img/insta.png')}}"></a>
				<a href="https://www.facebook.com/dukataze/" target="_blank"><img style="width:30px;" src="{{ asset('assets/img/face.png')}}"></a>
			  
			</header>
		<div class="wrapper animated fadeInDown">
		<div class="panel overflow-hidden">
			<div class="bg-grey-900 padding-12  font-size-20 color-white  text-uppercase">
				<img src="{{ asset('assets/img/dukataze_logo.jpg') }}" style="width:100px">
			</div>
			@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> {{__('message.problem')}} <br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			<form id="loginform" method="post" action="{{ url('login') }}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="box-body padding-md">
				
					<div class="form-group">
						<input type="text" name="email" class="form-control input-lg" placeholder="Email"/>
					</div>
					
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="Password"/>
					</div>        
					      
					<div class="form-group margin-top-20">
						<div class="checkbox checkbox-theme">
							<input type="checkbox" id="remember" name="remember">
							<label for="remember">{{__('message.Remember')}}</label>
						</div>
					</div>  
					
					<button type="submit" class="btn btn-dark bg-light-green-500 padding-10 btn-block color-white"><i class="ion-log-in"></i>{{__('message.login')}}</button>  
				</div>
			</form>
			<div class="panel-footer padding-md no-margin no-border bg-grey-900 text-center color-white">&copy; 2019 Dukataze by DUKATAZE</div>
		</div>
	</div>	
    <!-- Javascript -->
    <script src="{{ URL::asset('assets/plugins/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/js/core.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	
	<!-- bootstrap validator -->
	<script src="{{ URL::asset('assets/plugins/bootstrapValidator/bootstrapValidator.min.js') }}" type="text/javascript"></script>
	
	<!-- maniac -->
	<script src="{{ URL::asset('assets/js/maniac.js') }}" type="text/javascript"></script>
	
    <script src="{{ URL::asset('assets/js/login.js') }}" type="text/javascript"></script>
	
	<script type="text/javascript">
		gymie.loadvalidator();
	</script>
    </body>
</html>