@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')

@include('partials.modal.enteremail')
@include('partials.modal.camera')
<div class="row" style="margin:30px auto;height: 500px;" id="refWelcome">
  
  
  <div class="col-md-5 col-md-offset-1  col-lg-6 col-sm-6 ">
    <div class="col-md-12">
      @if(Session::has('registerfirst'))
        <div class="callout callout-danger" role="callout" >
          <p><i class="fa fa-exclamation-circle"> </i> {{ Session::get('registerfirst')}}. Register <a href="#">here.</a></p>
        </div>
      @endif
      @if(Session::has('existingapplication'))
        <div class="callout callout-danger" role="callout" >
          <p><i class="fa fa-exclamation-circle"> </i> {{ Session::get('existingapplication')}} Cancel application <a href="">here.</a></p>
        </div>
      @endif
      @if(Session::has('profile-not-edited'))
        <div class="callout callout-danger" role="callout" >
          <p><i class="fa fa-exclamation-circle"> </i> {{ Session::get('profile-not-edited')}} Edit information <a href="">here.</a></p>
        </div>
      @endif
    </div>

    

      <span class='text-gray text-center' id="hideWord"><h3><i class="fa fa-check-circle"></i> Re-new your application with your photo! </h3></span>
        <div class="col-md-5 col-md-offset-1" id="hideIcon">
          

            <a href="#" class="" data-toggle="modal" data-target="#camera">
              <h1 class=" text-gray text-center"><i class="fa fa-camera fa-3x"></i></h1>
            </a>
      

         
        </div>
  
  	
  </div>  
  <div class="col-md-5 col-lg-3 col-lg-offset-1  col-sm-6 " id="hidewhenerror">
  	<div class="box box-primary">
  		<div class="box-header with-border text-center"><h3>SIGN UP</h3></div>
  		<div class="box-body">
  			 @include('auth.register_mod')
       
  		</div>
  	</div>
   
    
  </div>



</div>
<br>
<br>

@endsection