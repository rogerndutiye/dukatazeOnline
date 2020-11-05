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
	<style>
	 h2 {
    color: #e177b9;
	}
	</style>
        <div class="dash-nav dash-nav-dark">
 
            @include('partials.public_nav')
        </div>
        <div class="dash-app">
          @include('partials.public_header')
		  <main class="dash-content">
			<div class="container">
				 <div class="row">
				  <div class="col-md-12">
					 <div class="alert alert-success" style="background-color:#e177b9;color:white">
						{{__('message.who_we_are')}}
					  </div>
					<div>
						<img class="img-fluid" style="width: 300px;border-radius: 50%;" src="{{ asset('assets/dashboard/images/slider.jpeg') }}" class="imgs">
					</div>
					<p>{{__('message.who_we_are_content')}}</p> 
					{{-- <a href="#services"><button class="btn btn-primary">{{__('message.vision')}}</button></a>
					<a href="#mission"><button class="btn btn-primary">{{__('message.mission')}}</button></a> --}}
				   
				  </div>
				  
				</div>

				<div class="row">
					<div class="col-md-12">
					  
					  <div class="alert alert-success" style="background-color:#e177b9;color:white">
						{{__('message.vision')}}
					  </div>
					  <img class="img-fluid" style="width:300px;height:300px;border-radius: 50%;" src="{{ asset('slides/short.jpg') }}">
					  <p>{{__('message.vision_content')}}</p>
					</div>
					 
					
				  </div>
  
				  <div class="row">
					<div class="col-md-12">
						 <div class="alert alert-success" style="background-color:#e177b9;color:white">
							{{__('message.mission')}}
						  </div>
						<p style="">{!!__('message.mission_content')!!}</p>
					</div>
					 
					
				  </div>


			 
		</main>	
	</div>
</div>
</div>     
	 
 @endsection 