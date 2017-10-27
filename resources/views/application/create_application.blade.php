@extends('layouts.app')

@section('title',  'Apply for clearance |'. ucfirst(auth()->user()->firstname) )

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('partials.loggedin.sidebar')
  
  <div class="content-wrapper" id="content-margin-top">
  	<div class="row">

	  	{{-- <div class="col-md-12 col-lg-10 col-lg-offset-1 ">
			
			

	  	</div>	 --}}
		{!! Form::open(['method' => 'POST', 'route' => 'application.store', 'data-parsley-validate' => '']) !!}
		
		  	<div class="content" style="height: 600px;">

		  		<div class="col-md-9 col-md-offset-2 col-lg-8 col-lg-offset-2">
		  			@if (Session::has('success'))
		  				<br>
		  				<div class="alert alert-success" role="alert">
		  					
		  					<strong><i class="fa fa-check"></i> Success! </strong> {{ Session::get('success')}}
		  				</div>
		  			@elseif(Session::has('danger'))
		  				<div class="alert alert-danger" role="alert">
		  					
		  					<strong><i class="fa fa-exclamation-o"></i> Warning, </strong> {{ Session::get('danger')}}
		  				</div>
		  			@endif 
		  			<div class="box box-primary">
		  				<div class="box-header with-border">
		  					<h4><b>What is your purpose?</b></h5>
		  				</div>
		  				<div class="box-body">
		  					<div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">
		  						{{-- <label for="purpose">Select purpose:</label> --}}
								<select name="purpose" class="form-control btn-primary" id="purpose">
									@if ($purposes->count() > 0)
										<option value="" disabled selected style="color:white;">Select purpose</option>
										@foreach ($purposes as $purpose)
											<option value="{{ $purpose->purpose }}">{{ $purpose->purpose }}</option>
										@endforeach
									@endif
								</select>
		  					    <small class="text-danger">{{ $errors->first('purpose') }}</small>
		  					</div>
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-9 col-md-offset-2 col-lg-8 col-lg-offset-2 fields" style="display: none;">
		  			<div class="box box-primary">
		  				<div class="box-header with-border">
		  					<h4><b>Appointment schedule</b></h5>
		  				</div>
		  				<div class="box-body">
		  					<div class="col-md-12 no-padding">
		  						{{-- <label for="datetimepicker">Appointment schedule</label> --}}
		  						<div class="col-md-6 col-md-offset-3">
		  							
			  						<input name="appointment_date" id="datetimepicker" type="text" class="form-control" required="" placeholder="Select appointment date.">
			  						<br>
			  						<section class="text-center">
			  							<button id="clickBtn" class="btn btn-flat btn-primary"><i class="fa fa-calendar"></i> Schedule appointment</button>
			  						</section>
		  						</div>
		  					</div>
							
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-9 col-md-offset-2 col-lg-8 col-lg-offset-2" style="display: none;">
		  			<div class="box box-primary">
		  				<div class="box-body">
		  					<div class="box-body" id="allInput">
		  						

		  						
		  					</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
	    {!! Form::close() !!}
  </div>
</div>

<script type="text/javascript">
  
  $(document).ready(function(){
      $("#purpose").on('change',function(){
          $(".fields").show(400);
      });

      $('#datetimepicker').datetimepicker({
      	formatTime: 'g a',
    	lang: 'en',
    	theme: 'default',
    	minDate: 'dateToday',
    	timepicker:false,
    	
      });



     

      // $('#clickBtn').click(function(){
      // 	if ($('#allInput input').val() == '')  {
      // 		alert('not null');
      // 	}else{
      // 		alert('please fill up all fields');
      // 	}
      // });

     
  });

</script>

 
@stop

