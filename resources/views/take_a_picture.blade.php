@extends('layouts.app')

@section('title', 'Take a photo')
@section('scripts_track')
  <link rel="stylesheet" href="tracking/examples/assets/demo.css">

  <script src="tracking/build/tracking-min.js"></script>
  <script src="tracking/build/data/face-min.js"></script>
  {{-- <script src="tracking/examples/assets/stats.min.js"></script> --}}
@stop
@section('content')


  <div class="demo-container" style="background-color: #4d8ba8;">
    


    <video id="video" width="320" height="240" preload autoplay loop muted style="margin-left: 120px;position: absolute;"></video>

    {{-- <canvas id="canvas" width="320" height="240" style="margin-left: 120px;position: absolute;"></canvas> --}}

    <canvas id="canvas" class="kk"></canvas>


   
    
   </div>
<button onClick="snapshot()">take photo</button>
<br><br><br><br><br>
<br><br><br><br><br>

  <script type="text/javascript">
    window.onload = function() {
      var video = document.getElementById('video');
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');
      var tracker = new tracking.ObjectTracker('face');
      var localMediaStream = null;

      tracker.setInitialScale(4);
      tracker.setStepSize(2);
      tracker.setEdgesDensity(0.1);
      tracking.track('#video', tracker, { camera: true });
      tracker.on('track', function(event) {
        context.clearRect(0, 0, canvas.width, canvas.height);
        event.data.forEach(function(rect) {
          context.strokeStyle = '#a64ceb';
          context.strokeRect(rect.x, rect.y, rect.width, rect.height);
          context.font = '11px Helvetica';
          context.fillStyle = "#fff";
          context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
          context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
        });
      });
      var gui = new dat.GUI();
      gui.add(tracker, 'edgesDensity', 0.1, 0.5).step(0.01);
      gui.add(tracker, 'initialScale', 1.0, 10.0).step(0.1);
      gui.add(tracker, 'stepSize', 1, 5).step(0.1);
    };


    var snapshot = function() {
      // if (localMediaStream) {
        canvas.width = video.clientWidth;
        canvas.height = video.clientHeight;
        context.drawImage(video, 10, 10);
        
      // }
    }
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


  
    

    video.addEventListener('click', snapshot, false);

    navigator.getUserMedia({video: true}, function(stream) {
      video.src = window.URL.createObjectURL(stream);
      localMediaStream = stream;
    }, function(error){console.error(error)});



  </script>
@stop