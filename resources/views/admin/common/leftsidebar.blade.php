  <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Color</p>
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading font-weight-bold mt-2">Header Color</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('admin/dashboard')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
              </a> 
            </li>  
            <li class="nav-item">
              <a class="nav-link"  href="{{url('/categories')}}" >
                <i class="menu-icon fas fa-list-alt"></i>
                <span class="menu-title">Category</span>
              </a> 
            </li> 
            <li class="nav-item">
              <a class="nav-link"   href="{{url('/galleries')}}" >
                <i class="menu-icon fas fa-images"></i>
                <span class="menu-title">Projects</span>
              </a> 
            </li> 
             
             
             <li class="nav-item">
              <a class="nav-link"   href="{{url('/newsletter')}}" >
               <i class="menu-icon fas fa-envelope-open"></i>
                <span class="menu-title">News</span>
              </a> 
            </li> 
                 
             <li class="nav-item">
              <a class="nav-link"   href="{{url('/admin/edit/1')}}" >
               <i class="menu-icon fas fa-user-circle"></i>
                <span class="menu-title">Profile</span>
              </a> 
            </li> 


            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                  <i class="menu-icon fas fa-sign-out-alt"></i>
                <span  class="menu-title">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </nav>