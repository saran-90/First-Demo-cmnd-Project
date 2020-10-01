<!DOCTYPE HTML>
<html>
<head>
    <title>Matrimony</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="sri sakthi matrimony" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/logo_matrimony.png')}}"/>
    <link href="{{ asset('assets/css/bootstrap-3.1.1.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'/>    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'/>
    <!-- ============================  js =========================== -->
    <script type="text/javascript" src="{{url('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');        
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');       
            }
        );
    });
    </script>
</head>

<body>

<!-- ============================  Navigation Start =========================== -->
    <div class="navbar navbar-inverse-blue navbar" id="myheader">
        <div class="navbar-inner">
            <div class="container">
               <a class="brand" href="{{url('/')}}"><img src="{{url('images/logo_matrimony.png')}}" width="8%" alt="logo"></a>
               <div class="pull-right">
                    <nav class="navbar nav_bottom" role="navigation">
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div> 
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a href="{{url('')}}">Home</a></li>
                                @if (Auth::guard('admin')->check() || Auth::guard()->check())
                                <li class="dropdown">
                                    <a  class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @if (Auth::guard('admin')->check())
                                            Admin
                                        @else 
                                            {{ Auth::user()->name }} 
                                        @endif
                                        <span class="caret"></span>
                                    </a>
    
                                    <ul class="dropdown-menu" >
                                        <li>
                                        <a  href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                        @else
                        <li class=" dropdown">
                                <a id="linkDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Login') }}
                                    <span class="caret"></span>
                                </a>

                               <!--  <ul class="dropdown-menu">
                                    <li>
                                        <a  href="{{ route('login') }}">
                                            {{ __('User') }}
                                        </a>
                                        <a  href="{{ route('admin.login') }}">
                                            {{ __('Admin') }}
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                               
                             
                             </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div> <!-- end pull-right -->
              <div class="clearfix"> </div>
            </div> <!-- end container -->
        </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="grid_3" style="padding: 3%;">
    <div class="container">
        <div class="breadcrumb1">
         <ul>
            <a href="{{url('/')}}"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page" >Birthday Wishes</li>
         </ul>
        </div>
    </div>   
</div> 
     <!-- @if(!empty($successMsg))
        <div style="text-align: center;" class="container">
            <div  class="row">
                <h4 class="alert alert-success"> {{ $successMsg }}</h4>
            </div>
        </div>
     @endif  --> 
<h3 class="col-xs-12 col-lg-12 smshead1">Birthday SMS</h3>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
           
        </div>
    </div>
</div>
@include('common.footer')