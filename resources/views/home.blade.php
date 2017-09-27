@extends('layouts.app')

@section('title', 'Welcome to police clearance online application')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
         
            <!-- User  profile -->
            <section id="name">
                
                <div class="box box-info">
                    <div class="box-body">
                        <section id="prof_pic" >
                            <span>
                                <img src="{{ Storage::url(auth()->user()->avatar) }}" width="100px" height="100px" class="user-image img-circle" alt="User Image">
                            </span>
                                {{ ucfirst(auth()->user()->firstname). ' '  .ucfirst(auth()->user()->lastname)  }}</span>
                       
                            <span class="pull-right" style="margin-top: 30px; ">
                               
                                  <a class="btn btn-danger btn-block btn-flat " href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                     Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                
                            </span>
                        </section>
                      
                              
                    
                    </div>
                </div>

            </section>




          
        </div>
    </div>
</div>
@endsection

