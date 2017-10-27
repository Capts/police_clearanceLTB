@extends('layouts.app')

@section('title', 'Admin | Pending transactions')

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('admin.partials.admin_sidebar')
   
  <div class="content-wrapper" id="content-margin-top">
    <div class="content">
    
        <div class="col-md-12">
          @if (Session::has('success'))
             <br>
             <div class="alert alert-success" role="alert">
               
               <strong><i class="fa fa-check"></i> </strong> {{ Session::get('success')}}
             </div>
          @elseif(Session::has('danger'))
             <div class="alert alert-danger" role="alert">
               
               <strong><i class="fa fa-exclamation"></i> Warning</strong> {{ Session::get('danger')}}
             </div>
          @endif
        </div>
      
        <div class="box box-primary">
          <div class="box-header with-border">
            <div class="col-md-7">
              <h4>Pending appointments</h4>
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
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>NAME</th>
                      <th>CONTORL NUMBER</th>
                      <th>APPOINTMENT DATE</th>
                      <th>PURPOSE</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody >
                    @foreach ($applications as $application)
                    <tr>
                      <td>
                      {{-- @if (strlen($application->user->lastname) >  22)
                            {{ ucfirst(str_limit($application->user->lastname, 22)) }}
                      @else --}}
                          {{ $application->user->firstname. ' '. $application->user->lastname }}
                      {{-- @endif --}}
                      </td>
                      <td>{{ $application->control_no }}</td>
                      <td>{{ date("j F, Y", strtotime($application->appointment_date)) }}</td>
                      <td>{{ $application->purpose }}</td>
                      <td>
                        <span><a href="#" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i> Print</a></span>&nbsp;&nbsp;&nbsp;
                        {{-- <span><a href="#"><i class="fa fa-user"></i></a></span> --}}
                        <span></span>
                      </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              {{-- <div class="text-center">
                {!! $application->links() !!}
              </div> --}}
            </div>
        </div>
        
    </div>
  </div>
</div>

@stop