<!-- Modal -->
<div class="modal fade" id="take_picture_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      	<div class="camera">
           <video id="video">Video stream not available.</video>
           <button id="startbutton">Take photo</button>
         </div>
      	</div>

	      <canvas id="canvas">
	      </canvas>
	      
	      <div class="output">
	      	<img id="photo" alt="The screen capture will appear in this box.">
	      </div>

      <div class="modal-footer">
      	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>