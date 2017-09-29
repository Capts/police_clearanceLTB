@extends('layouts.app')

@section('title', 'Dashboard | ' . auth()->user()->firstname . ' ' .auth()->user()->lastname)

@section('content')
<div class="wrapper">
  

  @include('partials.loggedin.main_nav')

  
  @include('partials.loggedin.sidebar')
 
  
  <div class="content-wrapper">

      <section class="content">
        
        safasf
        asf
        as
        f
        as
      </section>

  </div>
  



</div>
@endsection

