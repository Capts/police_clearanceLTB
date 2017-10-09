@extends('layouts.app')

@section('title', 'Dashboard | ' . auth()->user()->firstname . ' ' .auth()->user()->lastname)

@section('content')
<div class="wrapper">
  

  @include('partials.loggedin.main_nav')

  
  @include('partials.loggedin.sidebar')
 
  
  <div class="content-wrapper">

      <section class="content">
        
        

        <div class="box box-info">


          <div class="box-body">
            <br>
            <p class="pull-right">{{ date('M j,Y', strtotime($todate)) }}</p></p>

            <section id="picture"  >
              {{-- <a href="#" class="btn"><i class="fa fa-camera fa-2x"></i></a> --}} <button id="button1">sss</button>
              <img src="{{ Storage::url(auth()->user()->avatar) }}"  alt="" class=" thumbnailImage kk">
            </section>
          </div>
          
        </div>



      </section>

  </div>
  



</div>
@endsection

