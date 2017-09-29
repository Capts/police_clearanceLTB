@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')


<div class="row" style="margin:30px auto;">

  <div class="col-md-5 col-md-offset-1">
    <div class="well" style="margin-top:40px;height: 520px;background-color: transparent;">
      some info here
    </div>
    
  </div>

  

 


  <div class="col-md-4 col-md-offset-2" style="padding-top: 0;">
  
    @include('auth.register_mod')
    
  </div>



</div>









@endsection