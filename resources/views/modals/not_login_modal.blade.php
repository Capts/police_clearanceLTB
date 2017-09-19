<!-- Modal -->
<div class="modal fade" id="not_login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     {{--  <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><span class="fa fa-exclamation fa-2x">&nbsp;</span>Please login or sign up to continue</h4>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
      <div class="modal-body">
        <div class="callout callout-danger">
          <h4>Ooops! We detected that you dont have an account yet. <br><br>Login or Register for one.</h4>
        </div>

       @include('auth.login_mod')
       @include('auth.register_mod')
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>