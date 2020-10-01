@include('admin.common.header')
@include('admin.common.navbar')
@include('admin.common.leftsidebar')
<style type="text/css">
.fontglobe1
{
  
    font-size: 30px;
    
    line-height: 1;
  
}
</style>
    <div class="main-panel">
        <div class="content-wrapper dashboard_main">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                   <a href="{{url('/categories')}}">  
                      <div class="card-body">
                        <div class="clearfix">
                          <div class="float-left">
                            <i class="mdi mdi-cube text-danger icon-lg"></i>
                          </div>
                          <div class="float-right">
                           <!--  <p class="mb-0 text-right">Category</p> -->
                            <div class="fluid-container">
                              <h3 class="font-weight-medium text-right mb-0">Category</h3>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </a>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                     <a href="{{url('/galleries')}}">  
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi  mdi-image-area text-indigo icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">projects</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                   </a>
                </div>
              </div>
            
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <a href="{{url('/newsletter')}}">  
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-forum text-warning icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">News</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                   </a>
                </div>
              </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <a href="{{url('/')}}" target="_blank">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="fas fa-globe text-success fontglobe1"></i>
                      </div>
                      <div class="float-right">
                       
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">Website</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                </div>
              </div>
             

            </div>
           
           
         
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
@include('admin.common.footer')