@extends('layouts.app')

@section('title', 'Take a photo')
@section('scripts_track')
  <link rel="stylesheet" href="tracking/examples/assets/demo.css">

  <script src="tracking/build/tracking-min.js"></script>
  <script src="tracking/build/data/face-min.js"></script>
  {{-- <script src="tracking/examples/assets/stats.min.js"></script> --}}
@stop
@section('content')


  <div class="container" style="background-color: #4d8ba8;">
    
  <div class="row">
    <div class="col-md-2">
      <button onClick="snapshot();">take photo</button>
      <button onclick="startWebcam();">Start WebCam</button>
      <button onclick="stopWebcam();">Stop WebCam</button>
    </div>
    <div class="col-md-5">
       <video id="video" width="320" height="240" preload autoplay loop muted style="margin-left: 120px;position: absolute;"></video>

       
    </div>
    <div class="col-md-5">
      <canvas id="canvas" width="320" height="240" style="margin-left: 120px;position: absolute;"></canvas>
    </div>
  </div>



   
    
   </div>



<br><br><br><br><br>
<br><br><br><br><br>

  <script >

   navigator.getUserMedia = ( navigator.getUserMedia ||
                                navigator.webkitGetUserMedia ||
                                navigator.mozGetUserMedia ||
                                navigator.msGetUserMedia);

         var video;
         var webcamStream;

         function startWebcam() {
           if (navigator.getUserMedia) {
              navigator.getUserMedia (

                 // constraints
                 {
                    video: true,
                    audio: false
                 },

                 // successCallback
                 function(localMediaStream) {
                    video = document.querySelector('video');
                    video.src = window.URL.createObjectURL(localMediaStream);
                    webcamStream = localMediaStream;

                 },

                 // errorCallback
                 function(err) {
                    console.log("The following error occured: " + err);
                 }
              );
           } else {
              console.log("getUserMedia not supported");
           }  
         }

         function stopWebcam() {
             webcamStream.stop();
         }
         //---------------------
         // TAKE A SNAPSHOT CODE
         //---------------------
         var canvas, ctx;

         function init() {
           // Get the canvas and obtain a context for
           // drawing in it
           canvas = document.getElementById("canvas");
           ctx = canvas.getContext('2d');


         }

         function snapshot() {
            // Draws current image from the video element into the canvas
           ctx.drawImage(video, 0,0, canvas.width, canvas.height);
         }


    // window.onload = function() {
      // var video = document.getElementById('video');
      // var canvas = document.getElementById('canvas');
      // var context = canvas.getContext('2d');
      // var tracker = new tracking.ObjectTracker('face');
      // var localMediaStream = null;

      // tracker.setInitialScale(4);
      // tracker.setStepSize(2);
      // tracker.setEdgesDensity(0.1);
      // tracking.track('#video', tracker, { camera: true });
      // tracker.on('track', function(event) {
      //   context.clearRect(0, 0, canvas.width, canvas.height);
      //   event.data.forEach(function(rect) {
      //     context.strokeStyle = '#a64ceb';
      //     context.strokeRect(rect.x, rect.y, rect.width, rect.height);
      //     context.font = '11px Helvetica';
      //     context.fillStyle = "#fff";
      //     context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
      //     context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
      //   });
      // });
     
    // };


    // var snapshot = function() {
    //   if (localMediaStream) {
    //     canvas.width = video.clientWidth;
    //     canvas.height = video.clientHeight;
    //     context.drawImage(video, 0,0, canvas.width, canvas.height);
        
    //   }
    // }
    // navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;



  
    

    // video.addEventListener('click', snapshot, false);

    // navigator.getUserMedia({video: true}, function(stream) {
    //   video.src = window.URL.createObjectURL(stream);
    //   localMediaStream = stream;
    // }, function(error){console.error(error)});



  </script>
@stop