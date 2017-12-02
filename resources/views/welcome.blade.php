@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')

@include('partials.modal.enteremail')
@include('partials.modal.camera')
@include('renew.take_a_picture_modal')
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

    

      <center class='text-gray text-center' id="hideWord"><h3><i class="fa fa-check-circle"></i> Re-new your application with your photo! </h3></center>
        <div class="col-md-12 col-lg-6 col-lg-offset-3" id="hideIcon">
          

            {{-- <a href="#" class="" data-toggle="modal" data-target="#camera">
              <h1 class=" text-gray text-center"><i class="fa fa-camera fa-3x"></i></h1>
            </a> --}}

          <center></center>>  
              <a href="#" class="btn btn-flat btn-danger btn-block btn-lg" data-toggle="modal" data-target="#take_picture_modal">Take a picture</a>
              <p class="text-center" style="color:white;font-size: 18px;">or</p>
              <div class="box box-danger">
                <div class="box-body">
                  <form action="#" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        
                      
                  
                        <label for="">Select image</label>
                        <input type="file" name="avatar">
                     
                    </div>
                    <section class="modal-footer text-center">
                       <button class="btn btn-flat btn-primary text-center btn-block" data-toggle="tooltip" title="Upload now">Upload now</button>
                     </section>

                  </form>
                </div>
              </div>

         
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