<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
</head>
<body style="background-color: #4d8ba8;height: auto;padding-bottom: 0px;">
    
    <div id="app">
        @include('partials.nav')
        
        @yield('content') 
    </div>
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
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
