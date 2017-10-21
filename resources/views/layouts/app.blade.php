<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
</head>
{{-- <body style="background-color: #4d8ba8;height: auto;padding-bottom: 0px;"> --}}
<body class="hold-transition skin-blue sidebar-mini" style="height: auto;padding-bottom: 0px;background-color: #4d8ba8;">
    
    <div id="app">
    
      @guest
        @include('partials.nav')
        @include('partials.header')
      @else
        {{-- @include('partials.loggedin.main_nav') --}}
      @endguest
        
        
        @yield('content') 
        
    </div>
    @include('partials.footer')


    <!-- Scripts -->

    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tokenfield.min.js') }}"></script>
    <script src="{{ asset('js/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
      

      $('#tokenfield').tokenfield({
        showAutocompleteOnFocus: true
      });

     $('#datepicker').datepicker({
      autoclose: true
    });
     $('#datepicker1').datepicker({
      autoclose: true
    });
     $('#datepickerDOB').datepicker({
      autoclose: true
    });


    </script>
  




</body>
</html>
