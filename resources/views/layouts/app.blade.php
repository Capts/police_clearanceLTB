<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color: #4d8ba8;">
    <!-- modals -->
    
    @include('modals.newOrRenew')

    <!-- / modals -->
    <div id="app">
        @include('partials.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

    
   
</script>
</body>
</html>
