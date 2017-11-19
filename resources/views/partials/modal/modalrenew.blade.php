<!-- Modal -->
<div class="modal fade" id="modalrenew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-center" id="exampleModalLabel"><i class="fa fa-upload pull-left fa-2x"></i>Upload image</span>
        <i class="fa fa-times pull-right" class="close" data-dismiss="modal" aria-label="Close"></i>
        </h5>
        </button>
      </div>
      
      <div id="opensesame">
        <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">

                    
                   
                      {{-- <p class="text-center"><img src="/upload/avatars/" height="200px" width="200px" class=" img-circle" style="border:2px solid silver;"></p> --}}
                  
         
                    <label for="">Select image</label>
                    <input type="file" name="avatar" class="form-control">
                 
                </div>
                <section class="modal-footer text-center">
                   <button class="btn btn-flat btn-primary text-center btn-block" data-toggle="tooltip" title="Upload now"> Upload now</button>
                 </section>

              </form>
      </div>
    
     
    </div>
  </div>
</div>