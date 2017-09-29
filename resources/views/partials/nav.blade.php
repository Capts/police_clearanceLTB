<div class="navbar navbar-custom navbar-static-top ">
  <div class="container">

    
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       
   
          <a class="navbar-brand hidden-xs " style="height: 100px;" href="/" >
           
            <img src="/img/baguio_logo.png" height="70px" width="70px" alt="" class="pull-left">
            
            <span style="margin-left: 10px;"> Police Clearance Online Application</span><br>
            <span style="margin-left: 10px;margin-top:52px;"> <small>Baguio-Benguet</small></span>
          </a>
          

          <a class="navbar-brand visible-xs " style="height: 100px;" href="/" >
         
            <img src="/img/baguio_logo.png" height="50px" width="50px" alt="" class="pull-left">
           
            <span style="margin-left: 10px;">Online Application</span><br>
            <span style="margin-left: 10px;margin-top:52px;"> <small>Baguio-Benguet</small></span>
            
          </a>

      </div>
  
    

     <div class="collapse navbar-collapse">
        <div class="nav navbar-nav navbar-right">
          @auth
            <img src="/img/pnp_logo.png" height="70px" width="60px" alt="" class="pull-right">
            <span>Police Hotline numbers</span><br>
            <span>Globe: 9128401091</span><br>
            <span>Smart: 9128401001</span><br>
          @else
            @include('auth.nav_login')
          @endauth
        </div>
      </div>


  </div>
</div>

<!--   -->