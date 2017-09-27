@extends('layouts.app')

@section('title', 'Online Police Clearance')


@section('content')


@include('modals.modal_new_applicant')
@include('modals.modal_renew_clearance')



<div class="row">
  
  <div class="col-md-6 col-md-offset-3">
        <div class="box box-info">
          <div class="box-body">
              <button class="btn btn-flat bg-olive" type="button" data-toggle="modal" data-target="#new_applicant">New Applicant</button>


          </div>
        </div>

  </div>
    

</div>


<div class="row">

  <div class="col-md-6 col-md-offset-3">
   <div class="box box-info">
     <div class="box-body">
        <button class="btn btn-flat bg-olive" type="button" data-toggle="modal" data-target="#renew_clearance">Renew Clearance</button>


     </div>
   </div>
    
  </div>

</div>









@endsection