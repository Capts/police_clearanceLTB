
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
         <span class="fa fa-lock form-control-feedback"></span>
           @if ($errors->has('password'))
               <span class="help-block">
                   <strong>{{ $errors->first('password') }}</strong>
               </span>
           @endif
       </div>
       <div class="row">
         {{-- <div class="col-xs-8">
           <div class="checkbox icheck">
             <label>
               <input type="checkbox"> Remember Me
             </label><br><br>  
             <a href="#">I forgot my password</a>
           </div>
         </div> --}}
         <!-- /.col -->
         <div class="col-md-12">
           <button type="submit" class="btn bg-olive btn-block btn-flat">Sign me in</button>
         </div>
         <!-- /.col -->
       </div>
     </form>
      