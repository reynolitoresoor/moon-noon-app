<!-- Create Student Modal -->
<div class="modal" id="create-article">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header btn-primary">
        <h4 class="modal-title">Create Article</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         <form action="create.php" method="POST" enctype="multipart/form-data" id="form-create-article">
           <div class="row">
              <div class="col">
                  <smal><span class="text-danger">*</span> All fields are required.</smal><br/>
                  <div class="form-group">
                    <label class="form-label" for="profile">Upload File</label>
                    <input type="file" name="file" id="file" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="text">Article <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="article" id="article" required>
                  </div>
                  <div class="form-group">
                    <label for="content">Content <span class="text-danger">*</span></label>
                    <textarea rows="10" class="form-control" name="content" id="content"></textarea>
                  </div>
              </div>
           </div>
         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="create-article">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

<!-- Edit Student Modal -->
<div class="modal" id="edit-article">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header btn-primary">
        <h4 class="modal-title">Update Article</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         <form action="edit.php" method="POST" enctype="multipart/form-data" id="form-update-article">
           <div class="row">
              <div class="col">
                  <smal><span class="text-danger">*</span> All fields are required.</smal><br/>
                  <div class="form-group">
                    <label class="form-label" for="profile">Upload File</label>
                    <input type="file" name="file" id="file" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="text">Article <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="article" id="article" required>
                  </div>
                  <div class="form-group">
                    <label for="content">Content <span class="text-danger">*</span></label>
                    <textarea rows="10" class="form-control" name="content" id="content"></textarea>
                  </div>
                  <input type="hidden" name="id" id="id" value="" />
              </div>
           </div>
         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="update-article">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

