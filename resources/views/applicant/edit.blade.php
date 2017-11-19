@extends('layouts.app')

@section('title', 'Edit your information')

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('partials.loggedin.sidebar')
   
  <div class="content-wrapper" id="content-margin-top">
  	<div class="row">

	  	<div class="col-md-12 col-lg-10 col-lg-offset-1 ">
	  		<div class="content">
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
				<!-- Application form  -->
					<!-- allicants info  -->
	  				<div class="box box-primary">
	  					<div class="box-header with-border bg-primary" style="color:white;">
	  						@if (is_null($profile->middle_name))
	  							<p class="lead text-center">
		  							@if (auth()->user()->avatar == 'public/default/avatars/default.jpg')
							           <img src="/default/avatars/default.jpg" class="img-circle" height="50px" width="50px">
							        @else
							           <img src="/upload/avatars/{{auth()->user()->avatar}}" class="img-circle" height="50px" width="50px">
							        @endif
	  								{{ ucfirst(auth()->user()->firstname) . ' ' . ucfirst(auth()->user()->lastname) }}
	  							</p>
	  						@else
	  							<p class="lead text-center">
		  							@if (auth()->user()->avatar == 'public/default/avatars/default.jpg')
							           <img src="/default/avatars/default.jpg" class="img-circle" height="50px" width="50px">
							        @else
							           <img src="/upload/avatars/{{auth()->user()->avatar}}" class="img-circle" height="50px" width="50px">
							        @endif
	  								{{ ucfirst(auth()->user()->firstname) . ' ' . ucfirst(auth()->user()->profile->middle_name[0]) . '. '. ucfirst(auth()->user()->lastname) }}
	  							</p>
	  						@endif
	  						
  							
	  					</div>
	  					<div class="box-body" id="changeAllInput">
	  						{!! Form::model($profile, ['route' => ['applicant.update', $profile->user_id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}

	  							<div class="col-md-6">
									<fieldset>
										<legend>Applicant information<span class='pull-right red' style="font-size: 15px;"><i class="fa fa-square"></i> required fields</span></legend>
									</fieldset>
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
										    {!! Form::label('firstname', 'First name') !!}
										    {!! Form::text('firstname', auth()->user()->firstname, ['class' => 'form-control', 'required' => 'required']) !!}
										    <small class="text-danger">{{ $errors->first('firstname') }}</small>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
										    {!! Form::label('lastname', 'Last name') !!}
										    {!! Form::text('lastname', auth()->user()->lastname, ['class' => 'form-control', 'required' => 'required']) !!}
										    <small class="text-danger">{{ $errors->first('lastname') }}</small>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
										    {!! Form::label('middle_name', 'Middle name') !!}
										    {!! Form::text('middle_name', $profile->middle_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Middle name']) !!}
										    <small class="text-danger">{{ $errors->first('middle_name') }}</small>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('extension_name') ? ' has-error' : '' }}">
										    {!! Form::label('extension_name', 'Ext. name(optional)') !!}
										    {!! Form::text('extension_name', $profile->extension_name, ['class' => 'form-control', 'id' => 'inputWarning',           'placeholder' => 'i.e jr., sr.']) !!}
										    <small class="text-danger">{{ $errors->first('extension_name') }}</small>
										</div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

										    {!! Form::label('gender', 'Gender') !!}
										    <select name="gender" class="form-control">
										    	<option value="" selected disabled>
										    		
										    		{{ ( isset($profile->gender) ? $profile->gender : 'Select one' ) }}
										    	</option>
										    	<option value="{{ ucfirst('male') }}">Male</option>
										    	<option value="{{ ucfirst('female') }}">Female</option>
										    </select>
										   {{-- 	{!! Form::select('gender', ['male' => 'Male','female' => 'Female'], ( isset($profile->gender) ? $profile->gender : null ), ['class' => 'form-control', 'required']) !!} --}}
										    <small class="text-danger">{{ $errors->first('gender') }}</small>
										</div>
									</div>

	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
	  										{!! Form::label('dob', 'Date of birth') !!}
										    <div class="input-group date">
											  <div class="input-group-addon">
											    <i class="fa fa-calendar"></i>
											  </div>
											  <input type="text" name="dob" value="{{ $profile->dob }}" class="form-control pull-right" id="datepickerDOB" required="" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" data-parsley-errors-messages-disabled>
											</div>
	  									    
	  									   {{--  {!! Form::text('dob', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Date of birth']) !!} --}}
	  									    <small class="text-danger">{{ $errors->first('dob') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('pob') ? ' has-error' : '' }}">
	  									    {!! Form::label('pob', 'Place of birth') !!}
	  									    {!! Form::text('pob', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Place of birth']) !!}
	  									    <small class="text-danger">{{ $errors->first('pob') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('civil_status') ? ' has-error' : '' }}">
										    {!! Form::label('civil_status', 'Civil status') !!}
										    <select name="civil_status" class="form-control">
										    	<option value="" disabled selected>
										    		{{  ( isset($profile->civil_status) ? $profile->civil_status : 'Select one' ) }}
										    	</option>
										    	<option value="Single">Single</option>
										    	<option value="Married">Married</option>
										    	<option value="Separated">Separated</option>
										    	<option value="Annuled">Annuled</option>
										    	<option value="Divorced">Divorced</option>
										    	<option value="Widow">Widow</option>
										    	<option value="Widower">Widower</option>
										    </select>
										   
										    <small class="text-danger">{{ $errors->first('civil_status') }}</small>
										</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('citizenship') ? ' has-error' : '' }}">
	  									    {!! Form::label('citizenship', 'Citizenship') !!}
	  									    {!! Form::text('citizenship', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Citizenship']) !!}
	  									    <small class="text-danger">{{ $errors->first('citizenship') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
	  									    {!! Form::label('height', 'Height') !!}
	  									    {!! Form::text('height', null, ['class' => 'form-control', 'required' => '', 'placeholder' =>'Height']) !!}
	  									    <small class="text-danger">{{ $errors->first('height') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-6">
	  									<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
	  									    {!! Form::label('weight', 'Weight(kg)') !!}
	  									    {!! Form::text('weight', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Weight']) !!}
	  									    <small class="text-danger">{{ $errors->first('weight') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('visible_marks') ? ' has-error' : '' }}">
	  									    {!! Form::label('visible_marks', 'Visible Marks(optional)') !!}
	  									    {!! Form::text('visible_marks', $profile->visible_marks, ['data-role'=>'tagsinput', 'id'=>"tokenfield", 'class' => 'form-control', 'placeholder' => 'separate with comma ","']) !!}
	  									    <small class="text-danger">{{ $errors->first('visible_marks') }}</small>
	  									</div>

	  								</div>
	  								

	  							</div>
							
								<!-- __________________________________________________________________ -->	

	  							<div class="col-md-6">
	  								
									<fieldset>
										<legend>Contact details<span class='pull-right red' style="font-size: 15px;"><i class="fa fa-square"></i> required fields</span></legend>
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
										    {!! Form::number('mobile', auth()->user()->contact->mobile, ['class' => 'form-control', 'required' => '', 'min' => 0]) !!}
										    <small class="text-danger">{{ $errors->first('mobile') }}</small>
										</div>
		  							</div>
		  							<div class="col-md-6">
										<div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
										    {!! Form::label('telephone', 'Telephone') !!}
										    {!! Form::number('telephone', auth()->user()->contact->telephone, ['class' => 'form-control', 'required' => '', 'min' => 0]) !!}
										    <small class="text-danger">{{ $errors->first('telephone') }}</small>
										</div>
		  							</div>

	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('present_add') ? ' has-error' : '' }}">
	  									    {!! Form::label('present_add', 'Present address') !!}
	  									    {!! Form::text('present_add', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Present address']) !!}
	  									    <small class="text-danger">{{ $errors->first('present_add') }}</small>
	  									</div>
	  								</div>
	  								<div class="col-md-12">
	  									<div class="form-group{{ $errors->has('provincial_add') ? ' has-error' : '' }}">
	  									    {!! Form::label('provincial_add', 'Provincial address') !!}
	  									    {!! Form::text('provincial_add', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Provincial address']) !!}
	  									    <small class="text-danger">{{ $errors->first('provincial_add') }}</small>
	  									</div>
	  								</div>


	  								<!-- Note siguro dito-->
	  								
	  							</div>
	  							<div class="col-md-6">
	  								<fieldset>
	  									<legend>Other information<span class='pull-right red' style="font-size: 15px;"><i class="fa fa-square"></i> required fields</span></legend>
	  								</fieldset>
	  								<div class="col-md-7">
	  									<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
	  									    {!! Form::label('cedula', 'Cedula no.') !!}
	  									    {!! Form::text('cedula', $other->cedula, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Cedula number']) !!}
	  									    <small class="text-danger">{{ $errors->first('cedula') }}</small>
	  									</div>
	  								</div>

									<div class="col-md-5">
										<div class="form-group{{ $errors->has('c_date_issued') ? ' has-error' : '' }}">
											{!! Form::label('c_date_issued', 'Date Issued') !!}
										    <div class="input-group date">
    										  <div class="input-group-addon">
    										    <i class="fa fa-calendar"></i>
    										  </div>
    										  <input type="text" name="c_date_issued" value="{{ $other->c_date_issued }}" class="form-control pull-right" id="datepicker" placeholder="yyyy-mm-dd">
    										</div>
										    <small class="text-danger">{{ $errors->first('c_date_issued') }}</small>
										</div>
									</div>
									{{-- {{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }} --}}
									
	  							
	  								<div class="col-md-7">
	  									<div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }}">
	  									    {!! Form::label('passport', 'Passport no.') !!}
	  									    {!! Form::text('passport', $other->passport, ['class' => 'form-control', 'placeholder' => 'Passport number']) !!}
	  									    <small class="text-danger">{{ $errors->first('passport') }}</small>
	  									</div>
	  								</div>
									
									@if (is_null($other->passport))
										<div class="col-md-5">
											<div class="form-group{{ $errors->has('p_date_issued') ? ' has-error' : '' }}">
												{!! Form::label('p_date_issued', 'Date Issued') !!}
											   <div class="input-group date">
		 										  <div class="input-group-addon">
		 										    <i class="fa fa-calendar"></i>
		 										  </div>
		 										  <input type="text" name="p_date_issued" class="form-control pull-right" id="datepicker1" data-date-format="yyyy-mm-dd">
		 										</div>
											    <small class="text-danger">{{ $errors->first('p_date_issued') }}</small>
											</div>
										</div>
									@else
										<div class="col-md-6">
											<div class="form-group{{ $errors->has('p_date_issued') ? ' has-error' : '' }}">
												{!! Form::label('p_date_issued', 'Date Issued') !!}
											   <div class="input-group date">
		 										  <div class="input-group-addon">
		 										    <i class="fa fa-calendar"></i>
		 										  </div>
		 										  <input type="text" name="p_date_issued" value="{{ $other->p_date_issued }}" class="form-control pull-right" id="datepicker1" data-date-format="yyyy-mm-dd">
		 										</div>
											    <small class="text-danger">{{ $errors->first('p_date_issued') }}</small>
											</div>
										</div>
									@endif
	  								
	  								

	  							</div>
								<div class="col-md-12 with-border">

									<fieldset>
										<legend>Family background<span class='pull-right red' style="font-size: 15px;"><i class="fa fa-square"></i> required fields</span></legend>
									</fieldset>
									
								</div>

  						 		<div class="col-md-6">
  									
  										<div class="col-md-12">
  											<div class="form-group{{ $errors->has('m_first_name') ? ' has-error' : '' }}">
  											    {!! Form::label('m_first_name', "Mother's first name") !!}
  											    {!! Form::text('m_first_name', auth()->user()->mother->m_first_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'First name of your mother']) !!}
  											    <small class="text-danger">{{ $errors->first('m_first_name') }}</small>
  											</div>
  										</div>
  										<div class="col-md-12">
  											<div class="form-group{{ $errors->has('m_middle_name') ? ' has-error' : '' }}">
  											    {!! Form::label('m_middle_name', 'Middle name') !!}
  											    {!! Form::text('m_middle_name', auth()->user()->mother->m_middle_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Maiden name of your mother']) !!}
  											    <small class="text-danger">{{ $errors->first('m_middle_name') }}</small>
  											</div>
  										</div>

  										<div class="col-md-12">
  											<div class="form-group{{ $errors->has('m_last_name') ? ' has-error' : '' }}">
  											    {!! Form::label('m_last_name', 'Last name') !!}
  											    {!! Form::text('m_last_name', auth()->user()->mother->m_last_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Last name of your mother']) !!}
  											    <small class="text-danger">{{ $errors->first('m_last_name') }}</small>
  											</div>
  										</div>
  								
  								</div>

  								<div class="col-md-6">
  									
  										<div class="col-md-12">
  											<div class="form-group{{ $errors->has('f_first_name') ? ' has-error' : '' }}">
  											    {!! Form::label('f_first_name', "Father's first name") !!}
  											    {!! Form::text('f_first_name', auth()->user()->father->f_first_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'First name of your father']) !!}
  											    <small class="text-danger">{{ $errors->first('f_first_name') }}</small>
  											</div>
  										</div>
  										<div class="col-md-12">
  											<div class="form-group{{ $errors->has('f_middle_name') ? ' has-error' : '' }}">
  											    {!! Form::label('f_middle_name', 'Middlename') !!}
  											    {!! Form::text('f_middle_name', auth()->user()->father->f_middle_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Middle name of your father']) !!}
  											    <small class="text-danger">{{ $errors->first('f_middle_name') }}</small>
  											</div>
  										</div>
  										<div class="col-md-7">
  											<div class="form-group{{ $errors->has('f_last_name') ? ' has-error' : '' }}">
  										    {!! Form::label('f_last_name', 'Lastname') !!}
  										    {!! Form::text('f_last_name', auth()->user()->father->f_last_name, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Last name of your father']) !!}
  										    <small class="text-danger">{{ $errors->first('f_last_name') }}</small>
  											</div>
  										</div>
  										<div class="col-md-5 ">
  											<div class="form-group{{ $errors->has('f_extension_name') ? ' has-error' : '' }}">
  											
  										    {!! Form::label('f_extension_name', 'Qualifier(opt)') !!}
  										    
  										    	{!! Form::text('f_extension_name', auth()->user()->father->f_extension_name, ['class' => 'form-control', 'placeholder' => 'Jr. Sr.']) !!}
  										  
  										  
  										    <small class="text-danger">{{ $errors->first('f_extension_name') }}</small>
  										</div>
  										</div>

  										
  									
  								</div> 
									<div class="col-md-12">
										<button style="margin-right:15px;" class="btn btn-flat btn-lg btn-primary pull-right "><i class="fa fa-spinner "></i> Update profile</button>
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