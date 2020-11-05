<header style="background-color: #01042d; height: 84px; ">
    <a href="#!" class="menu-toggle">
        <i class="fas fa-bars"></i>
    </a>
    <a href="#"><img src="{{ asset('assets/img/logo.jpeg') }}" style="width:168px"></a>
</header>
<nav class="dash-nav-list">
<a href="{{url('home')}}" class="dash-nav-item">
            <i class="fas fa-home"></i>{{__('message.homepage')}}</a>
        <div class="dash-nav-dropdown">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-chart-bar"></i> {{__('message.E-counselling')}} </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{url('questionManage')}}" class="dash-nav-dropdown-item">{{__('message.Ask Question')}}</a>
                {{-- <a href="{{url('replyedManage')}}" class="dash-nav-dropdown-item">{{__('message.Replied_Question')}}</a> --}}
            </div>
        </div>
        <div class="dash-nav-dropdown ">
            <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-cube"></i>{{__('message.product')}}</a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{url('productManage')}}" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.product')}}</span></a>
                <a href="{{url('categoryTypeManage')}}" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.product_category')}}</span></a>
                <a href="{{url('categoryManage')}}" class="dash-nav-dropdown-item"><span style="font-size:10px;">{{__('message.category_type')}}</span></a>
            </div>
        </div>
         <a href="{{url('storiesManage')}}" class="dash-nav-item">
            <i class="fas fa-book-reader"></i><span style="font-size:13px;">{{__('message.Rep Health Stories')}}</span></a>
            <div class="dash-nav-dropdown">
            <a href="{{url('our-works')}}" class="dash-nav-item">
                <i class="fas fa-check-square"> </i>
                <span style="font-size:14px;">{{__('message.Carrer_Trajectory')}} 
                </span>
            </a>
             
        </div>
            <a href="{{url('logout')}}" class="dash-nav-item">
            <i class="fa fa-sign-out-alt"></i>{{__('message.Logout')}}</a>
    </nav>