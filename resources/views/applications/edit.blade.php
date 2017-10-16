@extends('layouts.app')

@section('title', 'Apply for clearance')

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('partials.loggedin.sidebar')
  
  <div class="content-wrapper" id="content-margin-top">
  	<div class="row">

	  	<div class="col-md-10 col-md-offset-1">
			
			@if (Session::has('success'))
				<br>
				<div class="alert alert-success" role="alert">
					
					<strong><i class="fa fa-check"></i> Success! </strong> {{ Session::get('success')}}
				</div>
			@elseif(Session::has('danger'))
				<div class="alert alert-danger" role="alert">
					
					<strong><i class="fa fa-trash"></i>Success! </strong> {{ Session::get('danger')}}
				</div>
			@endif 
	  		<div class="content">
				<!-- Application form  -->
					<!-- allicants info  -->
	  				<div class="box box-primary">
	  					<div class="box-header with-border">
	  						@if (is_null($profile->middle_name))
	  							<p class="lead text-center">{{ ucfirst(auth()->user()->firstname) . ' ' . ucfirst(auth()->user()->lastname) }}
	  							</p>

	  						@else
	  							<p class="lead text-center">{{ ucfirst(auth()->user()->firstname) . ' ' . ucfirst(auth()->user()->profile->middle_name[0]) . '. '. ucfirst(auth()->user()->lastname) }}
	  							</p>
	  						@endif
	  						
	  						
	  					</div>
	  					<div class="box-body">
	  						{!! Form::model($profile, ['route' => ['applications.update', $profile->id], 'method' => 'PUT']) !!}

	  							<div class="col-md-6">
									<fieldset>
										<legend>Applicant information</legend>
									</fieldset>
									<div class="col-md-12">
										<div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">
											<label for="purpose">Purpose</label>   
											<select name="purpose" class="form-control" id="">
												@if ($purposes->count() > 0)
													<option value="" disabled selected>Select purpose</option>
													@foreach ($purposes as $purpose)
														<option value="{{ $purpose->purpose }}">{{ $purpose->purpose }}</option>
													@endforeach
												@endif
											</select>
											
											<small class="text-danger">{{ $errors->first('purpose') }}</small>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
										    {!! Form::label('middle_name', 'Middle name') !!}
										    {!! Form::text('middle_name', $profile->middle_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Middle name']) !!}
										    <small class="text-danger">{{ $errors->first('middle_name') }}</small>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('extension_name') ? ' has-error' : '' }}">
										    {!! Form::label('extension_name', 'Ext. name') !!}
										    {!! Form::text('extension_name', $profile->extension_name, ['class' => 'form-control', 'placeholder' => 'i.e Jr., Sr., I,II,II,IV']) !!}
										    <small class="text-danger">{{ $errors->first('extension_name') }}</small>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
										    {!! Form::label('age', 'Age') !!}
										    {!! Form::number('age', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Age']) !!}
										    <small class="text-danger">{{ $errors->first('age') }}</small>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
										    {!! Form::label('gender', 'Gender') !!}
										   	{!! Form::select('gender', ['male' => 'Male','female' => 'Female'], ( isset($profile->gender) ? $profile->gender : null ), ['selected', 'placeholder' => 'Select one', 'class' => 'form-control', 'required']) !!}
										    <small class="text-danger">{{ $errors->first('gender') }}</small>
										</div>
									</div>

	  								<div class="col-md-4">
	  									<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
	  									    {!! Form::label('dob', 'Date of birth') !!}
	  									    {!! Form::text('dob', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Date of birth']) !!}
	  									    <small class="text-danger">{{ $errors->first('dob') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-8">
	  									<div class="form-group{{ $errors->has('pob') ? ' has-error' : '' }}">
	  									    {!! Form::label('pob', 'Place of birth') !!}
	  									    {!! Form::text('pob', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Place of birth']) !!}
	  									    <small class="text-danger">{{ $errors->first('pob') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('civil_status') ? ' has-error' : '' }}">
										    {!! Form::label('civil_status', 'Civil status') !!}
										    {!! Form::select('civil_status', [

										    							'single' => 'Single', 
										    							'married' => 'Married',
										    							'separated' => 'Separated', 
										    							'annulled' => 'Annulled',
										    							'divorced' => 'Divorced', 
										    							'widow' => 'Widow',
										    							'widower' => 'Widower',
										    							], ( isset($profile->civil_status) ? $profile->civil_status : null ), ['class' => 'form-control', 'required' => 'required']) !!}
										    <small class="text-danger">{{ $errors->first('civil_status') }}</small>
										</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('citizenship') ? ' has-error' : '' }}">
	  									    {!! Form::label('citizenship', 'Citizenship') !!}
	  									    {!! Form::text('citizenship', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Citizenship']) !!}
	  									    <small class="text-danger">{{ $errors->first('citizenship') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
	  									    {!! Form::label('height', 'Height') !!}
	  									    {!! Form::text('height', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Height']) !!}
	  									    <small class="text-danger">{{ $errors->first('height') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
	  									    {!! Form::label('weight', 'Weight') !!}
	  									    {!! Form::text('weight', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Weight']) !!}
	  									    <small class="text-danger">{{ $errors->first('weight') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('visible_marks') ? ' has-error' : '' }}">
	  									    {!! Form::label('visible_marks', 'Visible Marks') !!}
	  									    {!! Form::text('visible_marks', auth()->user()->profile->visible_marks, ['data-role'=>'tagsinput', 'id'=>"tokenfield", 'class' => 'form-control', 'placeholder' => 'Visible marks']) !!}
	  									    <small class="text-danger">{{ $errors->first('visible_marks') }}</small>
	  									</div>

	  								</div>
	  								

	  							</div>
							
								<!-- __________________________________________________________________ -->	

	  							<div class="col-md-6">
	  								
									<fieldset>
										<legend>Contact details</legend>
									</fieldset>
	  								
	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	  									    {!! Form::label('email', 'E-mail') !!}
	  									    {!! Form::text('email', auth()->user()->email, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
	  									    <small class="text-danger">{{ $errors->first('email') }}</small>
	  									</div>
	  								</div>
		  							<div class="col-md-6">
										<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
										    {!! Form::label('mobile', 'Mobile phone') !!}
										    {!! Form::number('mobile', auth()->user()->contact->mobile, ['class' => 'form-control', 'required' => 'required', 'min' => 0]) !!}
										    <small class="text-danger">{{ $errors->first('mobile') }}</small>
										</div>
		  							</div>
		  							<div class="col-md-6">
										<div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
										    {!! Form::label('telephone', 'Telephone') !!}
										    {!! Form::number('telephone', auth()->user()->contact->telephone, ['class' => 'form-control', 'required' => 'required', 'min' => 0]) !!}
										    <small class="text-danger">{{ $errors->first('telephone') }}</small>
										</div>
		  							</div>

	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('present_add') ? ' has-error' : '' }}">
	  									    {!! Form::label('present_add', 'Present address') !!}
	  									    {!! Form::text('present_add', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Present address']) !!}
	  									    <small class="text-danger">{{ $errors->first('present_add') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('provincial_add') ? ' has-error' : '' }}">
	  									    {!! Form::label('provincial_add', 'Provincial address') !!}
	  									    {!! Form::text('provincial_add', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Provincial address']) !!}
	  									    <small class="text-danger">{{ $errors->first('provincial_add') }}</small>
	  									</div>
	  								</div>


	  								<!-- Note siguro dito-->
	  								
	  							</div>
	  							<div class="col-md-6">
	  								<fieldset>
	  									<legend>Other information</legend>
	  								</fieldset>
	  								<div class="col-md-6 no-padding">
	  									<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
	  									    {!! Form::label('cedula', 'Cedula no.') !!}
	  									    {!! Form::text('cedula', $other->cedula, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Cedula number']) !!}
	  									    <small class="text-danger">{{ $errors->first('cedula') }}</small>
	  									</div>
	  								</div>

									<div class="col-md-2 no-padding">
										<div class="form-group{{ $errors->has('cedula_month') ? ' has-error' : '' }}">
											{!! Form::label('cedula_month', 'Date', ['class' => 'pull-right']) !!}
										    {!! Form::text('cedula_month', $other->cedula_month, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'mm']) !!}
										    <small class="text-danger">{{ $errors->first('cedula_month') }}</small>
										</div>
									</div>

	  								<div class="col-md-2 no-padding">
	  									<div class="form-group{{ $errors->has('cedula_day') ? ' has-error' : '' }}">
	  										{!! Form::label('cedula_day', '&nbsp;Issued', ['class' => 'text-center']) !!}
	  									    {!! Form::text('cedula_day', $other->cedula_day, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'dd']) !!}
	  									    <small class="text-danger">{{ $errors->first('cedula_day') }}</small>
	  									</div>
	  								</div>
	  								
	  								<div class="col-md-2 no-padding">
	  									<div class="form-group{{ $errors->has('cedula_year') ? ' has-error' : '' }}">
	  										{!! Form::label('cedula_year', '&nbsp;') !!}
	  									    {!! Form::text('cedula_year', $other->cedula_year, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'yyyy']) !!}
	  									    <small class="text-danger">{{ $errors->first('cedula_year') }}</small>
	  									</div>
	  								</div>

	  								<div class="col-md-6 no-padding">
	  									<div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }}">
	  									    {!! Form::label('passport', 'Passport no.') !!}
	  									    {!! Form::text('passport', $other->passport, ['class' => 'form-control', 'placeholder' => 'Passport number']) !!}
	  									    <small class="text-danger">{{ $errors->first('passport') }}</small>
	  									</div>
	  								</div>


	  								<div class="col-md-2 no-padding">
	  									<div class="form-group{{ $errors->has('passport_month') ? ' has-error' : '' }}">
	  										{!! Form::label('passport_month', 'Date', ['class' => 'pull-right']) !!}
	  									    {!! Form::text('passport_month', $other->passport_month, ['class' => 'form-control', 'placeholder' => 'mm']) !!}
	  									    <small class="text-danger">{{ $errors->first('passport_month') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-2 no-padding">
	  									<div class="form-group{{ $errors->has('passport_day') ? ' has-error' : '' }}">
	  										{!! Form::label('passport_day', '&nbsp;Issued', ['class' => 'text-center']) !!}
	  									    {!! Form::text('passport_day', $other->passport_day, ['class' => 'form-control','placeholder' => 'dd']) !!}
	  									    <small class="text-danger">{{ $errors->first('passport_day') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-2 no-padding">
	  									<div class="form-group{{ $errors->has('passport_year') ? ' has-error' : '' }}">
	  										{!! Form::label('passport_year', '&nbsp;') !!}
	  									    {!! Form::text('passport_year', $other->passport_year, ['class' => 'form-control', 'placeholder' => 'yyyy']) !!}
	  									    <small class="text-danger">{{ $errors->first('passport_year') }}</small>
	  									</div>
	  								</div>

	  							</div>
								<div class="col-md-12 with-border">

									<fieldset>
										<legend class="text-center">Family background</legend>
									</fieldset>
									
								</div>

  						 		<div class="col-md-12">
  									<div class="col-md-4 no-padding">
  										<div class="form-group{{ $errors->has('m_first_name') ? ' has-error' : '' }}">
  										    {!! Form::label('m_first_name', "Mother's first name") !!}
  										    {!! Form::text('m_first_name', auth()->user()->mother->m_first_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'First name of your mother']) !!}
  										    <small class="text-danger">{{ $errors->first('m_first_name') }}</small>
  										</div>
  									</div>
  									<div class="col-md-4 no-padding">
  										<div class="form-group{{ $errors->has('m_middle_name') ? ' has-error' : '' }}">
  										    {!! Form::label('m_middle_name', 'Middle name') !!}
  										    {!! Form::text('m_middle_name', auth()->user()->mother->m_middle_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Maiden name of your mother']) !!}
  										    <small class="text-danger">{{ $errors->first('m_middle_name') }}</small>
  										</div>
  									</div>
  									<div class="col-md-4 no-padding">
  										<div class="form-group{{ $errors->has('m_last_name') ? ' has-error' : '' }}">
  										    {!! Form::label('m_last_name', 'Last name') !!}
  										    {!! Form::text('m_last_name', auth()->user()->mother->m_last_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last name of your mother']) !!}
  										    <small class="text-danger">{{ $errors->first('m_last_name') }}</small>
  										</div>
  									</div>
  								</div>

  								<div class="col-md-12">
  									<div class="col-md-4 no-padding">
  										<div class="form-group{{ $errors->has('f_first_name') ? ' has-error' : '' }}">
  										    {!! Form::label('f_first_name', "Father's first name") !!}
  										    {!! Form::text('f_first_name', auth()->user()->father->f_first_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'First name of your father']) !!}
  										    <small class="text-danger">{{ $errors->first('f_first_name') }}</small>
  										</div>
  									</div>
  									<div class="col-md-4 no-padding">
  										<div class="form-group{{ $errors->has('f_middle_name') ? ' has-error' : '' }}">
  										    {!! Form::label('f_middle_name', 'Middlename') !!}
  										    {!! Form::text('f_middle_name', auth()->user()->father->f_middle_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Middle name of your father']) !!}
  										    <small class="text-danger">{{ $errors->first('f_middle_name') }}</small>
  										</div>
  									</div>
  									<div class="col-md-3 no-padding">
  										<div class="form-group{{ $errors->has('f_last_name') ? ' has-error' : '' }}">
  										    {!! Form::label('f_last_name', 'Lastname') !!}
  										    {!! Form::text('f_last_name', auth()->user()->father->f_last_name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last name of your father']) !!}
  										    <small class="text-danger">{{ $errors->first('f_last_name') }}</small>
  										</div>
  									</div>

  									<div class="col-md-1 no-padding ">
  										<div class="form-group{{ $errors->has('f_extension_name') ? ' has-error' : '' }}">
  										    {!! Form::label('f_extension_name', 'Qualifier') !!}
  										    {!! Form::text('f_extension_name', auth()->user()->father->f_extension_name, ['class' => 'form-control', 'placeholder' => 'Jr. Sr.']) !!}
  										    <small class="text-danger">{{ $errors->first('f_extension_name') }}</small>
  										</div>
  									</div>
  								</div> 

  								<div class="col-md-12">
  									<br>
  									<button class="btn btn-flat  bg-olive btn-block"><i class="fa fa-check-circle "></i> Apply for clearance</button>
  								</div>


	  							
	  							
	  						   
	  						{!! Form::close() !!}

	  						
	  					</div>
	  				</div>

	  				

	  			
	  		</div>

	  	</div>	

  	</div>
  </div>
</div>

@stop