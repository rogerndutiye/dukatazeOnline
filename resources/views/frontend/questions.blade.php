@extends('layouts.master')

@section('content')
 
    <div class="dash" style="font-size: 16px;font-style: normal;">
        <div class="dash-nav dash-nav-dark">
            @include('partials.public_nav')
        </div>
        <div class="dash-app" >
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
               <div class="panel panel-default"> 
                <div class="panel-body">
                    <div class="col-md-12">
                     <div class="alert alert-success" style="background-color:#e177b9;color:white">
                        {{__('message.question_p')}}

                    </div>  
          
                <a href="/questionsave">
                <button class="btn btn-primary" style="margin-top:1%; margin-bottom:1%;">{{__('message.Ask_Question')}}</button>
                 </a>
                    <table class="table table-bordered table-striped  table-responsive-sm" id="category_table">
                        <thead>  
                            <tr>
                                {{-- <th>#</th> --}}
                                {{-- <th>{{__('message.names')}}</th> --}}
                                {{-- <th>{{__('message.address')}}</th> --}}
                                <th>{{__('message.response')}}</th> 
                                <th>{{__('message.q_title')}}</th>
                                <th>{{__('message.q_desc')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($question_manager  as $key => $questionretrieve)
                                <tr>
                                    {{-- <td>{{++$key}}</td> --}}
                                    {{-- <td>{{$questionretrieve->full_name}}</td> --}}
                                    {{-- <td>{{$questionretrieve->address}}</td> --}}
                                    @if($questionretrieve->reply_action==1)
                                <td style=""><a href="{{url('get/reply/')}}/{{$questionretrieve->id}}"><span style="border-radius:5px;" class="btn btn-success">{{__('message.answer')}}</span></a></td>
                                    @else
                                    <td style=""><span style="border-radius:5px;" class="btn btn-danger">{{__('message.waiting')}}</span></td>
                                      
                                    @endif
                                    <td>{{$questionretrieve->question_title}}</td>
                                    <td>{!!$questionretrieve->question_description !!}</td>
                                    
                                     
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                
                </div>
            </div>
        </div>
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