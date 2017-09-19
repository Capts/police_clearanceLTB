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
                
                
              @auth
                
                <div class="col-md-4 col-md-offset-2" style="padding-top: 30px;">
                   <div class="box box-info">
                      <div class="box-body">
                        <div class="callout callout-default">
                            <p class="lead " style="font-size: 15px;padding:10px">
                              First time applicants will fill up all necessary fields to save their details.
                              This process automize the renewal process.
                            </p>
                        </div>
                      
                           <p class="text-center" style="font-size: 60px;color:silver"><span class="fa fa-file"></span></p>
                       
                        <button class="btn btn-flat bg-olive btn-block btn-lg">Apply for clearance</button>
                      </div>
                   </div>
                </div>


                <div class="col-md-4" style="padding-top: 30px;">
                   <div class="box box-info">
                        <div class="box-body">
                            <div class="callout callout-default">
                              <p class="lead " style="font-size: 15px;padding:10px">
                                Renewing your clearance will be as easy as 1-2-3.
                                Just take a picture and let the system find you.
                                No more typing!
                              </p>
                          </div>
                      
                      
                        <p class="text-center" style="font-size: 60px;color:silver;"><span class="fa fa-fax"></span></p>
                        <button class="btn btn-flat bg-olive btn-block btn-lg">Renew clearance</button>

                      </div>
                   </div>
                </div>
                   

              @else
                @include('modals.not_login_modal')
                <div class="col-md-4 col-md-offset-2" style="padding-top: 30px;">
                   
                   <div class="box box-info">
                      <div class="box-body">
                        <div class="callout callout-default">
                          <p class="lead " style="font-size: 15px;padding:10px">
                            First time applicants will fill up all necessary fields to save their details.
                            This process automize the renewal process.
                          </p>
                        </div>
                        
                      
                           <p class="text-center" style="font-size: 60px;color:silver"><span class="fa fa-file"></span></p>
                       
                        <button type="button" class="btn btn-flat bg-olive btn-block btn-lg" data-toggle="modal" data-target="#not_login_modal">Apply for clearance</button>
                      </div>
                   </div>
                </div>


                <div class="col-md-4" style="padding-top: 30px;">
                   <div class="box box-info">
                        <div class="box-body">
                        <div class="callout callout-default">
                          <p class="lead " style="font-size: 15px;padding:10px">
                            Renewing your clearance will be as easy as 1-2-3.
                            Just take a picture and let the system find you.
                            No more typing!
                          </p>
                        </div>
                        <p class="text-center" style="font-size: 60px;color:silver;"><span class="fa fa-fax"></span></p>
                          <button type="button" data-toggle="modal" data-target="#not_login_modal" class="btn btn-flat bg-olive btn-block btn-lg">Renew clearance</button>
                       
                      </div>
                   </div>
                </div>
    

                <div class="col-md-4">
                  {{-- @include('auth.register_mod')        --}}
                  {{-- @include('auth.login_mod') --}}


                </div>

              @endauth
        @endif

       
        
       
    </div>
</div>



@stop

@section('login_register_scripts')


<script>

  $(document).ready(function() {
    $('#show_register').click(function(){
      $('.register-box').show('fast');
      $('.login-box').hide('fast');
    })


    $('#show_login').click(function(){
      $('.register-box').hide('fast');
      $('.login-box').show('fast');
    })

    
  });

</script>



@stop