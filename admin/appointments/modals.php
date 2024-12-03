<!-- Create Student Modal -->
<div class="modal" id="create-student">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header btn-primary">
        <h4 class="modal-title">Create Student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         <form action="create.php" method="POST" id="form-create-student">
           <div class="row">
              <div class="col">
                  <smal><span class="text-danger">*</span> All fields are required.</smal>
                  <div class="form-group">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="username">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" id="username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                  </div>
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                  </div>
              </div>
           </div>
         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="create-student">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

<!-- Edit Student Modal -->
<div class="modal" id="edit-student">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header btn-primary">
        <h4 class="modal-title">Update Student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         <form action="edit.php" method="POST" id="form-update-student">
           <div class="row">
              <div class="col">
                  <smal><span class="text-danger">*</span> All fields are required.</smal>
                  <div class="form-group">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="username">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" id="username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                  </div>
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                  </div>
                  <input type="hidden" name="user_id" id="user_id" value="" />
              </div>
           </div>
         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="update-student">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

