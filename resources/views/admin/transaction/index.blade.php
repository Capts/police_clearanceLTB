@extends('layouts.app')

@section('title', 'Search result')

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('admin.partials.admin_sidebar')
   
  <div class="content-wrapper" id="content-margin-top">
    <div class="content">
    

      <div class="col-md-12">
        
        <h3 class="text center">Search result</h3>
     
      <div class="box box-primary">
        <div class="box-header with-border">
        
        </div>
        <div class="box-body">
          @if (is_null($search_control) AND is_null($getname))
            {{ 'yeye'}}
          @else
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Control number</th>
                  <th>Appointment date</th>
                  <th>Purpose</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $getname->firstname. ' ' . $getname->lastname }}</td>
                  <th>{{ $search_control->control_no}}</th>
                  <td>{{ date("jS F, Y", strtotime($search_control->appointment_date)) }}</td>
                  <td><i>{{ $search_control->purpose }}</i></td>
                </tr>
              </tbody>
            </table>
          @endif
          
          
        </div>
        <div class="box-footer">
          <div class="section pull-right">
            <button class="btn btn-flat btn-primary">Print</button>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>

@stop