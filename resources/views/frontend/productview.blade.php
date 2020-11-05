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
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/bootstrap.min.css')}}">
	
<div class="dash">
        <div class="dash-nav dash-nav-dark">
          
            @include('partials.public_nav')
        </div>
        <div class="dash-app">
             
            <header class="dash-toolbar" style="background-color: #e177b9; color: white">
                <a href="#" class="menu-toggle">
                    <i class="fas fa-bars" style="color:white"></i>
                </a>        
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
            @if(session('response'))
            <div class="alert alert-success alert-dismissible" role="alert">{{session('response')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
               </button>
            </div>
            @endif 
            @if (app('request')->input('order')) 
            <div class="container-cont" style="">
               
        <form class="form-group" action="{{url('send/order')}}"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
            @csrf  
            <div class="content col-md-10">
                  <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                          <div class="col-sm-6">
                              <div class="form-group">
                              <img src="{{app('request')->input('image')}}" alt="{{app('request')->input('product_name')}}" width="50%"> 
                              <h2>{{app('request')->input('product_name')}}</h2> 
                            </div> 
                          </div> 
                          <input type="hidden" class="form-control" value="{{app('request')->input('price')}}" name="price" required>
                          <input type="hidden" class="form-control" value="{{app('request')->input('image')}}" name="image" required>
                         <input type="hidden" class="form-control" value="{{app('request')->input('product_name')}}" name="product_name" required>
                          
                          

                          <div class="col-sm-6">
                            <div class="form-group">
                            <label for="lastname">{{__('message.number_Of_items')}}<span class="kv-reqd">*</span></label>
                                <input type="text" class="form-control" value="{{old('item_number')}}" name="item_number" required>
                            </div> 
                        </div>
                        <div class="col-sm-6">
                         <div class="form-group">
                                <label for="lastname">{{__('message.phone')}}<span class="kv-reqd">*</span></label>
                         <input type="text" class="form-control" value="{{old('phone_number')}}" name="phone_number" required>
                        </div>
                    </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="lastname">{{__('message.adresse')}}<span class="kv-reqd">*</span></label>
                                  <input type="text" class="form-control" value="{{old('address')}}" name="address" required>
                              </div> 
                          </div>
                     
                    
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Send Order</button>
                    </div>
                  </div>
                </div> 
            </form>
            @else
                
            <main c lass="dash-content">
                <div class="container-cont" style="">
                @if(session('response'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('response')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                @endif
            <div class="row" style="padding:20px;">
			 
					<div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                         <div style="font-size:18px;" class="panel-body">{{__('message.product_review')}}</div>
                    </div>
						<div class="row">
                        @foreach($productView  as $key => $productretrieve)
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="product">
									<h4 style="margin-left:10px;">{{$productretrieve->product_name}}<br><small>{{$productretrieve->category_name}}</small></h4>
									<img src="/uploads/{{ $productretrieve->product_image }}" class="img-responsive" />
									<h4 class="text-center">{{$productretrieve->price}} frw</h4>
                                    <a class="btn btn-primary" href="?order=true&price={{$productretrieve->price}}&image={{url('/uploads/'.$productretrieve->product_image) }}&product_name={{$productretrieve->product_name}}&category_name={{$productretrieve->category_name}}" >{{__('message.order')}}</a>
								</div>
							</div>
                        @endforeach
					</div>
				</div> 

                </div>
 
            </main>
            @endif

        </div>
        @endsection

