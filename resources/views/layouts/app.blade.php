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
      @else
        {{-- @include('partials.loggedin.main_nav') --}}
      @endguest
        @include('partials.header')
        
        @yield('content') 
    </div>
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <link href="{{ asset('js/steps.js') }}" rel="stylesheet">

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>




</body>
</html>
