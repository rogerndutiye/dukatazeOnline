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
            @include('partials.private_nav')
        </div>
        <div class="dash-app" >
           @include('partials.private_header')
            <main class="dash-content">
                <div class="container-cont" style="">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> {{__('message.Questions')}}  </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                   
                                    <div class="stats-data"> 
                                            <div class="stats-number"><?php
                                                echo $data["question"];
                                                  ?></div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success ">
                                <h3 class="stats-title">{{__('message.product')}} </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"> <?php
                                            echo $data["product"];
                                              ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger">
                                <h3 class="stats-title">{{__('message.Rep Health Stories')}}</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"> <?php
                                            echo $data["stories"];
                                              ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-warning">
                                <h3 class="stats-title"> {{__('message.E-counselling')}} </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    
                                    <div class="stats-data"> 
                                            <div class="stats-number"> <?php
                                                echo $data["question"];
                                                  ?></div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> {{__('message.Carrer_Trajectory')}} </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    
                                    <div class="stats-data"> 
                                            <div class="stats-number"> <?php
                                                echo $data["work"];
                                                  ?></div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @endsection