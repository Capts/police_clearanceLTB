<!-- Modal -->

<div class="modal fade" id="camera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header bg-olive">

        <h4 class="modal-title text-center" id="exampleModalLabel">
          {{-- <i class="fa fa-camera pull-left"></i> --}}
            <a href="#"><i  class="fa fa-arrow-circle-left fa-2x pull-left  bg-olive" id="back" style="display: none;cursor: pointer;"></i></a>
          Renew your clearance with your photo
          <i class="fa fa-times pull-right" id="remove_when_error" class="close" data-dismiss="modal" aria-label="Close"></i>
        </h4>
        </button>
      </div>
      <div class="modal-body">
        <div class="row with-padding">

          <div id="uploadform" style="display: none;" class="col-md-12 text-center">
     
           
                <div class="col-md-12">
                  <form data-parsley-validate data-parsley-type="email" id="form">
                    <label for="checkemail">Enter your email</label>
                    <input name="email" type="email" id="checkemail" class="form-control text-center" required="" >
                    <br>
                    <button class="btn btn-flat bg-olive" id="checknow">Go</button>
                  </form>

              
                </div>

                
          
         
             
           
         
           
          </div>
           <div id="takeform" style="display: none;" class=" with-padding">
            <p>take a photo</p>
          </div>
        
          <div class="col-md-12 text-center">
            <div class="btn-group">
              <a href="#" class="btn btn-flat bg-olive" id="upload" style="margin-right: 10px;">Upload photo</a>
              <a href="#" class="btn btn-flat bg-olive" id="take">Take a photo</a>
            </div>

            <div class="btn-group">
              <a href="#" class="btn btn-flat bg-olive" id="goUpload" style="display: none;">Upload photo</a>
              <a href="#" class="btn btn-flat bg-olive" id="goTake" style="display: none;">Take a photo</a>
            </div>
          </div>


           
          {{-- <div class="col-md-12">
         
              <div id="cam" style="margin-left: 50px; "></div>
           
              <br>
              <a href="javascript:void(upload())" class="btn btn-flat btn-primary" id="uploadnow" style="margin-top: 2px;display: none; width: 300px;margin-left: 142px;">Upload now</a>
           
            <div class="col-md-12">
              <a href="javascript:void(takeSnap())" class="btn btn-flat bg-olive" id="take" style="display: block; width: 300px;margin-left: 142px;">Take Snapshot</a>
              <a href="javascript:void(resetA())" class="btn btn-flat btn-default" id="reset" style="display: none;margin-top:10px; width: 300px;margin-left: 142px;">Reset</a>
            </div>
              
              
              
          </div> --}}




         
        </div>
      </div>
     
    
     
    </div>
  </div>
</div>
<script src="{{ asset('js/webcam.min.js') }}"></script>

<script>
  $(document).ready(function() {

    //checkemail
    $('#checknow').on('click', function(){
      var email = $('#checkemail').val();
      $.post('renew/checkemail', {'email': email, '_token': $('input[name=_token]').val()}, function(data) {
        /*optional stuff to do after success */
          console.log(data);
          
        // $('#refWelcome').load(location.href + ' #refWelcome');
      });
    });


    var $form = $('#form');

    var $submit = $form.find('submit');

    var checkValid = function(){
       if( $form.parsley('isValid') ) {
          $submit.removeAttr("disabled");
       } else {
          $submit.attr("disabled", "disabled");
       }
    }
    checkValid();

    $form.parsley( 'addListener', {
       onFieldSuccess: function ( elem ) {
          checkValid();
       }
       , onFieldError: function ( elem ) {
          checkValid();
       }
    } );





    $('#upload').on('click', function(){

      //show
      $('#uploadform').show(100);
      
      $('#back').css('display', '');

      //hide
      $('#upload').hide();
      $('#take').hide();
      $('#goUpload').hide();
     
      //css
      // $('#goUpload').css('margin-top', '200px');
    });

    $('#take').on('click', function(){

      //show
      $('#takeform').show(100);
      $('#goTake').css('display', '');
      $('#back').css('display', '');

      //hide
      $('#take').hide();
      $('#upload').hide();
     
      //css
      // $('#goTake').css('margin-top', '200px');
    });

    $('#back').on('click', function(){

      //show
      $('#upload').show(100);
      $('#take').show(100);
     

      //hide
      $('#back').hide();
      $('#uploadform').hide();
      $('#takeform').hide();
      $('#goUpload').hide();
      $('#goTake').hide();
     
     
    });


  });


</script>

{{-- 
<script type="text/javascript" language="Javascript">


   

      // Webcam.set({
      //     height: 350,
      //     width: 450,
      //     dest_width: 450,
      //     dest_height: 350,
      //     image_format: 'jpeg',
      //     jpeg_quality: 90,
      //     fps: 45
      // });

      // Webcam.attach('#cam');

          function takeSnap() {

            Webcam.snap(function(data_uri) {

              document.getElementById('cam').innerHTML = '<img src="'+data_uri+'"/>';
              document.getElementById('reset').style.display = 'block';
              document.getElementById('take').style.display = 'none';
              document.getElementById('uploadnow').style.display = 'block';
            });
          }



          function resetA(){
            Webcam.reset();
            Webcam.attach('#cam');
            document.getElementById('take').style.display = 'block';
            document.getElementById('reset').style.display = 'none';
            document.getElementById('uploadnow').style.display = 'none';

          }

          // function upload(){
          //   
          //   });
          // }

</script> --}}