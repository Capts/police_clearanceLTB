@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')


<div class="row" style="margin:30px auto;height: 500px;">

  <div class="col-md-5 col-md-offset-1  col-lg-6 col-sm-6 ">
   	<span class='text-gray text-center'><h3><i class="fa fa-check-circle"></i> Re-new your application with your photo! </h3></span>
  		
  	<div class="col-md-5 col-md-offset-1">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <h1 class=" text-gray text-center"><i class="fa fa-camera fa-3x"></i></h1>
        </a>
        
        <ul class="dropdown-menu">
          <li><a href="#">Upload a photo <span class="fa fa-upload pull-left"></span></a></li>
          <li><a href="#">Take a picture <span class="fa fa-camera pull-left"></span></a></li>
        </ul>
     
    </div>
  </div>  
  <div class="col-md-5 col-lg-3 col-lg-offset-1  col-sm-6 ">
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