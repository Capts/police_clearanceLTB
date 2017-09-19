@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')

<!-- welcome screen -->
<div class="row">
    <div class="col-md-12">
        @if (Route::has('login'))
            {{-- <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div> --}}
                
                <div class="col-md-4">
                   <div class="box box-default">
                      <div class="box-body">
                        
                      </div>
                      <div class="box-footer">
                        
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="box box-default">
                      <div class="box-body">
                        
                      </div>
                      <div class="box-footer">
                        
                      </div>
                   </div>
                </div>
                @auth
                    
                   

                @else
                  


                  <div class="col-md-4">
                               
                     <div class="register-box">

                       <div class="register-box-body">
                         <p class="login-box-msg">Sign up for an account!</p>

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
                                   <input type="checkbox"> I agree to the terms.
                                 </label>
                               </div>
                             </div>
                             <!-- /.col -->
                             <div class="col-xs-4">
                               <button type="submit" class="btn btn-primary btn-block btn-flat" >Register</button>
                             </div>
                             <!-- /.col -->
                           </div>
                         </form>


                         <br>
                         <a href="#" class="text-center" id="show_login">I already have account</a>
                       </div>
                       <!-- /.form-box -->
                     </div>  


                     <!-- login box -->
                    <div class="login-box" style="display: none;">
                       <div class="login-logo">
                         {{-- <a href="/"><b>Admin</b>LTE</a> --}}
                       </div>
                       <!-- /.login-logo -->
                       <div class="login-box-body">
                         <p class="login-box-msg">Sign in to your account</p>

                         <form action="{{ route('login') }}" method="post">
                         {{ csrf_field() }}

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
                             <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                               @if ($errors->has('password'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                           </div>
                           <div class="row">
                             <div class="col-xs-8">
                               <div class="checkbox icheck">
                                 <label>
                                   <input type="checkbox"> Remember Me
                                 </label><br><br>  
                                 <a href="#">I forgot my password</a>
                               </div>
                             </div>
                             <!-- /.col -->
                             <div class="col-xs-4">
                               <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                             </div>
                             <!-- /.col -->
                           </div>
                         </form>

                         <br>
                         <a href="" class="text-center" id="show_register">I don't have account yet</a>

                       </div>
                       <!-- /.login-box-body -->
                     </div>
                     <!-- /.login-box -->      


                  </div>

                @endauth
        @endif

       
        
       
    </div>
</div>



@stop

@section('login_register_scripts')


<script>

  $(document).ready(function() {
    $('#show_login').click(function(){
      $('.register-box').hide('fast');
      $('.login-box').show('fast');
    })

    $('#show_register').click(function(){

      $('.login-box').hide('fast');
      $('.register-box').show('fast');
    })
  });

</script>



@stop