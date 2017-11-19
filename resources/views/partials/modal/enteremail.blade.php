<!-- Modal -->

<div class="modal fade" id="enteremail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title text-center" id="exampleModalLabel"><i class="fa fa-envelope pull-left fa-2x"></i>Enter your email address</span>
        <i class="fa fa-times pull-right" id="remove_when_error" class="close" data-dismiss="modal" aria-label="Close"></i>
        </h4>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
           
     {{--        
            {!! Form::open(['method' => 'POST', 'route' => 'checkemail', 'data-parsley-validate' => '']) !!}
            
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Email Address') !!}
                    {!! Form::text('email', null, ['class' => 'form-control','autofocus'=>'autofocus', 'required' => 'required', 'id' => 'emailcheck', 'data-parsley-type' => 'email']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
            
                  
                    {!! Form::submit("Check", ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
              
            {!! Form::close() !!}
            --}}
           
            


               {{--  <a href="#" id="releasethekrakken" class="btn btn-flat bg-olive" data-toggle="modal" data-target="#modalrenew" data-dismiss="modal">Check</a> --}}
               
           
               
                 
                   
              
          </div>
        </div>
      </div>
     
    
     
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
        $("#btn-submit").click(function(e){
          var emailT = $('#emailcheck').val();
          $.post('renew', {'emailT':emailT, '_token':$('input[name=_token]').val()}, function(data) {
            // console.log(data);
          });

        }); 

     

  });
</script>