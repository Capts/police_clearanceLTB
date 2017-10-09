<div class="row">
  <div class="col-md-12" style="padding:28px 0px">
    

  <form class="navbar-form form-inline pull-right" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span >
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

          
        </div>
        
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

  

            <button type="submit" class="btn btn-flat bg-olive">
                Login
            </button>

</form>

  </div>

</div>