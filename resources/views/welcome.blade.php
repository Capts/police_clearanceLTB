@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')

@include('partials.modal.enteremail')
@include('partials.modal.camera')
{{-- @include('renew.take_a_picture_modal') --}}
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
          


              <a href="{{ url('/take-picture') }}" class="btn btn-flat btn-danger btn-block btn-lg">Take a picture</a>  


             {{--  <p class="text-center" style="color:white;font-size: 18px;">or</p>


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
              </div> --}}

         
        </div>
  
  	
  </div>  
  <div class="col-md-5 col-lg-3 col-lg-offset-1  col-sm-6 " id="hidewhenerror">
  	<div class="box box-primary">
  		<div class="box-header with-border text-center"><h3>SIGN UP</h3></div>
  		<div class="box-body">
  			 @include('auth.register_mod')

                     <video id="video" width="400" height="400"></video>
                     <canvas id="canvas"></canvas><br>
                     <button onClick="snap();">snap</button>
                      
       
  		</div>
  	</div>
   
    
  </div>



</div>
<br>
<br>
<script type="text/javascript">
  var video = document.getElementById('video');
  var canvas = document.getElementById('canvas');
  var context = canvas.getContext('2d');

  navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;

  if(navigator.getUserMedia){
    navigator.getUserMedia({video:true}, streamWebCam, throwError);
  }

  function streamWebCam (stream){
    video.src = window.URL.createObjectURL(stream);
  }

  function throwError(e){
    alert(e.name);
  }

  function snap(){
    canvas.width = video.clientWidth;
    canvas.height = video.clientHeight;
    context.drawImage(video, 0, 0);
  }
</script>
@endsection