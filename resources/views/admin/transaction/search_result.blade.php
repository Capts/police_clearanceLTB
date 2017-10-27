@extends('layouts.app')

@section('title', 'Search result')

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('admin.partials.admin_sidebar')
   
  <div class="content-wrapper" id="content-margin-top">
    <div class="content">
    

      <div class="col-md-12">
        
        {{-- <h4>Search result for: <span class="label label-primary">{{ $search }}</span></h4> --}}
        @if (Session::has('success'))
           <br>
           <div class="alert alert-success" role="alert">
             
             <strong><i class="fa fa-check"></i> </strong> {{ Session::get('success')}}
           </div>
        @elseif(Session::has('danger'))
           <div class="alert alert-danger" role="alert">
             
             <strong><i class="fa fa-exclamation"></i> </strong> {{ Session::get('danger')}}
           </div>
        @endif

          <div class="box box-primary">
            <div class="box-header with-border">
                <div class="col-md-7">
                  <h4>Matches items</h4>
                </div>
                <div class="col-md-5">
                  {!! Form::open(['method' => 'GET', 'route' => 'search']) !!}
                  
                      <div class="input-group{{ $errors->has('find') ? ' has-error' : '' }}">
                          {{-- {!! Form::label('find', 'Search:') !!} --}}
                          {!! Form::text('find', null, ['class' => 'form-control','placeholder' =>'Search name or control number',   'required' => '']) !!}
                          <span class="input-group-btn">
                            <button type="submit"  id="search-btn" class="btn btn-flat bg-primary"><i class="fa fa-search"></i>
                            </button>
                          </span>
                      </div>
                  {!! Form::close() !!}
                </div>
              </div>
            
             
              <div class="box-body">
                @if (is_null($search_control))
                @else
                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th>NAME</th>
                        <th>CONTROL NUMBER</th>
                        <th>APOINTMENT DATE</th>
                        <th>PURPOSE</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $search_control->user->firstname. ' ' . $search_control->user->lastname }}</td>
                        <th>{{ $search_control->control_no}}</th>
                        <td>{{ date("jS F, Y", strtotime($search_control->appointment_date)) }}</td>
                        <td><i>{{ $search_control->purpose }}</i></td>
                        <td>
                          <span>
                            <a href="#" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i> Print</a>
                          </span>&nbsp;&nbsp;&nbsp;
                          {{-- <span><a href="#"><i class="fa fa-user"></i></a></span> --}}
                          <span></span>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                 
                @endif
              </div>
            </div>
            
          </div>
        

      </div>
    </div>
  </div>
</div>

@stop