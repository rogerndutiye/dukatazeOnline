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
 
            @include('partials.public_nav')
        </div>
        <div class="dash-app">
          @include('partials.public_header')
			
            <main class="dash-content12 ">
                <div class="container-cont" style=" margin-top: -25px; ">
      
	<!-- services -->
		<div class="panel panel-defoult text-center no-boder ">
		 	<div id="carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carousel" data-slide-to="0" class="active"></li>
					  <li data-target="#carousel" data-slide-to="1"></li>
					  <li data-target="#carousel" data-slide-to="2"></li>
					  <li data-target="#carousel" data-slide-to="3"></li>
					  <li data-target="#carousel" data-slide-to="4"></li>
					   <li data-target="#carousel" data-slide-to="5"></li>
					  <li data-target="#carousel" data-slide-to="6"></li>
					  <li data-target="#carousel" data-slide-to="7"></li>
					  
					</ol>
					<div class="carousel-inner">
					 
					  <div class="carousel-item active">
						<img class="d-block w-100" src="{{asset('slides/image_1.jpeg')}}" alt="Second slide">
					  </div>
					    <div class="carousel-item ">
						<img class="d-block w-100" src="{{asset('slides/image_2.jpeg')}}" alt="Second slide">
					  </div>
					    <div class="carousel-item">
						<img class="d-block w-100" src="{{asset('slides/2.jpg')}}" alt="Second slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="{{asset('slides/3.jpg')}}" alt="Third slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="{{asset('slides/4.jpg')}}" alt="Third slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="{{asset('slides/5.jpeg')}}" alt="Third slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="{{asset('slides/6.jpeg')}}" alt="Third slide">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" src="{{asset('slides/7.jpg')}}" alt="Third slide">
					  </div>
					</div>
					<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div> 
        <div class="container">
			<h1> </h1>
			 <div class="row">
				<div class="col-md-6">
					<a class="twitter-timeline" data-width="320" data-height="600" data-theme="light" data-link-color="#808080" href="https://twitter.com/dukataze"></a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				
				</div>
				<div class="col-md-6">
					<div class="fb-page" data-href="https://www.facebook.com/dukataze/" data-tabs="timeline" data-width="320" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dukataze/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dukataze/">Dukataze</a></blockquote></div>
				</div>
				
			</div>
		</div>  
 @endsection 
 @section('javascript')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0&appId=426416481036590&autoLogAppEvents=1"></script>
 @endsection