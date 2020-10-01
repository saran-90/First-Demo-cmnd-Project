@include('admin.common.header')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form method="POST"  action="{{ route('admin.login.submit') }}">
                  @csrf
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" name="email" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Username">
                    <div class="input-group-append">
                     
                    </div>
                  </div>
                    @if ($errors->has('email'))
                        <label class="label mydiv3" style="color: red;">
                        {{ $errors->first('email') }}
                    </label>
                    @endif
                </div>

                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="*********" />
                    <div class="input-group-append">
                    
                    </div>
                  </div>
                    @if ($errors->has('password'))
                        <label class="label mydiv3" style="color: red;">{{ $errors->first('password') }}</label>        
                    @endif
                </div>
                <div class="form-group">
                  <button  type ="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
              </form>
            </div>
            <p class="footer-text text-center" style="color: #fff;margin-top: 2%;">copyright © 2019 Genewtech. All rights reserved.</p>
          </div>
        </div>
      </div>
    
    </div>
    
</div>
