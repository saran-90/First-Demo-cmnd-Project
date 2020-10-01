
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
         @foreach(App\Profile::get() as $cList) 
        <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}">
        <img src="{{ asset('adminassets/images/' . $cList->image) }}" alt="logo" /> </a>
         @endforeach
        <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}">
        <img src="{{ asset('adminassets/images/favicon.png') }}" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
             <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
               @foreach(App\Profile::get() as $cList)    
            <li class="nav-item nav-main-head"><h4 style="text-shadow: 2px 2px #3e2828;">Welcome to {{$cList->profile_name}}</h4></li>
           
             <li class="nav-item nav-small-head"><h4 style="text-shadow: 2px 2px #3e2828;">{{$cList->profile_name}} </h4></li>
               @endforeach
          
            <li class="nav-item d-none d-lg-block color-setting">
                <a class="nav-link" href="#">
                <i class="mdi mdi-tune"></i>
                </a>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <!-- <span class="profile-text">JR Associates</span> -->
                <img class="img-xs rounded-circle" src="{{url('adminassets/images/logosmall.png')}}" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                   <!--  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div> -->
                </div>
                </a>
               <!--  <a class="dropdown-item mt-2"> Manage Accounts </a> -->
                <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                  <i class="menu-icon fas fa-sign-out-alt"></i>
                <span  class="menu-title">{{ __('Sign out') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
        </button>
    </div>
</nav>