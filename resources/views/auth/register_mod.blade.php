 <div class="register-box">

                     <div class="register-box-body">
                       <p class="login-box-msg">Sign up for an account!</p>

                       <form  method="post" action="{{ route('register') }}">
                       {{ csrf_field() }}

                         <div class="form-group has-feedback{{ $errors->has('firstname') ? ' has-error' : '' }}">
                             
                                 <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="First Name">
                                  <span class="fa fa-user-o form-control-feedback"></span>

                                 @if ($errors->has('firstname'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('firstname') }}</strong>
                                     </span>
                                 @endif
                            
                         </div>

                         <div class="form-group has-feedback{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                 <span class="fa fa-user-o form-control-feedback"></span>
                                 <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required placeholder="Last Name">

                                 @if ($errors->has('lastname'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('lastname') }}</strong>
                                     </span>
                                 @endif
                             
                         </div>



                         <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                           <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                           <span class="fa fa-envelope form-control-feedback"></span>
                           @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                         </div>
                         <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                           <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                           <span class="fa fa-lock form-control-feedback"></span>
                           @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                         </div>
                         <div class="form-group has-feedback">
                           <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required="required">
                           <span class="fa fa-lock form-control-feedback"></span>
                          
                         </div>
                         <div class="row">
                           {{-- <div class="col-xs-8">
                             <div class="checkbox icheck">
                               <label>
                                 <input type="checkbox"> I agree to the terms.
                               </label>
                             </div>
                           </div> --}}
                           <!-- /.col -->
                           <div class="col-md-12">
                              <button type="submit" class="btn btn-primary btn-block btn-flat" >Register now!</button>

                           </div>
                           <!-- /.col -->
                         </div>
                       </form>


                       <br>
                       <a href="#" id="show_login" class="btn bg-olive btn-flat btn-block">I already have an account. Log me in</a>
                     </div>
                     <!-- /.form-box -->
                   </div>  
