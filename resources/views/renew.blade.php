@extends('layouts.app')

@section('title', 'Online Police Clearance | Renew')


@section('content')


<div class="row" style="margin:30px auto;height: 500px;">
  
  
  <div class="col-md-5 col-md-offset-4  col-lg-4 col-lg-offset-4 col-sm-offset-3 col-sm-6 col-xs-8 col-xs-offset-2">
   

    <div class="box box-info" id="opensesame" style="display: none;">
      <div class="box-header with-border">
        <h4 class="text-center">{{ $checkEmail->email }}</h4>
          
      </div>
      
      <div class="box-body">
        <div id="uploadform">
          <form action="{{ route('renew.store') }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="modal-body">
                    <input name="email" type="email" value="{{ $checkEmail->email }}" style="display: none;">
                    <div class="col-md-12">
                      <label for="">Select purpose</label>
                      <select name="purpose" class="form-control btn-primary" id="purpose" data-parsley-required required>
                        @if ($purposes->count() > 0)
                          <option value="" disabled selected style="color:white;">select one</option>
                          @foreach ($purposes as $purpose)
                            <option value="{{ $purpose->purpose }}">{{ $purpose->purpose }}</option>
                          @endforeach
                        @endif
                      </select>
                      <br>
                    </div>
                   
                     
                    <div class="col-md-12">
                      {{-- <label for="datetimepicker">Appointment schedule</label> --}}
                    
                        <label for="">Appointment date</label>
                        <input name="appointment_date" id="datetimepicker" type="text" class="form-control" required="" placeholder="Select appointment date.">
                     <br>
                    </div>
                    
                    <div class="col-md-12">
                      <label for="">Select image</label>
                      <input type="file" name="avatar" class="form-control">
                    </div>
                   
                  </div>
                  
                  <div class="col-md-12">
                    <div class="modal-footer text-center">
                       <button class="btn btn-flat btn-primary text-center pull-right" data-toggle="tooltip" title="Upload now"> Renew clearance</button>
                       <button class="btn btn-flat bg-olive text-center pull-left" data-toggle="tooltip" title="Upload now"> Edit information</button>
                    </div>
                  </div>
          </form>
        </div>
        
        
      </div>
    </div>

 
</div>
<script type="text/javascript">
  $(document).ready(function() {

      $('#opensesame').show();

      $('#datetimepicker').datetimepicker({
        // formatTime: 'H:i a',
        lang: 'en',
        theme: 'default',
        minDate: 'dateToday',
        timepicker:false,
      
      });
  });


</script>
@endsection