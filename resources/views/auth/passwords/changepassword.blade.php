
@extends('layouts.app')

@section('title', 'Change password | ' . ucfirst(auth()->user()->firstname))

@section('content')


<div class="wrapper">
   @include('partials.nav')
   @if (auth()->user()->roles()->first()->name == 'admin')
       @include('admin.partials.admin_sidebar')
    @else
        @include('partials.loggedin.sidebar')
   @endif
    
   <div class="content-wrapper"  id="content-margin-top">
    	<br><br>
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 ">
    			@if (Session::has('success'))
    			    <div class="alert alert-success">{!! Session::get('success') !!}</div>
    			@endif
    			@if (Session::has('failure'))
    			    <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
    			@endif

    			<div class="box box-primary">
    				<div class="box-header with-border">
    					<h4>Change password</h4>
    				</div>
    				<div class="box-body with-padding">
    					{!! Form::open(['method' => 'POST', 'route' => 'updatepass.post','id' => 'form', 'class' => 'form-horizontal', 'data-parsley-validate' => '']) !!}

    					<div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
    						<div class="col-md-4">
    							{!! Form::label('old', 'Old password') !!}
    						</div>
    						<div class="col-md-8">

    							{!! Form::password('old', null, ['class' => 'form-control', 'required' => 'required']) !!}
    							<br>
    							<small class="text-danger">{{ $errors->first('old') }}</small>
    						</div>
    					</div>

    					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    						<div class="col-md-4">
    							{!! Form::label('password', 'New password') !!}
    						</div>

    						<div class="col-md-8"> 
    							{!! Form::password('password', null, ['class' => 'form-control', 'required' => 'required']) !!}
    							<br>
    							<small class="text-danger">{{ $errors->first('password') }}</small>
    						</div>
    					</div>

    					<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    						<div class="col-md-4 ">
    							{!! Form::label('password_confirmation', 'Confirm password') !!}
    						</div>

    						<div class="col-md-8 ">
    							{!! Form::password('password_confirmation', null, ['class' => 'form-control', 'required' => 'required']) !!}
    							<br>
    							<small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
    						</div>
    					</div>
    					{{-- <div class="form-group "> --}}
    						<div class="col-md-4">

    						</div>
    						<div class="col-md-8">

    							<button class="btn btn-flat btn-primary">Change</button>
    						</div>
    					{{-- </div> --}}




    					{!! Form::close() !!}
    				</div>
    			</div>
    		</div>
    		
    	</div>
     
     

   </div>
    


</div>

<script>
  $('#form').parsley();
</script>

@stop