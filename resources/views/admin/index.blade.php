@section('title', 'Admin index')

  @section('content')

  <div class="wrapper">
    @include('partials.nav')
    @include('admin.partials.admin_sidebar')
    
    <div class="content-wrapper">
    
      <div class="content" style="vertical-align: middle;margin-top: 50px;text-align: center;">
        <h5 class="text-default" style="font-size: 22px;">
          Welcome admin!

        </h5>
        <p class="text-center">
          <p class="lead">

            <div id="myclock"></div><br>
            {{  date("jS F Y", strtotime(now())) }}

          </p>
        </p>
      </div>
             
     
     

    </div>
    


  </div>
  <script>
    $('#myclock').thooClock({
      size:250,
      dialColor:'#000000',
      dialBackgroundColor:'transparent',
      secondHandColor:'#F3A829',
      minuteHandColor:'#222222',
      hourHandColor:'#222222',
      alarmHandColor:'#FFFFFF',
      alarmHandTipColor:'#026729',
      hourCorrection:'+0',
      alarmCount:1,
      showNumerals:true
    });

  </script>
  @endsection
