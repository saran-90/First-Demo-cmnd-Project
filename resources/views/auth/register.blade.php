@include('common.header') 
  <div class="account_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 register_form">
                    <div class="theme-title">
                        <h2>Register Here</h2>
                    </div>
                    <form  class="col-lg-8 col-md-8 col-sm-6 col-xs-12 form_login_theme" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form_group">
                                    <label>Username</label>
                                    <div class="input_group">
                                        <input type="text" name="name" value="{{ old('name') }}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <!-- End of .input_group -->
                                    @if ($errors->has('name'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('name') }}
                                        </span>
                                     @endif
                                </div>
                                <!-- End of .form_group -->
                                 <div class="form_group">
                                    <label>Email Address</label>
                                    <div class="input_group">
                                        <input type="email" name="email" value="{{ old('email') }}">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <!-- End of .input_group -->
                                    @if ($errors->has('email'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('email') }}
                                        </span>
                                     @endif
                                </div>
                                <!-- End of .form_group -->
                                <!-- End of .form_group -->
                                <div class="form_group">
                                    <label>Your Professional</label>
                                    <div class="input_group">
                                        <input type="text" name="professional" value="{{ old('professional') }}">
                                        <i class="fa fa-job" aria-hidden="true"></i>
                                    </div>
                            
                                     @if ($errors->has('email'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('email') }}
                                        </span>
                                     @endif
                                </div>
                                <!-- End of .form_group -->
                                <!-- End of .form_group -->
                                  <div class="form_group">
                                    <label>Password</label>
                                    <div class="input_group">
                                        <input type="password" name="password">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </div>
                                    <!-- End of .input_group -->      
                                    @if ($errors->has('password'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                                <!-- End of .form_group -->
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="form_group">
                                    <label>Mobile Number</label>
                                    <div class="input_group">
                                        <input type="text" name="mobile_number" value="{{ old('mobile_number') }}">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <!-- End of .input_group -->
                                     @if ($errors->has('mobile_number'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('mobile_number') }}
                                        </span>
                                     @endif
                                </div>
                               

                                <div class="form_group">
                                    <label>Location</label>
                                    <div class="input_group">
                                        <input type="text" name="location" value="{{ old('location') }}">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </div>
                                    <!-- End of .input_group -->
                                     @if ($errors->has('location'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('location') }}
                                        </span>
                                     @endif
                                </div>
                                 <div class="form_group">
                                    <label>Your Testimonial</label>
                                    <div class="input_group">
                                        <textarea name="testimonial">{{ old('testimonial') }} </textarea>
                                        
                                    </div>
                                     @if ($errors->has('testimonial'))
                                        <span class="help-block alert_error" class="mydiv1">
                                            {{ $errors->first('testimonial') }}
                                        </span>
                                     @endif
                                    <!-- End of .input_group -->
                                </div>
                                <!-- End of .form_group -->
                                <!-- End of .form_group -->
                                 <div class="form_group">
                                    <label>Confirm Password</label>
                                    <div class="input_group">
                                        <input type="password" name="password_confirmation">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </div>
                                    <!-- End of .input_group -->
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block alert_error" class="mydiv1">
                                                {{ $errors->first('password_confirmation') }}
                                        </span>
                                     @endif
                                </div>
                                <!-- End of .form_group -->
                            </div>
                        </div>
                        <!-- End of .row -->
                        <button class="color1_bg tran3s">Create Account</button>
                    </form>
                </div>
                <!-- End of .register_form -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
     <script type="text/javascript">
            setTimeout(function() {
           $('.mydiv1').fadeOut('fast');
           }, 2000); 
       </script>
@include('common.footer') 