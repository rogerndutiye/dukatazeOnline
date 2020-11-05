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
            <main class="dash-content">
                <div class="container-cont" style="">
                @if(session('response'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('response')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                @endif
            <div class="row">
            <div class="panel">
                <div class="panel-body">
                     
                    @if (session('locale') == 'eng') 
                    <div class="col-md-12">
                        @if(count($stories) > 0)
                            @foreach($stories->all() as $key =>  $storie)
                            <div class="alert alert-success" style="background-color:#e177b9;color:white">
                                {{ $storie->storie_title_eng }} 

                            </div>  
                            <div class="row">
                                <div class="w-100 p-3" style="font-size:18px; color:#000;">
                                    <p><img style="width:60%;" src="/stories_images/{{ $storie->image }}" alt="{{ $storie->storie_title_eng }}"></p>
                                    <p class="lead">{!! $storie->storie_description_eng !!}</p>    
                                </div>
                                   
                                    
                                    <hr> 
                            </div>
                            
                            @endforeach
                        @else
                            <p>No Stories Available!</p>
                        @endif

                    </div>

                    @else

                    <div class="col-md-12">
                        @if(count($stories) > 0)
                            @foreach($stories->all() as $key =>  $storie)
                            <div class="alert alert-success" style="background-color:#e177b9;color:white">
                                {{ $storie->storie_title_kinya }} 

                            </div>  
                            <div class="row">
                                <div class="w-100 p-3" style="font-size:18px; color:#000;">
                                    <p><img style="width:60%;" src="/stories_images/{{ $storie->image }}" alt="{{ $storie->storie_title_kinya }}"></p>
                                      <p class="lead" style="font-size:18px; color:#000;">{!! $storie->storie_description_kinya	!!}</p>
                                    </div>
                            <hr>
                            </div>
                            @endforeach
                        @else
                            <p>No Stories Available!</p>
                        @endif

                    </div>

                    @endif                
                </div>
            </div>
					
		</div>
   
 @endsection 