<header style="background-color: #01042d; height: 84px; ">
    <a href="#!" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </a>
    <a href="#"><img src="{{ asset('assets/img/logo.jpeg') }}" style="width:130px"></a>
</header>
<nav class="dash-nav-list" style="font-size: 13px; ">
    <a href="/" class="dash-nav-item">
        <i class="fas fa-home"></i>{{__('message.homepage')}}</a>
        <div class="dash-nav-dropdown">
        <a href="{{url('questions')}}" class="dash-nav-item">
            <i class="fas fa-chart-bar"></i>{{__('message.E-counselling')}} </a>
      
    </div>
        <a href="{{url('storieview')}}" class="dash-nav-item">
        <i class="fas fa-book-reader"></i>
        {!!__('message.Rep Health Stories')!!}
    </a>
        <a href="{{url('careertrajectory')}}" class="dash-nav-item">
        <i class="fas fa-check-square"> </i>{{__('message.Carrer_Trajectory')}}</a>
    
        <a href="{{url('productview')}}" class="dash-nav-item">
            <i class="fas fa-cube"></i>{{__('message.product')}}</a>
       <a href="{{url('about-us')}}" class="dash-nav-item">
                <i class="fas fa-question-circle"></i>{{__('message.about')}}</a>
        <a href="{{url('login')}}" class="dash-nav-item">
        <i class="fas fa-home"></i> {{__('message.login')}}</a>
</nav>