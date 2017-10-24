@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')


<div class="row" style="margin:30px auto;height: 500px;">

  <div class="col-md-5 col-md-offset-1 col-lg-6 col-lg-offset-1 col-sm-6 ">
   	<span class='text-gray text-center'><h3><i class="fa fa-check-circle"></i> Re-new your application with your photo! </h3></span>
   				
	<div class="col-md-6 text-center">
		<a href="" data-toggle="tooltip" title="take a photo">
			<h1 class="text-center text-gray"><i class="fa fa-camera fa-3x"></i></h1>
		</a> 
	</div>
   			
   	
  </div>

  <div class="col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-1 col-sm-6 ">
  	<div class="box box-primary">
  		<div class="box-header with-border text-center"><h3>SIGN UP</h3></div>
  		<div class="box-body">
  			 @include('auth.register_mod')
  		</div>
  	</div>
   
    
  </div>



</div>









@endsection