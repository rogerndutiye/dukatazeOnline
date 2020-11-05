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
                <div class="col-md-12">
                       @if(count($works)>0)
                        @foreach($works->all() as $key =>  $storie)
                        <div class="alert alert-success" style="background-color:#e177b9;color:white">
                            {{ $storie->title }}
                          </div>
                        <div class="row">
                            
                          <div class="col-md-4 pull-right">
                               <img style="width: 300px; border-radius: 50%;" src="/works_images/{{ $storie->image }}" alt="{{ $storie->title }}">
                            
                        
                          </div>
                          <div class="col-md-5 pull-left">
                         
                        <p style="font-size:18px; color:#000;">{!!$storie->description	!!}</p>
                          </div>
                        <hr>
                    </div>
                        @endforeach
                        {{ $works->links() }}
                    @else
                        <p>No Works Available!</p>
                    @endif
                       

                </div>
                </div>
            </div>
					
		</div>
   
 @endsection 