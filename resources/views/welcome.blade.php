@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')

<!-- welcome screen -->
<div class="row">
    <div class="col-md-12">
        
        
        <div class="col-md-8"></div>
        
        <div class="col-md-4">
            
            <div class="register-box">
            {{--   <div class="register-logo">
                <a href="/login"><b>Login</b></a>
              </div> --}}

              <div class="register-box-body">
                <p class="login-box-msg"></p>

                <form  method="post" action="{{ route('register') }}">
                {{ csrf_field() }}

                  <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Full name" name="name">
                    <span class="fa fa-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="fa fa-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                       <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                       </span>
                   @endif
                  </div>
                  <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="fa fa-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                       <span class="help-block">
                           <strong>{{ $errors->first('password') }}</strong>
                       </span>
                   @endif
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                    <span class="fa fa-lock form-control-feedback"></span>
                   
                  </div>
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>


                <br>
                <a href="/login" class="text-center">I already have account</a>
              </div>
              <!-- /.form-box -->

             
            </div>        


        </div>

    </div>
</div>



@stop