<!-- Modal -->
<div class="modal fade" id="enter_trans_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-search"></i> Find transaction using control number. <i class="fa fa-times pull-right close" data-dismiss="modal" aria-label="Close"></i></h4>
        
      </div>
      <div class="modal-body">
        {!! Form::open(['method' => 'GET', 'route' => 'search','data-parsley-validate' => '']) !!}
          <div class="input-group">
            <input type="number" name="find" class="form-control input-lg" placeholder="Enter Control Number">
            <span class="input-group-btn">
              <button type="submit"  id="search-btn" class="btn btn-flat bg-primary btn-lg "><i class="fa fa-search"></i>
              </button>
            </span>
          </div>

        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>