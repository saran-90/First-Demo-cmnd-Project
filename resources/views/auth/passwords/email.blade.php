@include('common.header')
<style type="text/css">
    .card-header,.btn_reset,.alert_rest{
        text-align: center;
    }
     .card-header{
        font-weight: bolder;
        margin: 1%;
     }
    .email_label{
        margin-top: 3%;
        text-align: center;
    }
    .col-md-offset-2{
        margin-top:  1%;
    }
</style> 
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="card-header">{{ __('Reset Your Password') }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success alert_rest" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-xs-5 col-md-4   form-label email_label">{{ __('E-Mail Address') }} :</label>

                            <div class="col-xs-7 col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row btn_reset">
                            <div class="col-lg-3 col-md-6 col-sm-4 col-sm-offset-4 col-xs-offset-2">
                                <button type="submit" class="btn_1  btn btn-primary">
                                    {{ __('Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('common.footer') 