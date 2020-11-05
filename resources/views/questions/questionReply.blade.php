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
                     <form class="form-group" action="/questionreplysave"  method="POST" enctype="multipart/form-data" style="margin-top:2%; margin-right:0;">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title"> Ask Question</div>
                                </div>
                                <input type="hidden" name="question_id" value="{{$question_get_reply->id}}">
                                <div class="card-body ">
                                <div class="row">
                                <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="category Name">Reply Question<span class="kv-reqd">*</span></label>
                                            <textarea name="reply_message"  value="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <hr>
                                    <div class=""> 
                                        <button type="submit" class="btn btn-primary" name="saveProduct">Save</button>
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
    @section('javascript')
        <script>
            $(document).ready( function () {
        $('#category_table').DataTable();
    } );
        </script>
    @endsection